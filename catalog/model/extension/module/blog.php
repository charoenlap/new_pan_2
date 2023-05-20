<?php

class ModelExtensionModuleBlog extends Model
{
    
	public function getBlog($blog_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "blog b LEFT JOIN " . DB_PREFIX . "blog_description bd ON (b.blog_id = bd.blog_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b.blog_id = '" . (int)$blog_id . "'");

		return $query->row;
	}

	public function getBlogs($data = array()) {
		if ($data) {
			$sql = "SELECT * FROM " . DB_PREFIX . "blog b LEFT JOIN " . DB_PREFIX . "blog_description bd ON (b.blog_id = bd.blog_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

			if (!empty($data['filter_title'])) {
				$sql .= " AND bd.title LIKE '" . $this->db->escape($data['filter_title']) . "%'";
			}

			if (isset($data['filter_status'])) {
				$sql .= " AND b.status = '" . (int)$data['filter_status'] . "'";
			}

			$sort_data = array(
				'bd.title',
				'b.sort_order',
				'b.blog_id'
			);

			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY b.blog_id";
			}

			if (isset($data['order']) && ($data['order'] == 'ASC')) {
				$sql .= " ASC";
			} else {
				$sql .= " DESC";
			}

			if (isset($data['start']) || isset($data['limit'])) {
				if ($data['start'] < 0) {
					$data['start'] = 0;
				}

				if ($data['limit'] < 1) {
					$data['limit'] = 20;
				}

				$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
			}
			$query = $this->db->query($sql);

			return $query->rows;
		} else {
			$blog_data = $this->cache->get('blog.' . (int)$this->config->get('config_language_id'));

			if (!$blog_data) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "blog b LEFT JOIN " . DB_PREFIX . "blog_description bd ON (b.blog_id = bd.blog_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY bd.title");

				$blog_data = $query->rows;

				$this->cache->set('blog.' . (int)$this->config->get('config_language_id'), $blog_data);
			}

			return $blog_data;
		}
	}

	public function getBlogDescriptions($blog_id) {
		$blog_description_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "blog_description WHERE blog_id = '" . (int)$blog_id . "'");

		foreach ($query->rows as $result) {
			$blog_description_data[$result['language_id']] = array(
				'title'            => $result['title'],
				'description'      => $result['description'],
				'meta_title'       => $result['meta_title'],
				'meta_description' => $result['meta_description'],
				'meta_keyword'     => $result['meta_keyword']
			);
		}

		return $blog_description_data;
	}
}
?>