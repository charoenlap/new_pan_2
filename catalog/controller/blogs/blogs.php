<?php
class ControllerBlogsBlogs extends Controller {
	public function index() {
		$this->load->language('extension/module/blog');
		$this->load->model('extension/module/blog');
        $this->load->model('tool/image');

        $blogs = $this->model_extension_module_blog->getBlogs();
        $data['blogs'] = array();
        foreach ($blogs as $blog) {
            $data['blogs'][] = array(
                'title' => $blog['title'],
                'image' => $this->model_tool_image->resize($blog['image'], 1097, 600),
                'link' => $this->url->link('blogs/blog', 'blog_id='.$blog['blog_id']),
                'description' => strip_tags(html_entity_decode($blog['description']))
            );
        }
        
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_blog'),
			'href' => $this->url->link('blogs/blogs')
		);


        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('blogs/blogs', $data));
	}
}