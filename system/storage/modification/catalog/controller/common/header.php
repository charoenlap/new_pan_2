<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');
		$this->load->model('setting/setting');

		$data['email'] = $this->model_setting_setting->getSettingValue('config_email');
		$data['telephone'] = $this->model_setting_setting->getSettingValue('config_telephone');
		$data['comment'] = $this->model_setting_setting->getSettingValue('config_comment');

		
		$data['config_meta_title'] = $this->model_setting_setting->getSettingValue('config_meta_title');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}
		$server = $this->config->get('config_ssl');

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['is_home'] = false;
		if (isset($this->request->get['route'])&&$this->request->get['route']=='common/home') {
			$data['is_home'] = true;
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');
		$data['link_cssold'] = HTTPS_SERVER . 'catalog/view/';
		$data['link_css'] = HTTPS_SERVER . 'catalog/view/theme/default/newtheme/';
		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		$data['blogs'] = $this->url->link('blogs/blogs');
		$data['payment'] = $this->url->link('information/payment');

		// new menu
		$this->load->model('catalog/category');
		$categories = $this->model_catalog_category->getCategories(0);
		
		$data['categories'] = array();
		foreach ($categories as $key => $category) {
			if ($category['top']==1) {
				$result = array();
				$result = $category;
				$result['url'] = $this->url->link('product/category','path='.$category['category_id'],true);
				$childrens = $this->model_catalog_category->getCategories($category['category_id']);
				foreach ($childrens as $key2 => $child) {
					$child['url'] = $this->url->link('product/category','path='.$category['category_id'].'_'.$child['category_id'], true);
					$result['children'][$key2] = $child;
				}
				$data['categories'][] = $result;
			}
		}
		
		$data['accounts'] = $this->load->controller('common/account');
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

		return $this->load->view('common/header', $data);
	}
}
