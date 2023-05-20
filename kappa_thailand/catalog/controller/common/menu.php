<?php
class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['payment'] = $this->url->link('information/payment');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(97);

		foreach ($categories as $category) {
			$products = array();

			if ($category['top']) {

				// Level 2
				// $children_data = array();

				// $children = $this->model_catalog_category->getCategories($category['category_id']);
				
				// foreach ($children as $child) {
					$products = array();

					// Get Products
					$filter_data = array(
						'filter_category_id' => $category['category_id'],
						'filter_sub_category'=> false,
						'sort'               => 'p.sort_order',
						'order'              => 'ASC',
						'start'              => 0,
						'limit'              => 10
					);
					$results_products = $this->model_catalog_product->getProducts($filter_data);
					foreach($results_products as $key => $val){
						$products[$key] = $val;
						$products[$key]['href'] = $this->url->link('product/product', '&product_id=' . $val['product_id']);
					}


				// 	$filter_data = array(
				// 		'filter_category_id'  => $child['category_id'],
				// 		'filter_sub_category' => true
				// 	);

				// 	$children_data[] = array(
				// 		'name'    => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
				// 		'products' => $products,
				// 		'href'    => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
				// 	);

				// }

				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id']),
					'products' => $products
				);
			}
		}

		return $this->load->view('common/menu', $data);
	}
}
