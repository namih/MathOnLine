<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Tutorial_c extends CI_Controller {
			
		public function __construct() {
			parent::__construct();
			$this->load->model("Tutorial_m");
		}
		
		/**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return 
		 * @param NA
		 * @version 1.0
		 */
		public function start_tutorial()
		{
			$tutorial = $this->input->post('start_tutorial');
			if ($tutorial != NULL) {
				
				$create = $this->Tutorial_m->create_tutorial($tutorial);
				if ($create != null) {
					return $create;
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
		public function tutorial_progress()
		{
			$tutorial = $this->input->post('tutorial_progress');
			if ($tutorial != NULL) {
				
				$progress = $this->Tutorial_m->create_tutorial($tutorial);
				if ($progress != null) {
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				
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
		public function end_tutorial()
		{
			$tutorial = $this->input->post('end_tutorial');
			if ($tutorial != NULL) {
				
				$finish = $this->Tutorial_m->create_tutorial($tutorial);
				if ($create != null) {
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				
			}
		}
}
/* End of file Tutorial_c.php */
/* Location: ./application/controllers/Tutorial_c.php */