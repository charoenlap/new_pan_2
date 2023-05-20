<?php
class ControllerInformationBlog extends Controller {
	public function index() {
		$this->load->language('information/blog');

		$this->load->model('catalog/blog');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$filter_data = array(
			'sort'  => 'b.blog_id',
			'order' => 'DESC'
		);

		$results = $this->model_catalog_blog->getBlogs($filter_data);

		$data['blogs'] = array();

		$this->load->model('tool/image');

		foreach ($results as $result) {

			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], 400, 300);
			} else {
				$image = $this->model_tool_image->resize('no_image.png', 400, 300);
			}

			$data['blogs'][] = array(
				'blog_id' => $result['blog_id'],
				'title'   => $result['title'],
				'thumb'   => $image,
				'href'    => $this->url->link('information/blog/blog', 'blog_id='.$result['blog_id'])
			);
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/blog', $data));
	}

	public function blog() {

		$this->load->language('information/blog');

		$this->load->model('catalog/blog');

		$this->load->model('tool/image');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);


		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('information/blog')
		);

		if (!empty($this->request->get['blog_id'])) {

			$blog = $this->model_catalog_blog->getBlog($this->request->get['blog_id']);

			$data['heading_title'] = $blog['title'];

			if ($blog['image']!='') {
				$image = $this->model_tool_image->resize($blog['image'], 600, 400);;
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', 600, 400);
			}

			$data['image'] = $image;

			$data['description'] = html_entity_decode($blog['description'], ENT_QUOTES, 'UTF-8');

			$this->document->setTitle($this->language->get('heading_title'));

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('information/blog_detail', $data));
		} else {
			$this->response->redirect($this->url->link('information/blog'));
		}
	}

}