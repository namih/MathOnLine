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
				date_default_timezone_set('America/Mexico_City');
				$format = 'Y-m-d h:i:s';
				
				$tutorial['start_date'] = date($format);
								
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
				$create = $this->Tutorial_m->update_progress($tutorial);
				if ($create != null) {
					return TRUE;
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
		public function end_tutorial()
		{
			$tutorial = $this->input->post('end_tutorial');
			if ($tutorial != NULL) {
				date_default_timezone_set('America/Mexico_City');
				$format = 'Y-m-d h:i:s';
				
				$tutorial['finish_date'] = date($format);
				$tutorial['status'] = 2;
				
				$create = $this->Tutorial_m->finish_tutorial($tutorial);
				if ($create != null) {
					return $create;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
	}
 /* End of file Tutorial_c.php */