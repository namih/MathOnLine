<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Evaluation_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
		}
		
		
		/**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return INT 1 Acceso concedido, 2 Nombre de usuario incorrecto, 3 Contraseña incorrecto, 4 Cuenta de usuario desactivada
		 * @param Array $credencial Arreglo con el nombre de usuario y contraseña para el inicio de sesión.
		 * @version 1.0
		 */
		public function lista_subtemas($id_tema)
		{
			if ($id_tema!=NULL) {
				$subtemas = $this->db->SELECT('id_subtopic')->FROM('subtopic')->WHERE('id_theme', $id_tema)->GET();
				if ($subtemas->num_rows() > 0) {
					return $subtemas->result_array();
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
		 * @return INT 1 Acceso concedido, 2 Nombre de usuario incorrecto, 3 Contraseña incorrecto, 4 Cuenta de usuario desactivada
		 * @param Array $credencial Arreglo con el nombre de usuario y contraseña para el inicio de sesión.
		 * @version 1.0
		 */
		public function evaluacion($id_tema)
		{
			if ($id_tema!=NULL) {
				$subtemas = $this->lista_subtemas($id_tema);
				$evaluacion = $this->db->SELECT('*')->FROM('evaluation')->WHERE($subtemas)->GET();
				if ($evaluacion->num_rows() > 0) {
					return $evaluacion->result_array();
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