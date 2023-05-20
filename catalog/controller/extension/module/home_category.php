<?php
class ControllerExtensionModuleHomeCategory extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->load->model('catalog/category');
		$this->load->model('tool/image');

		// $this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
		// $this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');
		// $this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js');

        $data['category1'] = array('link'=>'', 'name'=>'');
        $data['category2'] = array('link'=>'', 'name'=>'');
        $data['category3'] = array('link'=>'', 'name'=>'');
        $data['category4'] = array('link'=>'', 'name'=>'');
        $data['category5'] = array('link'=>'', 'name'=>'');
        $data['category6'] = array('link'=>'', 'name'=>'');
        $data['category7'] = array('link'=>'', 'name'=>'');

        $category1 = $this->model_catalog_category->getCategory($setting['category1']);
        if (!empty($category1['name'])) {
            $data['category1']['link'] = $this->url->link('product/category&path='.$category1['category_id']);
            $data['category1']['name'] = $category1['name'];
        }

        $category2 = $this->model_catalog_category->getCategory($setting['category2']);
        if (!empty($category2['name'])) {
            $data['category2']['link'] = $this->url->link('product/category&path='.$category2['category_id']);
            $data['category2']['name'] = $category2['name'];
        }

        $category3 = $this->model_catalog_category->getCategory($setting['category3']);
        if (!empty($category3['name'])) {
            $data['category3']['link'] = $this->url->link('product/category&path='.$category3['category_id']);
            $data['category3']['name'] = $category3['name'];
        }

        $category4 = $this->model_catalog_category->getCategory($setting['category4']);
        if (!empty($category4['name'])) {
            $data['category4']['link'] = $this->url->link('product/category&path='.$category4['category_id']);
            $data['category4']['name'] = $category4['name'];
        }

        $category5 = $this->model_catalog_category->getCategory($setting['category5']);        
        if (!empty($category5['name'])) {
            $data['category5']['link'] = $this->url->link('product/category&path='.$category5['category_id']);
            $data['category5']['name'] = $category5['name'];
        }
        
        $category6 = $this->model_catalog_category->getCategory($setting['category6']);
        if (!empty($category6['name'])) {
            $data['category6']['link'] = $this->url->link('product/category&path='.$category6['category_id']);
            $data['category6']['name'] = $category6['name'];
        }
        
        $category7 = $this->model_catalog_category->getCategory($setting['category7']);
        if (!empty($category7['name'])) {
            $data['category7']['link'] = $this->url->link('product/category&path='.$category7['category_id']);
            $data['category7']['name'] = $category7['name'];
        }

        if (!empty($setting['image'])) {
            $data['image'] = $this->model_tool_image->resize($setting['image'], 370, 404);
        } else {
            $data['image'] = '';
        }
        if (!empty($setting['image2'])) {
            $data['image2'] = $this->model_tool_image->resize($setting['image2'], 370, 404);
        } else {
            $data['image2'] = '';
        }
        if (!empty($setting['image3'])) {
            $data['image3'] = $this->model_tool_image->resize($setting['image3'], 370, 404);
        } else {
            $data['image3'] = '';
        }

		$data['module'] = $module++;

		return $this->load->view('extension/module/home_category', $data);
	}
}