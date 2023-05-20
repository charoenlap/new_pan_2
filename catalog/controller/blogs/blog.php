<?php
class ControllerBlogsBlog extends Controller {
	public function index() {
		$this->load->language('extension/module/blog');
		$this->load->model('extension/module/blog');
        $this->load->model('tool/image');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_blog'),
			'href' => $this->url->link('blogs/blogs')
		);

        if ($this->request->get['blog_id']) {
            
            $blog_id = $this->request->get['blog_id'];
            $blog_info = $this->model_extension_module_blog->getBlog($blog_id);

            $data['breadcrumbs'][] = array(
                'text' => $blog_info['title'],
                'href' => $this->url->link('blogs/blog', '&blog_id='.$blog_id)
            );


            $data['blog_title'] = $blog_info['title'];
            $data['blog_description'] = html_entity_decode($blog_info['description']);
            $data['blog_image'] = $this->model_tool_image->resize($blog_info['image'], 1097, 600);
        }
        


        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('blogs/blog', $data));
	}
}