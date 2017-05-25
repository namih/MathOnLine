<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Home_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
		}
		
		/**
		 * Verifica que el nombre de usuario y contraseña sean correctas y que la cuenta este activa.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return INT 1 Acceso concedido, 2 Nombre de usuario incorrecto, 3 Contraseña incorrecto, 4 Cuenta de usuario desactivada
		 * @param Array $credencial Arreglo con el nombre de usuario y contraseña para el inicio de sesión.
		 * @version 1.0
		 */
		public function iniciar_sesion($credencial = NULL)
		{
			if ($credencial!=NULL) {
				if ($this->existe_usuario($credencial['username']) == TRUE) {
					if ($this->cuenta_activa($credencial['username']) == TRUE) {
						$where = "username = '".$credencial['username']."' AND password = '".$credencial['password']."'";
						$login = $this->db->SELECT('*')->FROM('user')->WHERE($where)->GET();
						if ($login->num_rows() === 1) {
							return 1;
						} else {
							return 3;
						}
					} else {
						return 4;
					}
				} else {
					return 2;
				}
			}
		}
		
		/**
		 * Verifica que el nombre de usuario exista en la base de datos.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return BOOL TRUE si existe en el nombre de usuario FALSE si no existe.
		 * @param String $user_name Nombre de usuario 
		 * @version 1.0
		 */
		public function existe_usuario($user_name)
		{
			$existe = $this->db->SELECT('*')->FROM('user')->WHERE('user_name',$user_name)->GET();
			if ($existe->num_rows() === 1) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Verifica que el estatus de la cuenta este activa por nombre de usuario.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return BOOL TRUE si la cuenta esta activada y FALSE si la cuenta esta inactiva
		 * @param String $user_name Nombre de usuario
		 * @version 1.0
		 */
		public function cuenta_activa($user_name)
		{
			$usuario = $this->db->SELECT('status')->FROM('user')->WHERE('user_name', $user_name)->GET();
			$estatus = $usuario->row_array();
			
			if ($estatus['status'] == 1) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Verifica que el estatus de la cuenta este activa por correo electronico.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return BOOL TRUE si la cuenta esta activada y FALSE si la cuenta esta inactiva
		 * @param String $email Cuenta de correo electrónico del usuario.
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
		 * Obtiene la contraseña registrada por el usuario unicamente si la cuenta esta activa.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return STRING Contraseña dada por el usuario en su registro.
		 * @param String $email Cuenta de correo electrónico del usuario.
		 * @version 1.0
		 */
		public function recuperar_pass($email = NULL)
		{
			if ($email != NULL) {
				$password = $this->db->SELECT('user_name, password')->FROM('user')->WHERE('email', $email)->GET();
				if ($password->num_rows() === 1 AND $this->cuenta_activa_email($email) == TRUE) {
					$data = $password->row_array();
					$datos = array('user_name' => $data['user_name'], 'password'=>$data['password']);
					return $datos;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}	
		}
		
		/**
		 * Obtiene los temas del mes del actual, anterior y siguiente.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array Información de los temas de mes actual, anterior y siguiente.
		 * @param String $email Cuenta de correo electrónico del usuario.
		 * @version 1.0
		 */
		public function tema_mes($mes)
		{
			if ($mes != NULL) {
				$temas = $this->db	->SELECT('*')
									->FROM('monthly_theme')
									->WHERE('mounth', $mes['anterior'])
									->OR_WHERE('mounth', $mes['actual'])
									->OR_WHERE('mounth', $mes['siguiente'])
									->GET();
				if ($temas->num_rows() > 0) {
					return $temas->result_array();
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}				
		}
		
}

/* End of file Home_m.php */
/* Location: ./application/models/Modelo_inicio_m.php */