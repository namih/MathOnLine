<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Home_student_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
			$this->load->library('encrypt');
		}
		
		public function datos_usuario($id_usuario = null)
		{
			if ($id_usuario != null){
				$datos = $this->db	->SELECT('*')->FROM('user')->WHERE('id_user',$id_usuario)->GET();
				if ($datos->num_rows() == 1) {
					$perfil = $datos->result_array();
				} else {
					return FALSE;
				}
				$avatar = $this->db	->SELECT('*')->FROM('avatar')->WHERE('gender',$perfil['sex'])->GET();
				if ($avatar->num_rows() == 1){
					$perfil['$avatares_disponibles']=$avatar->result_array();
					return $perfil;
				}
				else{
					return false;
				}
				
			}
			else{return null;}
			
			
		}
}