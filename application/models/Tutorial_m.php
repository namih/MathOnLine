<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Tutorial_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
		}
		
		/**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return 
		 * @param NA
		 * @version 1.0
		 */
		 public function create_tutorial($tutorial)
		 {
		 	if ($tutorial != NULL) {
		 		$this->db->SET($this->_setTutorial($tutorial))->INSERT('blog_tutorials');
				if ($this->db->affected_rows() === 1) {
					return $this->db->insert_id();
				} else {
					return FALSE;
				}
			 } else {
				 return NULL;
			 }
		 }
		 
		 /**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return 
		 * @param NA
		 * @version 1.0
		 */
		 public function update_progress($tutorial)
		 {
		 	if ($tutorial != NULL) {
				 
			 } else {
				 return NULL;
			 }
			 
		 }
		 
		 /**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return 
		 * @param NA
		 * @version 1.0
		 */
		 public function finish_tutorial($tutorial)
		 {
		 	if ($tutorial != NULL) {
				 
			 } else {
				 return NULL;
			 }
			 
		 }
		 
		 private function _setTutorial($tutorial)
		 {
			$set_tutorial = array();
			
			if (isset($tutorial['id_user'])) {
				$set_tutorial['id_user'] =  $tutorial['id_user'];
			};
			if (isset($tutorial['id_tutorial'])) {
				$set_tutorial['id_tutorial'] =  $tutorial['id_tutorial'];
			};
			if (isset($tutorial['start_date'])) {
				$set_tutorial['start_date'] =  $tutorial['start_date'];
			};
			if (isset($tutorial['progress'])) {
				$set_tutorial['progress'] =  $tutorial['progress'];
			};
			if (isset($tutorial['status'])) {
				$set_tutorial['status'] =  $tutorial['status'];
			};
						
			return $set_tutorial;
		}
		 
}

/* End of file Tutorial_m.php */
/* Location: ./application/models/Tutorial_m.php */