<?php
class ControllerExtensionModuleManufacturer extends Controller {
	public function index() {
		$this->load->language('extension/module/manufacturer');

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		$this->load->model('catalog/manufacturer');

		$data['manufacturers'] = array();

        $manufacturers = $this->model_catalog_manufacturer->getManufacturers();

        foreach ($manufacturers as $manufacturer) {
            $data['manufacturers'][] = array(
                'name' => $manufacturer['name'],
                'href' => $this->url->link('product/manufacturer', 'manufacturer_id='.$manufacturer['manufacturer_id'])
            );
        }

		return $this->load->view('extension/module/manufacturer', $data);
	}
}