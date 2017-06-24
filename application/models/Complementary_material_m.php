<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Complementary_material_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
		}
		
		
		/**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return INT 1 Acceso concedido, 2 Nombre de usuario incorrecto, 3 Contraseña incorrecto, 4 Cuenta de usuario desactivada
		 * @param NA
		 * @version 1.0
		 */
		 public function lista_links()
		 {
			 $links = $this->db->SELECT('*')->FROM('links_interest')->WHERE('status', 1)->GET();
			 
			 if ($links->num_rows() > 0) {
				 return $links->result_array();
			 } else {
				 return FALSE;
			 }
		 }
		 
		 
		 /**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return INT 1 Acceso concedido, 2 Nombre de usuario incorrecto, 3 Contraseña incorrecto, 4 Cuenta de usuario desactivada
		 * @param NA
		 * @version 1.0
		 */
		 public function lista_bibliografia()
		 {
			 $biblio = $this->db->SELECT('*')->FROM('bibliography')->WHERE('status', 1)->GET();
			 
			 if ($biblio->num_rows() > 0) {
				 return $biblio->result_array();
			 } else {
				 return FALSE;
			 }
		 }
		 
		 
		 
		 
		 
}

/* End of file Home_m.php */
/* Location: ./application/models/Complementary_material_m.php */