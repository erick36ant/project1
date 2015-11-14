<?php
	class Products_model extends CI_Model {
		
		public function showAllProducts(){
			
			return $this->db->get("Products");
		}
	}
?>