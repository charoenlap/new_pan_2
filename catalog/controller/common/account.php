<?php
class ControllerCommonAccount extends Controller {
	public function index() {
		$this->load->language('common/account');


		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

        $data['logged'] = $this->customer->isLogged();

		$data['account'] = $this->url->link('account/account', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);


		return $this->load->view('common/account', $data);
	}

}