<?php
class ControllerExtensionModuleBlog extends Controller {
	public function index($setting) {
		static $module = 0;
		$this->load->model('extension/module/blog');
        $this->load->model('tool/image');

        $blogs = $this->model_extension_module_blog->getBlogs(array('filter_status'=>1));
        $data['blogs'] = array();
        foreach ($blogs as $blog) {
            $data['blogs'][] = array(
                'title' => $blog['title'],
                'image' => $this->model_tool_image->resize($blog['image'], 360, 160),
                'link' => $this->url->link('blogs/blog', 'blog_id='.$blog['blog_id']),
                'description' => utf8_substr(trim(strip_tags(html_entity_decode($blog['description'], ENT_QUOTES, 'UTF-8'))), 0, 100)
            );
        }
        
        $data['module'] = $module++;

		return $this->load->view('extension/module/blog', $data);
	}
}