<?php

class ModelExtensionModuleHomeCategory extends Model
{
    public function getData($module_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "module WHERE module_id = '" . (int)$module_id . "'");
		return $query->row;
    }
}
?>