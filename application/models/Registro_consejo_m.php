<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Registro_consejo_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
		}
		
		/**
		 * Obtiene el listado de las unidades de la UAM
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array Arreglo con las unidades de la UAM, FALSE si no existe ningun registro
		 * @param NA
		 * @version 1.0
		 */
		public function obtener_unidades_uam()
		{
			$unidades_uam = $this->db->SELECT('*')->FROM('unit_uam')->GET();
			if (!empty($unidades_uam)) {
				return $unidades_uam->result_array();
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Obtiene los identificadores de los avatares Masculinos
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array Arreglo con los id's de los avatares, FALSE si no existe ningun registro
		 * @param NA
		 * @version 1.0
		 */
		public function obtener_id_avatar($genero = NULL)
		{
			if ($genero != NULL) {
				$avatar = $this->db->SELECT('id_avatar')->FROM('avatar')->WHERE('gender', $genero)->GET();
				if (!empty($avatar)) {
					return $avatar->result_array();
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
		/**
		 * Actualiza el status del usuario a 1 para quedar activada la cuenta.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Boolean TRUE si la cuenta fue activada correctamente o FALSE si la cuenta no existe o ya esta activa.
		 * @param Int $id_usuario Identificador del usuario con el que se guardarón sus datos de registro.
		 * @version 1.0
		 */
		public function activar_cuenta($id_usuario = NULL)
		{
			if ($id_usuario != NULL) {
				$existe = $this->existe_usuario($id_usuario);
				$estatus = $this->estatus_cuenta($id_usuario);
				if ($existe == TRUE and $estatus == TRUE) {
					$datos = array('status'=> 1);
					$activacion = $this->db->update('user', $datos, array('id_user' => $id_usuario));
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
		
		/**
		 * Guarda los datos recabados del formulario de registro.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return INT Identificar asignado al nuevo usuario o NULL si ocurrio un problema en el registro a la base de datos.
		 * @param Int $id_usuario Id del usuario con el que se guardaron sus datos de registro
		 * @version 1.0
		 */
		public function registrar_consejo($usuario = NULL)
		{
			if ($usuario != NULL) {
				$this->db->SET($this->_setUsuario($usuario))->INSERT('user');
				if ($this->db->affected_rows() === 1) {
					return $this->db->insert_id();
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
		
		/**
		 * Verifica que exista el registro del usuario en la base de datos
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Boolean TRUE si existe el usuario, FALSE si no existe el usuario.
		 * @param Int $id_usuario Id del usuario con el que se guardaron sus datos de registro
		 * @version 1.0
		 */
		public function existe_usuario($id_usuario)
		{
			$existe = $this->db->SELECT('*')->FROM('user')->WHERE('id_user', $id_usuario)->GET();
			if ($existe->num_rows() === 1) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Verifica el estado (activa o inactiva) de la cuenta del usuario
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Boolean TRUE si la cuenta esta inactiva, FALSE si esta activa.
		 * @param Int $id_usuario Id del usuario con el que se guardaron sus datos de registro
		 * @version 1.0
		 */
		public function estatus_cuenta($id_usuario)
		{
			$usuario = $this->db->SELECT('status')->FROM('user')->WHERE('id_user', $id_usuario)->GET();
			$estatus = $usuario->row_array();
			
			if ($estatus['status'] == 0) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Valida que el nombre de usuario este disponible
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Boolean TRUE si el nombre de usuario existe, FALSE no existe.
		 * @param String $nombre_usuario Nombre de usuario que se desea registrar.
		 * @version 1.0
		 */
		public function validar_usuario($nombre_usuario = NULL)
		{
			if ($nombre_usuario!=NULL) {
				$existe = $this->db->SELECT('*')->FROM('user')->WHERE('user_name', $nombre_usuario)->WHERE('status', 1)->GET();
				if ($existe->num_rows() === 1) {
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
		/**
		 * Valida que el correo no se haya registrado con anterioridad.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Boolean TRUE si el correo existe ya, FALSE si no esta registrado.
		 * @param String $email Correo electronico que se desea registrar.
		 * @version 1.0
		 */
		public function validar_correo($email = NULL)
		{
			if ($email!=NULL) {
				$existe = $this->db->SELECT('*')->FROM('user')->WHERE('email', $email)->WHERE('status', 1)->GET();
				if ($existe->num_rows() === 1) {
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
			
		}
		
		private function _setUsuario($usuario)
		{
			$set_usuario = array();
			
			if (isset($usuario['user_name'])) {
				$set_usuario['user_name'] =  $usuario['user_name'];
			};
			if (isset($usuario['password'])) {
				$set_usuario['password'] = $usuario['password'];
			};
			if (isset($usuario['type_user'])) {
				$set_usuario['type_user'] = $usuario['type_user'];
			};
			if (isset($usuario['id_avatar'])) {
				$set_usuario['id_avatar'] = $usuario['id_avatar'];
			};
			if (isset($usuario['name'])) {
				$set_usuario['name'] = $usuario['name'];
			};
			if (isset($usuario['last_name'])) {
				$set_usuario['last_name'] = $usuario['last_name'];
			};
			if (isset($usuario['email'])) {
				$set_usuario['email'] = $usuario['email'];
			};
			if (isset($usuario['id_degree'])) {
				$set_usuario['id_degree'] = $usuario['id_degree'];
			};
			if (isset($usuario['uam_identifier'])) {
				$set_usuario['uam_identifier'] = $usuario['uam_identifier'];
			};
			if (isset($usuario['registration_date'])) {
				$set_usuario['registration_date'] = $usuario['registration_date'];
			};
			if (isset($usuario['status'])) {
				$set_usuario['status'] = $usuario['status'];
			};
			
			
			return $set_usuario;
		}
}











/* End of file Registro_usuario_m.php */
/* Location: ./application/models/Registro_usuario_m.php */