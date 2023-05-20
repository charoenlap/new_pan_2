<?php
class ControllerCheckoutQuickCheckout extends Controller {

	public function index() {
		$this->load->language('checkout/checkout');

		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('checkout/quick_checkout');
			$this->response->redirect($this->url->link('account/login'));
		}

		// Validate cart has products and has stock.
		if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
			$this->response->redirect($this->url->link('checkout/cart'));
		}

		// Validate minimum quantity requirements.
		$products = $this->cart->getProducts();

		foreach ($products as $product) {
			$product_total = 0;

			foreach ($products as $product_2) {
				if ($product_2['product_id'] == $product['product_id']) {
					$product_total += $product_2['quantity'];
				}
			}

			if ($product['minimum'] > $product_total) {
				$this->response->redirect($this->url->link('checkout/cart'));
			}
		}


		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_cart'),
			'href' => $this->url->link('checkout/cart')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('checkout/checkout', '', true)
		);

		$data['shipping_required'] = $this->cart->hasShipping();


		$this->load->model('account/address');
		$customer_address = $this->model_account_address->getAddress($this->customer->getAddressId());

		// Shipping Method
		if (isset($customer_address)) {
			// Shipping Methods
			$method_data = array();

			$this->load->model('setting/extension');

			$results = $this->model_setting_extension->getExtensions('shipping');

			foreach ($results as $result) {
				if ($this->config->get('shipping_' . $result['code'] . '_status')) {
					$this->load->model('extension/shipping/' . $result['code']);

					$quote = $this->{'model_extension_shipping_' . $result['code']}->getQuote($customer_address);

					if ($quote) {
						$method_data[$result['code']] = array(
							'title'      => $quote['title'],
							'quote'      => $quote['quote'],
							'sort_order' => $quote['sort_order'],
							'error'      => $quote['error']
						);
					}
				}
			}

			$sort_order = array();

			foreach ($method_data as $key => $value) {
				$sort_order[$key] = $value['sort_order'];
			}

			array_multisort($sort_order, SORT_ASC, $method_data);

			$this->session->data['shipping_methods'] = $method_data;
			$data['shipping_methods'] = $this->session->data['shipping_methods'];

			unset($data['code']);
		}
		// Shipping Method


		// Payment Method
		if (isset($customer_address)) {
			// Totals
			$totals = array();
			$taxes = $this->cart->getTaxes();
			$total = 0;

			// Because __call can not keep var references so we put them into an array.
			$total_data = array(
				'totals' => &$totals,
				'taxes'  => &$taxes,
				'total'  => &$total
			);
			
			$this->load->model('setting/extension');

			$sort_order = array();

			$results = $this->model_setting_extension->getExtensions('total');

			foreach ($results as $key => $value) {
				$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
			}

			array_multisort($sort_order, SORT_ASC, $results);

			foreach ($results as $result) {
				if ($this->config->get('total_' . $result['code'] . '_status')) {
					$this->load->model('extension/total/' . $result['code']);
					
					// We have to put the totals in an array so that they pass by reference.
					$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
				}
			}

			// Payment Methods
			$method_data = array();

			$this->load->model('setting/extension');

			$results = $this->model_setting_extension->getExtensions('payment');

			$recurring = $this->cart->hasRecurringProducts();

			foreach ($results as $result) {
				if ($this->config->get('payment_' . $result['code'] . '_status')) {
					$this->load->model('extension/payment/' . $result['code']);

					$method = $this->{'model_extension_payment_' . $result['code']}->getMethod($customer_address, $total);

					if ($method) {
						if ($recurring) {
							if (property_exists($this->{'model_extension_payment_' . $result['code']}, 'recurringPayments') && $this->{'model_extension_payment_' . $result['code']}->recurringPayments()) {
								$method_data[$result['code']] = $method;
							}
						} else {
							$method_data[$result['code']] = $method;
						}
					}
				}
			}

			$sort_order = array();

			foreach ($method_data as $key => $value) {
				$sort_order[$key] = $value['sort_order'];
			}

			array_multisort($sort_order, SORT_ASC, $method_data);

			$this->session->data['payment_methods'] = $method_data;
			$data['payment_methods'] = $this->session->data['payment_methods'];
		}
		// Payment Method

		
		// Product In Cart
		if ($this->cart->hasProducts() || !empty($this->session->data['vouchers'])) {
			if (!$this->cart->hasStock() && (!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning'))) {
				$data['error_warning'] = $this->language->get('error_stock');
			} elseif (isset($this->session->data['error'])) {
				$data['error_warning'] = $this->session->data['error'];

				unset($this->session->data['error']);
			} else {
				$data['error_warning'] = '';
			}

			if ($this->config->get('config_customer_price') && !$this->customer->isLogged()) {
				$data['attention'] = sprintf($this->language->get('text_login'), $this->url->link('account/login'), $this->url->link('account/register'));
			} else {
				$data['attention'] = '';
			}

			if (isset($this->session->data['success'])) {
				$data['success'] = $this->session->data['success'];

				unset($this->session->data['success']);
			} else {
				$data['success'] = '';
			}

			$data['action'] = $this->url->link('checkout/cart/edit', '', true);

			if ($this->config->get('config_cart_weight')) {
				$data['weight'] = $this->weight->format($this->cart->getWeight(), $this->config->get('config_weight_class_id'), $this->language->get('decimal_point'), $this->language->get('thousand_point'));
			} else {
				$data['weight'] = '';
			}

			$this->load->model('tool/image');
			$this->load->model('tool/upload');
			$this->load->model('catalog/product');

			$data['products'] = array();

			$products = $this->cart->getProducts();

			foreach ($products as $product) {
				$product_total = 0;

				foreach ($products as $product_2) {
					if ($product_2['product_id'] == $product['product_id']) {
						$product_total += $product_2['quantity'];
					}
				}

				if ($product['minimum'] > $product_total) {
					$data['error_warning'] = sprintf($this->language->get('error_minimum'), $product['name'], $product['minimum']);
				}

				if ($product['image']) {
					$image = $this->model_tool_image->resize($product['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_height'));
				} else {
					$image = '';
				}

				$option_data = array();

				foreach ($product['option'] as $option) {
					if ($option['type'] != 'file') {
						$value = $option['value'];
					} else {
						$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

						if ($upload_info) {
							$value = $upload_info['name'];
						} else {
							$value = '';
						}
					}

					$option_data[] = array(
						'name'  => $option['name'],
						'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
					);
				}

				// Display prices
				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$unit_price = $this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax'));
					
					$price = $this->currency->format($unit_price, $this->session->data['currency']);
					$total = $this->currency->format($unit_price * $product['quantity'], $this->session->data['currency']);
				} else {
					$price = false;
					$total = false;
				}

				$recurring = '';

				if ($product['recurring']) {
					$frequencies = array(
						'day'        => $this->language->get('text_day'),
						'week'       => $this->language->get('text_week'),
						'semi_month' => $this->language->get('text_semi_month'),
						'month'      => $this->language->get('text_month'),
						'year'       => $this->language->get('text_year')
					);

					if ($product['recurring']['trial']) {
						$recurring = sprintf($this->language->get('text_trial_description'), $this->currency->format($this->tax->calculate($product['recurring']['trial_price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['trial_cycle'], $frequencies[$product['recurring']['trial_frequency']], $product['recurring']['trial_duration']) . ' ';
					}

					if ($product['recurring']['duration']) {
						$recurring .= sprintf($this->language->get('text_payment_description'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
					} else {
						$recurring .= sprintf($this->language->get('text_payment_cancel'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
					}
				}

				// $product_free = array();

				// $results = $this->model_catalog_product->getProductFree($product['product_id']);

				// foreach ($results as $result) {
				// 	if ($result['image']) {
				// 		$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				// 	} else {
				// 		$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				// 	}

				// 	$product_free[] = array(
				// 		'product_id'  => $result['product_id'],
				// 		'thumb'       => $image,
				// 		'name'        => $result['name'],
				// 	);
				// }

				$data['products'][] = array(
					'cart_id'   => $product['cart_id'],
					'thumb'     => $image,
					'name'      => $product['name'],
					'model'     => $product['model'],
					// 'free'      => $product_free,
					'option'    => $option_data,
					'recurring' => $recurring,
					'quantity'  => $product['quantity'],
					'stock'     => $product['stock'] ? true : !(!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')),
					'reward'    => ($product['reward'] ? sprintf($this->language->get('text_points'), $product['reward']): ''),
					'price'     => $price,
					'total'     => $total,
					'href'      => $this->url->link('product/product', 'product_id=' . $product['product_id'])
				);
			}

			// Gift Voucher
			$data['vouchers'] = array();

			if (!empty($this->session->data['vouchers'])) {
				foreach ($this->session->data['vouchers'] as $key => $voucher) {
					$data['vouchers'][] = array(
						'key'         => $key,
						'description' => $voucher['description'],
						'amount'      => $this->currency->format($voucher['amount'], $this->session->data['currency']),
						'remove'      => $this->url->link('checkout/cart', 'remove=' . $key)
					);
				}
			}

			// Totals
			$this->load->model('setting/extension');

			$totals = array();
			$taxes = $this->cart->getTaxes();
			$total = 0;
			// Because __call can not keep var references so we put them into an array. 			
			$total_data = array(
				'totals' => &$totals,
				'taxes'  => &$taxes,
				'total'  => &$total
			);
			// Display prices
			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$sort_order = array();
				$results = $this->model_setting_extension->getExtensions('total');
				foreach ($results as $key => $value) {
					$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
				}
				array_multisort($sort_order, SORT_ASC, $results);
				foreach ($results as $result) {
					if ($this->config->get('total_' . $result['code'] . '_status')) {
						$this->load->model('extension/total/' . $result['code']);
						// We have to put the totals in an array so that they pass by reference.
						$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
					}
				}
				$sort_order = array();
				foreach ($totals as $key => $value) {
					$sort_order[$key] = $value['sort_order'];
				}
				array_multisort($sort_order, SORT_ASC, $totals);
			}
			$data['totals'] = array();
			foreach ($totals as $total) {
				$data['totals'][] = array(
					'title' => $total['title'],
					'text'  => $this->currency->format($total['value'], $this->session->data['currency'])
				);
			}

			$data['continue'] = $this->url->link('common/home');

			$data['checkout'] = $this->url->link('checkout/checkout', '', true);

			$this->load->model('setting/extension');

			$data['modules'] = array();
			$files = glob(DIR_APPLICATION . '/controller/extension/total/*.php');
			if ($files) {
				foreach ($files as $file) {
					$result = $this->load->controller('extension/total/' . basename($file, '.php'));
					if ($result) {
						$data['modules'][] = $result;
					}
				}
			}
		}
		// Product In Cart


		// Payment address
		if (isset($this->session->data['payment_address']['address_id'])) {
			$data['payment_address_address_id'] = $this->session->data['payment_address']['address_id'];
		} else {
			$data['payment_address_address_id'] = $this->customer->getAddressId();
		}

		$this->load->model('account/address');

		$data['payment_address_addresses'] = $this->model_account_address->getAddresses();

		if (isset($this->session->data['payment_address']['country_id'])) {
			$data['payment_address_country_id'] = $this->session->data['payment_address']['country_id'];
		} else {
			$data['payment_address_country_id'] = $this->config->get('config_country_id');
		}

		if (isset($this->session->data['payment_address']['zone_id'])) {
			$data['payment_address_zone_id'] = $this->session->data['payment_address']['zone_id'];
		} else {
			$data['payment_address_zone_id'] = '';
		}

		$this->load->model('localisation/country');

		$data['payment_address_countries'] = $this->model_localisation_country->getCountries();

		// Custom Fields
		$data['payment_address_custom_fields'] = array();
		$this->load->model('account/custom_field');

		$custom_fields = $this->model_account_custom_field->getCustomFields($this->config->get('config_customer_group_id'));

		foreach ($custom_fields as $custom_field) {
			if ($custom_field['location'] == 'address') {
				$data['payment_address_custom_fields'][] = $custom_field;
			}
		}

		if (isset($this->session->data['payment_address']['custom_field'])) {
			$data['payment_address_custom_field'] = $this->session->data['payment_address']['custom_field'];
		} else {
			$data['payment_address_custom_field'] = array();
		}
		// Payment address



		// Shipping Address
		if (isset($this->session->data['shipping_address']['address_id'])) {
			$data['shipping_address_address_id'] = $this->session->data['shipping_address']['address_id'];
		} else {
			$data['shipping_address_address_id'] = $this->customer->getAddressId();
		}

		$this->load->model('account/address');

		$data['shipping_address_addresses'] = $this->model_account_address->getAddresses();

		if (isset($this->session->data['shipping_address']['postcode'])) {
			$data['shipping_address_postcode'] = $this->session->data['shipping_address']['postcode'];
		} else {
			$data['shipping_address_postcode'] = '';
		}

		if (isset($this->session->data['shipping_address']['country_id'])) {
			$data['shipping_address_country_id'] = $this->session->data['shipping_address']['country_id'];
		} else {
			$data['shipping_address_country_id'] = $this->config->get('config_country_id');
		}

		if (isset($this->session->data['shipping_address']['zone_id'])) {
			$data['shipping_address_zone_id'] = $this->session->data['shipping_address']['zone_id'];
		} else {
			$data['shipping_address_zone_id'] = '';
		}

		$this->load->model('localisation/country');

		$data['shipping_address_countries'] = $this->model_localisation_country->getCountries();

		// Custom Fields
		$data['shipping_address_custom_fields'] = array();
		
		$this->load->model('account/custom_field');

		$custom_fields = $this->model_account_custom_field->getCustomFields($this->config->get('config_customer_group_id'));

		foreach ($custom_fields as $custom_field) {
			if ($custom_field['location'] == 'address') {
				$data['shipping_address_custom_fields'][] = $custom_field;
			}
		}

		if (isset($this->session->data['shipping_address']['custom_field'])) {
			$data['shipping_address_custom_field'] = $this->session->data['shipping_address']['custom_field'];
		} else {
			$data['shipping_address_custom_field'] = array();
		}
		// Shipping Address


		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('checkout/quick_checkout', $data));
	}


	public function save() {
		$order_data = array();
		$totals = array();
		$taxes = $this->cart->getTaxes();
		$total = 0;
		// Because __call can not keep var references so we put them into an array.
		$total_data = array(
			'totals' => &$totals,
			'taxes'  => &$taxes,
			'total'  => &$total
		);
		$this->load->model('setting/extension');
		$sort_order = array();
		$results = $this->model_setting_extension->getExtensions('total');
		foreach ($results as $key => $value) {
			$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
		}
		array_multisort($sort_order, SORT_ASC, $results);
		foreach ($results as $result) {
			if ($this->config->get('total_' . $result['code'] . '_status')) {
				$this->load->model('extension/total/' . $result['code']);
				// We have to put the totals in an array so that they pass by reference.
				$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
			}
		}
		$sort_order = array();
		foreach ($totals as $key => $value) {
			$sort_order[$key] = $value['sort_order'];
		}
		array_multisort($sort_order, SORT_ASC, $totals);
		$order_data['totals'] = $totals;

		// Default
		$order_data['invoice_no']              = '';
		$order_data['invoice_prefix']          = '';
		$order_data['store_id']                = '';
		$order_data['store_name']              = '';
		$order_data['store_url']               = '';
		
		$order_data['customer_id']             = '';
		$order_data['customer_group_id']       = '';
		$order_data['firstname']               = '';
		$order_data['lastname']                = '';
		$order_data['email']                   = '';
		$order_data['telephone']               = '';
		$order_data['fax']                     = '';
		$order_data['custom_field']            = '';
		
		$order_data['payment_firstname']       = '';
		$order_data['payment_lastname']        = '';
		$order_data['payment_company']         = '';
		$order_data['payment_address_1']       = '';
		$order_data['payment_address_2']       = '';
		$order_data['payment_ciy']             = '';
		$order_data['payment_postcode']        = '';
		$order_data['payment_country']         = '';
		$order_data['payment_country_id']      = '';
		$order_data['payment_zone']            = '';
		$order_data['payment_zone_id']         = '';
		$order_data['payment_address_format']  = '';
		$order_data['payment_custom_field']    = '';
		
		$order_data['payment_method']          = '';
		$order_data['payment_code']            = '';
		
		$order_data['shipping_firstname']      = '';
		$order_data['shipping_lastname']       = '';
		$order_data['shipping_company']        = '';
		$order_data['shipping_address_1']      = '';
		$order_data['shipping_address_2']      = '';
		$order_data['shipping_city']           = '';
		$order_data['shipping_postcode']       = '';
		$order_data['shipping_country']        = '';
		$order_data['shipping_country_id']     = '';
		$order_data['shipping_zone']           = '';
		$order_data['shipping_zone_id']        = '';
		$order_data['shipping_address_format'] = '';
		$order_data['shipping_custom_field']   = '';
		
		$order_data['shipping_method']         = '';
		$order_data['shipping_code']           = '';
		
		$order_data['comment']                 = '';
		$order_data['total']                   = '';
		$order_data['order_status_id']         = 0;
		$order_data['affiliate_id']            = '';
		$order_data['commission']              = '';
		$order_data['marketing_id']            = '';
		$order_data['tracking']                = '';
		$order_data['language_id']             = '';
		$order_data['currency_id']             = '';
		$order_data['currency_code']           = '';
		$order_data['currency_value']          = '';
		$order_data['ip']                      = '';
		$order_data['forwarded_ip']            = '';
		$order_data['user_agent']              = '';
		$order_data['accept_language']         = '';
		$order_data['date_added']              = '';
		$order_data['date_modify']             = '';
		$order_data['gateway']                 = '';
		// Default

		$this->load->model('account/address');
		$this->load->model('account/customer');
		$this->load->model('localisation/country');
		$this->load->model('localisation/zone');

		// Customer Info
		$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());
		$order_data['customer_id']       = $this->customer->getId();
		$order_data['customer_group_id'] = $customer_info['customer_group_id'];
		$order_data['firstname']         = $customer_info['firstname'];
		$order_data['lastname']          = $customer_info['lastname'];
		$order_data['email']             = $customer_info['email'];
		$order_data['telephone']         = $customer_info['telephone'];
		$order_data['fax']               = $customer_info['fax'];
		$order_data['custom_field']      = json_decode($customer_info['custom_field'], true);
		// Customer Info

		// Address Payment
		if (isset($this->request->post['payment_address']) && $this->request->post['payment_address'] == 'existing') {
			$address_info = $this->model_account_address->getAddress($this->request->post['payment_address_address_id']);
			$order_data['payment_firstname']      = $address_info['firstname'];
			$order_data['payment_lastname']       = $address_info['lastname'];
			$order_data['payment_company']        = $address_info['company'];
			$order_data['payment_address_1']      = $address_info['address_1'];
			$order_data['payment_address_2']      = $address_info['address_2'];
			$order_data['payment_city']           = $address_info['city'];
			$order_data['payment_postcode']       = $address_info['postcode'];
			$order_data['payment_country']        = $address_info['country'];
			$order_data['payment_country_id']     = $address_info['country_id'];
			$order_data['payment_zone']           = $address_info['zone'];
			$order_data['payment_zone_id']        = $address_info['zone_id'];
			$order_data['payment_address_format'] = $address_info['address_format'];
			$order_data['payment_custom_field']   = $address_info['custom_field'];
			$this->model_account_customer->editAddressId($this->customer->getId(), $address_info['address_id']);
		} else if (isset($this->request->post['payment_address']) && $this->request->post['payment_address'] == 'new') {
			$country_info = $this->model_localisation_country->getCountry($this->request->post['payment_address_country_id']);
			$zone_info = $this->model_localisation_zone->getZone($this->request->post['payment_address_zone_id']);
			$order_data['payment_firstname']      = $this->request->post['payment_address_firstname'];
			$order_data['payment_lastname']       = $this->request->post['payment_address_lastname'];
			$order_data['payment_company']        = $this->request->post['payment_address_company'];
			$order_data['payment_address_1']      = $this->request->post['payment_address_address_1'];
			$order_data['payment_address_2']      = $this->request->post['payment_address_address_2'];
			$order_data['payment_city']           = $this->request->post['payment_address_city'];
			$order_data['payment_postcode']       = $this->request->post['payment_address_postcode'];
			$order_data['payment_country']        = $country_info['name'];
			$order_data['payment_country_id']     = $this->request->post['payment_address_country_id'];
			$order_data['payment_zone']           = $zone_info['name'];
			$order_data['payment_zone_id']        = $this->request->post['payment_address_zone_id'];
			$order_data['payment_address_format'] = $this->request->post['payment_address_address_format'];
			$order_data['payment_custom_field']   = $this->request->post['payment_address_custom_field'];

			$addAddress                 = array();
			$addAddress['customer_id']  = $this->customer->getId();
			$addAddress['firstname']    = $order_data['payment_firstname'];
			$addAddress['lastname']     = $order_data['payment_lastname'];
			$addAddress['company']      = $order_data['payment_company'];
			$addAddress['address_1']    = $order_data['payment_address_1'];
			$addAddress['address_2']    = $order_data['payment_address_2'];
			$addAddress['city']         = $order_data['payment_city'];
			$addAddress['postcode']     = $order_data['payment_postcode'];
			$addAddress['country_id']   = $order_data['payment_country_id'];
			$addAddress['zone_id']      = $order_data['payment_zone_id'];
			$addAddress['custom_field'] = $order_data['payment_custom_field'];
			$address_id = $this->model_account_address->addAddress($this->customer->getId(), $addAddress);
			$this->model_account_customer->editAddressId($this->customer->getId(), $address_id);
		}
		// Address Payment

		// Address Shipping
		if (isset($this->request->post['shipping_address']) && $this->request->post['shipping_address'] == 'existing') {
			$address_info = $this->model_account_address->getAddress($this->request->post['shipping_address_address_id']);
			$order_data['shipping_firstname']      = $address_info['firstname'];
			$order_data['shipping_lastname']       = $address_info['lastname'];
			$order_data['shipping_company']        = $address_info['company'];
			$order_data['shipping_address_1']      = $address_info['address_1'];
			$order_data['shipping_address_2']      = $address_info['address_2'];
			$order_data['shipping_city']           = $address_info['city'];
			$order_data['shipping_postcode']       = $address_info['postcode'];
			$order_data['shipping_country']        = $address_info['country'];
			$order_data['shipping_country_id']     = $address_info['country_id'];
			$order_data['shipping_zone']           = $address_info['zone'];
			$order_data['shipping_zone_id']        = $address_info['zone_id'];
			$order_data['shipping_address_format'] = $address_info['address_format'];
			$order_data['shipping_custom_field']   = $address_info['custom_field'];
			$this->model_account_customer->editAddressId($this->customer->getId(), $address_info['address_id']);
		} else if (isset($this->request->post['shipping_address']) && $this->request->post['shipping_address'] == 'new') {
			$country_info = $this->model_localisation_country->getCountry($this->request->post['shipping_address_country_id']);
			$zone_info = $this->model_localisation_zone->getZone($this->request->post['shipping_address_zone_id']);
			$order_data['shipping_firstname']      = $this->request->post['shipping_address_firstname'];
			$order_data['shipping_lastname']       = $this->request->post['shipping_address_lastname'];
			$order_data['shipping_company']        = $this->request->post['shipping_address_company'];
			$order_data['shipping_address_1']      = $this->request->post['shipping_address_address_1'];
			$order_data['shipping_address_2']      = $this->request->post['shipping_address_address_2'];
			$order_data['shipping_city']           = $this->request->post['shipping_address_city'];
			$order_data['shipping_postcode']       = $this->request->post['shipping_address_postcode'];
			$order_data['shipping_country']        = $country_info['name'];
			$order_data['shipping_country_id']     = $this->request->post['shipping_address_country_id'];
			$order_data['shipping_zone']           = $zone_info['name'];
			$order_data['shipping_zone_id']        = $this->request->post['shipping_address_zone_id'];
			$order_data['shipping_address_format'] = $this->request->post['shipping_address_address_format'];
			$order_data['shipping_custom_field']   = $this->request->post['shipping_address_custom_field'];

			$addAddress                 = array();
			$addAddress['customer_id']  = $this->customer->getId();
			$addAddress['firstname']    = $order_data['shipping_firstname'];
			$addAddress['lastname']     = $order_data['shipping_lastname'];
			$addAddress['company']      = $order_data['shipping_company'];
			$addAddress['address_1']    = $order_data['shipping_address_1'];
			$addAddress['address_2']    = $order_data['shipping_address_2'];
			$addAddress['city']          = $order_data['shipping_city'];
			$addAddress['postcode']     = $order_data['shipping_postcode'];
			$addAddress['country_id']   = $order_data['shipping_country_id'];
			$addAddress['zone_id']      = $order_data['shipping_zone_id'];
			$addAddress['custom_field'] = $order_data['shipping_custom_field'];
			$address_id = $this->model_account_address->addAddress($this->customer->getId(), $addAddress);
			$this->model_account_customer->editAddressId($this->customer->getId(), $address_id);
		}
		// Address Shipping

		// Payment Method
		if (isset($this->request->post['payment_method']) && !empty($this->request->post['payment_method'])) {
			$order_data['payment_method'] = strip_tags($this->session->data['payment_methods'][$this->request->post['payment_method']]['title']);
			$order_data['payment_code'] = $this->request->post['payment_method'];
		}
		// Payment Method

		// Shipping Method
		if (isset($this->request->post['shipping_method']) && !empty($this->request->post['shipping_method'])) {
			$shipping = explode('.', $this->request->post['shipping_method']);
			$order_data['shipping_method'] = strip_tags($this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]]['title']);
			$order_data['shipping_code'] = $this->request->post['shipping_method'];

			$this->session->data['payment_method'] = $this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]];
		}
		// Shipping Method

		// Products
		$order_data['products'] = array();
		foreach ($this->cart->getProducts() as $product) {
			$option_data = array();

			foreach ($product['option'] as $option) {
				$option_data[] = array(
					'product_option_id'       => $option['product_option_id'],
					'product_option_value_id' => $option['product_option_value_id'],
					'option_id'               => $option['option_id'],
					'option_value_id'         => $option['option_value_id'],
					'name'                    => $option['name'],
					'value'                   => $option['value'],
					'type'                    => $option['type']
				);
			}

			$order_data['products'][] = array(
				'product_id' => $product['product_id'],
				'name'       => $product['name'],
				'model'      => $product['model'],
				'option'     => $option_data,
				'download'   => $product['download'],
				'quantity'   => $product['quantity'],
				'subtract'   => $product['subtract'],
				'price'      => $product['price'],
				'total'      => $product['total'],
				'tax'        => $this->tax->getTax($product['price'], $product['tax_class_id']),
				'reward'     => $product['reward']
			);
		}
		// Products

		// Gift Voucher
		$order_data['vouchers'] = array();

		if (!empty($this->session->data['vouchers'])) {
			foreach ($this->session->data['vouchers'] as $voucher) {
				$order_data['vouchers'][] = array(
					'description'      => $voucher['description'],
					'code'             => token(10),
					'to_name'          => $voucher['to_name'],
					'to_email'         => $voucher['to_email'],
					'from_name'        => $voucher['from_name'],
					'from_email'       => $voucher['from_email'],
					'voucher_theme_id' => $voucher['voucher_theme_id'],
					'message'          => $voucher['message'],
					'amount'           => $voucher['amount']
				);
			}
		}
		// Gift Voucher

		$order_data['comment'] = $this->request->post['comment'];
		$order_data['total'] = $total_data['total'];

		// Other Data
		$order_data['invoice_prefix'] = $this->config->get('config_invoice_prefix');
		$order_data['store_id'] = $this->config->get('config_store_id');
		$order_data['store_name'] = $this->config->get('config_name');

		if ($order_data['store_id']) {
			$order_data['store_url'] = $this->config->get('config_url');
		} else {
			if ($this->request->server['HTTPS']) {
				$order_data['store_url'] = HTTPS_SERVER;
			} else {
				$order_data['store_url'] = HTTP_SERVER;
			}
		}

		if (isset($this->request->cookie['tracking'])) {
			$order_data['tracking'] = $this->request->cookie['tracking'];

			$subtotal = $this->cart->getSubTotal();

			// Affiliate
			$affiliate_info = $this->model_account_customer->getAffiliateByTracking($this->request->cookie['tracking']);

			if ($affiliate_info) {
				$order_data['affiliate_id'] = $affiliate_info['customer_id'];
				$order_data['commission'] = ($subtotal / 100) * $affiliate_info['commission'];
			} else {
				$order_data['affiliate_id'] = 0;
				$order_data['commission'] = 0;
			}

			// Marketing
			$this->load->model('checkout/marketing');

			$marketing_info = $this->model_checkout_marketing->getMarketingByCode($this->request->cookie['tracking']);

			if ($marketing_info) {
				$order_data['marketing_id'] = $marketing_info['marketing_id'];
			} else {
				$order_data['marketing_id'] = 0;
			}
		} else {
			$order_data['affiliate_id'] = 0;
			$order_data['commission'] = 0;
			$order_data['marketing_id'] = 0;
			$order_data['tracking'] = '';
		}
		$order_data['language_id'] = $this->config->get('config_language_id');
		$order_data['currency_id'] = $this->currency->getId($this->session->data['currency']);
		$order_data['currency_code'] = $this->session->data['currency'];
		$order_data['currency_value'] = $this->currency->getValue($this->session->data['currency']);
		$order_data['ip'] = $this->request->server['REMOTE_ADDR'];

		if (!empty($this->request->server['HTTP_X_FORWARDED_FOR'])) {
			$order_data['forwarded_ip'] = $this->request->server['HTTP_X_FORWARDED_FOR'];
		} elseif (!empty($this->request->server['HTTP_CLIENT_IP'])) {
			$order_data['forwarded_ip'] = $this->request->server['HTTP_CLIENT_IP'];
		} else {
			$order_data['forwarded_ip'] = '';
		}

		if (isset($this->request->server['HTTP_USER_AGENT'])) {
			$order_data['user_agent'] = $this->request->server['HTTP_USER_AGENT'];
		} else {
			$order_data['user_agent'] = '';
		}

		if (isset($this->request->server['HTTP_ACCEPT_LANGUAGE'])) {
			$order_data['accept_language'] = $this->request->server['HTTP_ACCEPT_LANGUAGE'];
		} else {
			$order_data['accept_language'] = '';
		}
		// Other Data


		$this->load->model('checkout/order');
		$order_id = $this->model_checkout_order->addOrder($order_data);
		$this->session->data['order_id'] = $order_id;
		$this->model_checkout_order->addOrderHistory($order_id, 1, '', true);

		// $this->response->redirect($this->url->link('checkout/success'));
		$json['order_id'] = $order_id;

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

}