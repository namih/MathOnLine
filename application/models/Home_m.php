<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Home_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
		}
		
		/**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Tipo Descripcion
		 * @param NA
		 * @version 1.0
		 */
		public function iniciar_sesion($credencial= NULL)
		{
			if ($credencial!=NULL) {
				if ($this->existe_usuario($credencial['username']) == TRUE) {
					if ($this->cuenta_activa($credencial['username']) == TRUE) {
						$where = "username = '".$credencial['username']."' AND password = '".$credencial['password']."'";
						$login = $this->db->SELECT('*')->FROM('user')->WHERE($where)->GET();
						if ($login->num_rows() === 1) {
							return 'ACCESO CONCEDIDO';
						} else {
							return 'ACCESO DENEGADO: PASSWORD INCORRECTO';
						}
					} else {
						return "La cuenta del usuario no esta activada";
					}
					
				} else {
					return "El nombre de usuario no existe";
				}
			}
		}
		
		/**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Tipo Descripcion
		 * @param NA
		 * @version 1.0
		 */
		public function existe_usuario($username)
		{
			$existe = $this->db->SELECT('*')->FROM('user')->WHERE('username',$username)->GET();
			if ($existe->num_rows() === 1) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Tipo Descripcion
		 * @param NA
		 * @version 1.0
		 */
		public function cuenta_activa($usarname)
		{
			$usuario = $this->db->SELECT('status')->FROM('user')->WHERE('username', $usarname)->GET();
			$estatus = $usuario->row_array();
			
			if ($estatus['status'] == 1) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Tipo Descripcion
		 * @param NA
		 * @version 1.0
		 */
		public function cuenta_activa_email($email)
		{
			$usuario = $this->db->SELECT('status')->FROM('user')->WHERE('email', $email)->GET();
			$estatus = $usuario->row_array();
			
			if ($estatus['status'] == 1) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Tipo Descripcion
		 * @param NA
		 * @version 1.0
		 */
		public function recuperar_pass($email= NULL)
		{
			if ($email != NULL) {
				$password = $this->db->SELECT('password')->FROM('user')->WHERE('email', $email)->GET();
				if ($password->num_rows() === 1 AND $this->cuenta_activa_email($email) == TRUE) {
					$pass = $password->row_array();
					return $pass['password'];
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
			
		}
}

/* End of file Modelo_inicio_m.php */
/* Location: ./application/models/Modelo_inicio_m.php */