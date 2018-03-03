<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class User_manager_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
		}
		
		
		/**
		 * Description
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return AAA
		 * @param BBB
		 * @version 1.0
		 */
		public function get_users($type_user)
		{
			if ($type_user != NULL) {
				$usuarios = $this->db->SELECT('*')->FROM('user')->WHERE('type_user', $type_user)->GET();
				if ($usuarios->num_rows() > 0) {
					return $usuarios->result_array();
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
		
		
				
}

/* End of file Evaluation_m.php */
/* Location: ./application/models/Evaluation_m.php */