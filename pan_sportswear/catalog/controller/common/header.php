<?php

class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

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

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['link_css'] = HTTPS_SERVER;
		$data['direction'] = $this->language->get('direction');

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
			$data['logged'] = true;
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
			$data['logged'] = false;
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


		if (!empty($this->config->get('config_social_facebook_pan-sportswear'))) {
			$data['config_social_facebook'] = $this->config->get('config_social_facebook_pan-sportswear');
		} else {
			$data['config_social_facebook'] = '';
		}
		if (!empty($this->config->get('config_social_instagram_pan-sportswear'))) {
			$data['config_social_instagram'] = $this->config->get('config_social_instagram_pan-sportswear');
		} else {
			$data['config_social_instagram'] = '';
		}
		if (!empty($this->config->get('config_social_youtube_pan-sportswear'))) {
			$data['config_social_youtube'] = $this->config->get('config_social_youtube_pan-sportswear');
		} else {
			$data['config_social_youtube'] = '';
		}
		if (!empty($this->config->get('config_social_google_pan-sportswear'))) {
			$data['config_social_google'] = $this->config->get('config_social_google_pan-sportswear');
		} else {
			$data['config_social_google'] = '';
		}
		if (!empty($this->config->get('config_social_twitter_pan-sportswear'))) {
			$data['config_social_twitter'] = $this->config->get('config_social_twitter_pan-sportswear');
		} else {
			$data['config_social_twitter'] = '';
		}
		if (!empty($this->config->get('config_social_line_pan-sportswear'))) {
			$data['config_social_line'] = $this->config->get('config_social_line_pan-sportswear');
		} else {
			$data['config_social_line'] = '';
		}

		$data['email'] = $this->config->get('config_email'); 
		$data['phone'] = $this->config->get('config_telephone');

		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

		return $this->load->view('common/header', $data);
	}
}
