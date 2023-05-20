<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		// Main Banner
		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$results = $this->model_design_banner->getBanner(12);

		$data['banners_home'] = array();

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners_home'][] = array(
					'title'        => $result['title'],
					'introduction' => $result['introduction'],
					'topic'        => $result['topic'],
					'link'         => $result['link'],
					'image'        => $this->model_tool_image->resize($result['image'], 1920, 900),
					// 'image'        => HTTPS_SERVER_MAIN.'image/'.$result['image']
				);
			}
		}



		// Bestseller
		$this->load->model('catalog/product');

		$data['product_bestseller'] = array();

		$product_bestsellers = $this->model_catalog_product->getBestSellerProducts(8);
		if (count($product_bestsellers) < 8) {
			$product_bestsellers = $this->model_catalog_product->getLatestProducts(8);
		}

		$product_last = $this->model_catalog_product->getLatestProducts(8);
		$product_lasts = array();
		foreach ($product_last as $key => $value) {
			$product_lasts[] = $value['product_id'];
		}

		if (count($product_bestsellers) > 0) {
			foreach ($product_bestsellers as $result) {

				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], 400, 400);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', 400, 400);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$price_int = $result['price'];
				} else {
					$price = false;
					$price_int = 0;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$special_int = $result['special'];
				} else {
					$special = false;
					$special_int = 0;
				}

				$percent = 0;
				if ($price_int > 0 && $special_int > 0) {
					$percent = round((($price_int-$special_int) / $price_int) * 100);
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}

				$new = in_array($result['product_id'], $product_lasts) ? true : false;

				$data['product_bestseller'][] = array(
					'manufacturer_id' => $result['manufacturer_id'],
					'product_id'  => $result['product_id'],
					'image'       => $image,
					// 'name'        => $result['name'],
					'name'        => utf8_substr(trim(strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'))), 0, 20) . '..',
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, 25) . '..',
					'price'       => $price,
					'special'     => $special,
					'percent' => $percent,
					'minimum'     => $result['minimum'],
					'tax'         => $tax,
					'new'         => $new,
					'rating'      => ($rating),
					'reviews'     => $result['reviews'],
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}
		}
		
		
		// Brands 
		$results = $this->model_design_banner->getBanner(6);

		$data['manufacturers'] = array();

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['manufacturers'][] = array(
					'title'        => $result['title'],
					'href'         => $result['link'],
					'image'        => $this->model_tool_image->resize($result['image'], 450, 300),
				);
			}
		}

		$this->load->model('catalog/information');
		$information = $this->model_catalog_information->getInformation(9);
		if (isset($information['description'])&&!empty($information['description'])) {
			$data['vdo'] = html_entity_decode($information['description'], ENT_QUOTES, 'UTF-8');	
		} else {
			$data['vdo'] = '';
		}
		





		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
