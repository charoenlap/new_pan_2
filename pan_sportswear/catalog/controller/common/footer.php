<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['payment'] = $this->url->link('information/payment');

		$data['store'] = $this->config->get('config_name');
		$data['address'] = str_replace('\n', '<br>', $this->config->get('config_address'));

		$data['facebook'] = $this->config->get('config_social_facebook_pan-sportswear');
		$data['google'] = $this->config->get('config_social_google_pan-sportswear');

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));


		// Main Banner
		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$results = $this->model_design_banner->getBanner(15);

		$data['banner_footer'] = array();

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banner_footer'][] = array(
					'title'        => $result['title'],
					'introduction' => $result['introduction'],
					'topic'        => $result['topic'],
					'link'         => $result['link'],
					// 'image'        => $this->model_tool_image->resize($result['image'], 1920, 900),
					'image'        => '../image/'.$result['image']
				);
			}
		}

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

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

		$data['scripts'] = $this->document->getScripts('footer');
		
		return $this->load->view('common/footer', $data);
	}
}
