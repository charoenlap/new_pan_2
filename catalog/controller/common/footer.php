<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');

		$this->load->model('catalog/information');
		
		$data['link_css'] = HTTPS_SERVER . 'catalog/view/theme/default/newtheme/';

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

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

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


		if (!empty($this->config->get('config_social_facebook'))) {
			$data['config_social_facebook'] = $this->config->get('config_social_facebook');
		} else {
			$data['config_social_facebook'] = '';
		}
		if (!empty($this->config->get('config_social_instagram'))) {
			$data['config_social_instagram'] = $this->config->get('config_social_instagram');
		} else {
			$data['config_social_instagram'] = '';
		}
		if (!empty($this->config->get('config_social_youtube'))) {
			$data['config_social_youtube'] = $this->config->get('config_social_youtube');
		} else {
			$data['config_social_youtube'] = '';
		}
		if (!empty($this->config->get('config_social_google'))) {
			$data['config_social_google'] = $this->config->get('config_social_google');
		} else {
			$data['config_social_google'] = '';
		}
		if (!empty($this->config->get('config_social_twitter'))) {
			$data['config_social_twitter'] = $this->config->get('config_social_twitter');
		} else {
			$data['config_social_twitter'] = '';
		}
		if (!empty($this->config->get('config_social_line'))) {
			$data['config_social_line'] = $this->config->get('config_social_line');
		} else {
			$data['config_social_line'] = '';
		}


		if (!empty($this->config->get('config_social_pan_facebook'))) {
			$data['config_social_pan_facebook'] = $this->config->get('config_social_pan_facebook');
		} else {
			$data['config_social_pan_facebook'] = '';
		}
		if (!empty($this->config->get('config_social_pan_instagram'))) {
			$data['config_social_pan_instagram'] = $this->config->get('config_social_pan_instagram');
		} else {
			$data['config_social_pan_instagram'] = '';
		}
		if (!empty($this->config->get('config_social_pan_youtube'))) {
			$data['config_social_pan_youtube'] = $this->config->get('config_social_pan_youtube');
		} else {
			$data['config_social_pan_youtube'] = '';
		}
		if (!empty($this->config->get('config_social_pan_google'))) {
			$data['config_social_pan_google'] = $this->config->get('config_social_pan_google');
		} else {
			$data['config_social_pan_google'] = '';
		}
		if (!empty($this->config->get('config_social_pan_twitter'))) {
			$data['config_social_pan_twitter'] = $this->config->get('config_social_pan_twitter');
		} else {
			$data['config_social_pan_twitter'] = '';
		}
		if (!empty($this->config->get('config_social_pan_line'))) {
			$data['config_social_pan_line'] = $this->config->get('config_social_pan_line');
		} else {
			$data['config_social_pan_line'] = '';
		}


		$data['address'] = nl2br($this->config->get('config_address'));
		$data['owner'] = $this->config->get('config_name');

		$data['email'] = $this->config->get('config_email');
		$data['phone'] = $this->config->get('config_telephone');

		$data['scripts'] = $this->document->getScripts('footer');

		$data['about'] = $this->url->link('information/information','information_id=4', false);
		$data['delivery'] = $this->url->link('information/information','information_id=6', false);
		$data['policy'] = $this->url->link('information/information','information_id=3', false);
		$data['term'] = $this->url->link('information/information','information_id=5', false);
		$data['contact'] = $this->url->link('information/contact');

		$data['payment'] = $this->url->link('information/payment');
		
		return $this->load->view('common/footer', $data);
	}
}
