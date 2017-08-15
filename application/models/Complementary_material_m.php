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
		 public function lista_links($id_link = NULL)
		 {
		 	if (!is_null($link)) {
				$query = $this->db->SELECT('*')->FROM('links_interest')->WHERE('id_links_interest',$id_link)->WHERE('status', 1)->GET();
				if ($query->num_rows() === 1) {
					return $query->row_array();
				} else {
					return NULL;
				}
			} else {
				$query = $this->db->SELECT('*')->FROM('links_interest')->WHERE('status', 1)->GET();
				if ($query->num_rows() > 0) {
					return $query->result_array();
				} else {
					return NULL;
				}
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
		 public function lista_bibliografia($id_bibliography)
		 {
		 	if (!is_null($id_bibliography)) {
				$query = $this->db->SELECT('*')->FROM('bibliography')->WHERE('id_bibliography', $id_bibliography)->WHERE('status', 1)->GET();
				if ($query->num_rows() === 1) {
					return $query->row_array();
				} else {
					return NULL;
				}
			} else {
				$query = $this->db->SELECT('*')->FROM('bibliography')->WHERE('status', 1)->GET();
				if ($query->num_rows() > 0) {
					return $query->result_array();
				} else {
					return NULL;
				}
			}
		 }
}

/* End of file Home_m.php */
/* Location: ./application/models/Complementary_material_m.php */