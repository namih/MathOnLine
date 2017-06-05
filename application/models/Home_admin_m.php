<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Home_admin_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
			$this->load->library('encrypt');
		}
		
		
		/**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return INT 1 Acceso concedido, 2 Nombre de usuario incorrecto, 3 Contraseña incorrecto, 4 Cuenta de usuario desactivada
		 * @param Array $credencial Arreglo con el nombre de usuario y contraseña para el inicio de sesión.
		 * @version 1.0
		 */
		public function lista_tema_mes()
		{
			$temas = $this->db->SELECT('*')->FROM('monthly_theme')->GET();
			if ($temas->num_rows() > 0) {
				return $temas->result_array();
			} else {
				return FALSE;
			}
			
		}
		
}

/* End of file Home_admin_m.php */
/* Location: ./application/models/Home_admin_m.php */