<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Registro_usuario_m extends CI_Model {
			
		public function __construct() {
			parent::__construct();
		}
		
		/**
		 * Obtiene el listado de las unidades de la UAM
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return NA
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
		 * Actualiza el status del usuario a 1 para quedar activada la cuenta.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Boolean TRUE si la cuenta fue activada correctamente ó FALSE si la cuenta no existe
		 * @param Int $id_usuario Id del usuario con el que se guardaron sus datos de registro
		 * @version 1.0
		 */
		public function activar_cuenta($id_usuario = NULL)
		{
			if ($id_usuario!=NULL) {
				$datos = array('status'=> 1);
				$activacion = $this->db->update('user', $datos, array('id_user' => $id_usuario));
				if ($this->db->affected_rows()===1) {
					return "Cuenta activada XD";
				} else {
					return "Error el id del usuario no existe";
				}
			} else {
				return "El id del usuario no puede ser nulo";
			}
		}
		
		/**
		 * Actualiza el status del usuario a 1 para quedar activada la cuenta.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Boolean TRUE si la cuenta fue activada correctamente ó FALSE si la cuenta no existe
		 * @param Int $id_usuario Id del usuario con el que se guardaron sus datos de registro
		 * @version 1.0
		 */
		public function registrar_usuario($usuario = NULL)
		{
			if ($usuario !=NULL) {
				$this->db->SET(
					$this->_setUsuario($usuario)
				)
				->INSERT('user');
				if ($this->db->affected_rows() === 1) {
					return $this->db->insert_id();
				}
			return NULL;
			} else {
				return FALSE;
			}
		}
		
		
		private function _setUsuario($usuario)
		{
			$set_usuario = array();
			
			if (isset($usuario['username'])) {
				$set_usuario['username'] = $usuario['username'];
			};
			if (isset($usuario['password'])) {
				$set_usuario['password'] = $usuario['password'];
			};
			if (isset($usuario['type_user'])) {
				$set_usuario['type_user'] = $usuario['type_user'];
			};
			if (isset($usuario['name'])) {
				$set_usuario['name'] = $usuario['name'];
			};
			if (isset($usuario['last_name'])) {
				$set_usuario['last_name'] = $usuario['last_name'];
			};
			if (isset($usuario['sex'])) {
				$set_usuario['sex'] = $usuario['sex'];
			};
			if (isset($usuario['year_birthday'])) {
				$set_usuario['year_birthday'] = $usuario['year_birthday'];
			};
			if (isset($usuario['id_unit_uam'])) {
				$set_usuario['id_unit_uam'] = $usuario['id_unit_uam'];
			};
			if (isset($usuario['email'])) {
				$set_usuario['email'] = $usuario['email'];
			};
			if (isset($usuario['uam_identifier'])) {
				$set_usuario['uam_identifier'] = $usuario['uam_identifier'];
			};
			if (isset($usuario['is_student'])) {
				$set_usuario['is_student'] = $usuario['is_student'];
			};
			if (isset($usuario['is_employed'])) {
				$set_usuario['is_employed'] = $usuario['is_employed'];
			};
			if (isset($usuario['registration_date'])) {
				$set_usuario['registration_date'] = $usuario['registration_date'];
			};
			
			
			return $set_usuario;
		}
}

/* End of file Registro_usuario_m.php */
/* Location: ./application/models/Registro_usuario_m.php */