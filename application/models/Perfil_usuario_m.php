<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Perfil_usuario_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
		}
		
		public function datos_usuario($id_usuario = null)
		{
			if ($id_usuario != null){
				$datos = $this->db
								->SELECT('user.id_user, user.user_name, user.password, user.type_user, avatar.id_avatar, avatar.location, user.name, user.last_name, user.sex, user.year_birthday, user.email, user.id_degree, user.uam_identifier, user.is_student, user.is_employed, user.registration_date, user.status')
								->FROM('user')
								->JOIN('avatar', 'avatar.id_avatar = user.id_avatar')
								->WHERE('user.id_user', $id_usuario)
								->GET();
				if ($datos->num_rows() == 1) {
					$perfil = $datos->result_array();
					if ($perfil[0]['sex']==1){
						$perfil[0]['perfil_sexo'] = 'Hombre';
					}
					else{
						$perfil[0]['perfil_sexo'] = 'Mujer';
					}
					$fecha = date_create($perfil[0]['registration_date']);
					$fecha = date_format($fecha, 'd-m-Y');
					$perfil[0]['fecha'] = $fecha;
					$avatar = $this->db	->SELECT('*')->FROM('avatar')->WHERE('gender', $perfil[0]['sex'])->GET();
					if ($avatar->num_rows() > 0) {
						$avatar_genero = $avatar->result_array();
						$perfil[0]['avatares_disponibles'] = $avatar_genero;
						return $perfil;
					} else {
						return $avatar->result_array();
					}
				} else {
					return FALSE;
				}
			}
			else {
				return null;
			}
		}

		public function actualizar_perfil($usuario = null)
		{
			if ($usuario != null){
				$user = $this->db
							->SELECT('*')
							->FROM('user')
							->WHERE('user.id_user', $usuario['id_user'])
							->GET()->row();
								
				if($user->email==$usuario['email']){
					if($usuario['password']==''){
						$this->db->SET($this->_sinpassUsuario($usuario))->WHERE ('user.id_user', $usuario['id_user'])->UPDATE('user');
					} else{
						$this->db->SET($this->_setUsuario($usuario))->WHERE ('user.id_user', $usuario['id_user'])->UPDATE('user');
						$usuario['status']=$user->status;
					}
					return $usuario;
				} else {
					if($usuario['password']==''){
						$this->db->SET($this->_sinpassUsuario($usuario))->WHERE ('user.id_user', $usuario['id_user'])->UPDATE('user');
					} else{
						$usuario['status']=0;
						$this->db->WHERE ('user.id_user', $usuario['id_user'])->UPDATE('user',$usuario);
					}
					return $usuario;
				}
			} 
			else {
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
			if (isset($usuario['id_avatar'])) {
				$set_usuario['id_avatar'] = $usuario['id_avatar'];
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
			if (isset($usuario['email'])) {
				$set_usuario['email'] = $usuario['email'];
			};
			
			
			return $set_usuario;
		}
		
		private function _sinpassUsuario($usuario)
		{
			$set_usuario = array();
			
			if (isset($usuario['user_name'])) {
				$set_usuario['user_name'] =  $usuario['user_name'];
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
			if (isset($usuario['sex'])) {
				$set_usuario['sex'] = $usuario['sex'];
			};
			if (isset($usuario['year_birthday'])) {
				$set_usuario['year_birthday'] = $usuario['year_birthday'];
			};
			if (isset($usuario['email'])) {
				$set_usuario['email'] = $usuario['email'];
			};
	
			return $set_usuario;
		}
			
}