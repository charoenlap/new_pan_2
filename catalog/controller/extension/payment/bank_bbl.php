<?php
class ControllerExtensionPaymentBankBbl extends Controller {
	public function index() {
		$this->load->language('extension/payment/bank_bbl');

		$data['bank'] = nl2br($this->config->get('payment_bank_bbl_bank' . $this->config->get('config_language_id')));

		return $this->load->view('extension/payment/bank_bbl', $data);
	}

	public function confirm() {
		$json = array();
		
		if ($this->session->data['payment_method']['code'] == 'bank_bbl') {
			$this->load->model('checkout/order');
			// $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
			// $system_shipping_method = $this->getAllOpenShippingMethod();
			// if (!isset($system_shipping_method[$order_info['shipping_code']])) {
			// 	$this->session->data['error'] = 'ไม่พบค่าขนส่ง - Not found shipping method';
			// 	$json['redirect'] = $this->url->link('checkout/cart');
			// } else {
				$this->load->language('extension/payment/bank_bbl');

				$this->load->model('checkout/order');

				$comment  = $this->language->get('text_instruction') . "\n\n";
				$comment .= $this->config->get('payment_bank_bbl_bank' . $this->config->get('config_language_id')) . "\n\n";
				$comment .= $this->language->get('text_payment');

				if (isset($this->session->data['order_id'])) {
					$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_bank_bbl_order_status_id'), $comment, true);
				}
			
				$json['redirect'] = $this->url->link('checkout/success');
			// }
		} else {
			$json['redirect'] = $this->url->link('checkout/quick_checkout2','&error=notfound'.$this->session->data['payment_method']['code']);
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}

	public function getAllOpenShippingMethod() {
		// Shipping Methods
		$method_data = array();

		$this->load->model('setting/extension');

		$results = $this->model_setting_extension->getExtensions('shipping');

		foreach ($results as $result) {
			if ($this->config->get('shipping_' . $result['code'] . '_status')) {
				$this->load->model('extension/shipping/' . $result['code']);

				$quote = $this->{'model_extension_shipping_' . $result['code']}->getQuote(array('country_id'=>209,'zone_id'=>3192));

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

		return $method_data;
	}


}