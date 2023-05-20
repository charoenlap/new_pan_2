<?php
class ControllerExtensionPaymentPaysolutionsGateway extends Controller {
	public function index() {
		$this->load->language('extension/payment/paysolutions_gateway');


		$this->load->model('checkout/order');

		$order_info          = $this->model_checkout_order->getOrder($this->session->data['order_id']);
		$invoice_no          = date('Ymd', time()).sprintf("%04d", $order_info['order_id']);
		// $data['action']   = 'https://ipay.bangkokbank.com/b2c/eng/payment/payForm.jsp';
		// $data['action']      = 'https://ipay.bangkokbank.com/b2c/eng/payment/payForm.jsp';
		// $data['merchant_id'] = '2673';
		// $data['code']        = '764';
		// $data['cancelURL']   = $this->url->link('extension/payment/bbl_gateway/checkResponse', '&type='.urlencode(base64_encode('cancel')), true);
		// $data['returnURL']   = $this->url->link('extension/payment/bbl_gateway/checkResponse', '&type='.urlencode(base64_encode('rejected')), true);
		// $data['successURL']  = $this->url->link('extension/payment/bbl_gateway/checkResponse', '&type='.urlencode(base64_encode('success')), true);
		// $data['amount']      = sprintf('%0.1f', $order_info['total']);
		// $data['remark']      = 'Payment Shopping on PAN';
		// $data['invoice']     = $invoice_no;
		// $data['language']    = ($this->session->data['language']=='th')?'T':'E';
		// $data['deviceMode']  = ($this->isMobileDevice()) ? 'mobile' : 'pc';

		$data['refno'] = '';
		$data['merchantid'] = sprintf('%08d', 08);
		$data['customeremail'] = '';
		$data['cc'] = '00';
		$data['productdetail'] = '';
		$data['total'] = '';
		$data['lang'] = 'TH';
		$data['postbackurl'] = $this->url->link('extension/payment/paysolutions_gateway/confirm', '', true);
		$data['returnurl'] = $this->url->link('checkout/success','', true);
		$data['action'] = 'https://www.thaiepay.com/epaylink/payment.aspx';

		return $this->load->view('extension/payment/bbl_gateway', $data);
	}
}