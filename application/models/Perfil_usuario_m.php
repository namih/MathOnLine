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
								->SELECT('user.id_user,
													user.user_name,
													user.password,
													user.type_user,
													avatar.id_avatar,
													avatar.location,
													user.name,
													user.last_name,
													user.sex,
													user.year_birthday,
													user.email,
													user.id_degree,
													unit_uam.id_unit_uam,
													user.uam_identifier,
													user.is_student,
													user.is_employed,
													user.registration_date,
													user.total_score,
													user.league,
													user.status')
								->FROM('user')
								->JOIN('avatar', 'avatar.id_avatar = user.id_avatar')
								->JOIN('degree', 'degree.id_degree = user.id_degree')
								->JOIN('unit_uam', 'unit_uam.id_unit_uam = degree.id_unit_uam')
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

		public function actualizar_perfil($usuario_nuevo = null,$user=null)
		{
			if ($usuario_nuevo != null){

				$avatar = $this->db -> select('avatar.location')
							->FROM('avatar')
							->WHERE('avatar.id_avatar',$usuario_nuevo['id_avatar'])
							->GET()->row();

				$usuario_nuevo['type_user']=$user['type_user'];
				$usuario_nuevo['total_score']=$user['total_score'];
				$usuario_nuevo['location']=$avatar->location;
				var_dump($user['email']==$usuario_nuevo['email']);

				if($user['email']==$usuario_nuevo['email']){
					if($usuario_nuevo['password']==''){
						$usuario_nuevo['status']=$user['status'];
						$this->db->SET($this->sinpassUsuario($usuario_nuevo))->WHERE ('user.id_user', $user['id_user'])->UPDATE('user');
					} else{
						$usuario_nuevo['status']=$user['status'];
						$this->db->SET($this->_setUsuario($usuario_nuevo))->WHERE ('user.id_user', $user['id_user'])->UPDATE('user');
					}
					return $usuario_nuevo;
				} else {
					if($usuario_nuevo['password']==''){
						$usuario_nuevo['status']=0;
						$this->db->SET($this->sinpassUsuario($usuario_nuevo))->WHERE ('user.id_user', $user['id_user'])->UPDATE('user');
					} else{
						$usuario_nuevo['status']=0;
						$this->db->WHERE ('user.id_user', $user['id_user'])->UPDATE('user',$usuario_nuevo);
					}
					return $usuario_nuevo;
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
			if (isset($usuario['status'])) {
				$set_usuario['status'] = $usuario['status'];
			};

			return $set_usuario;
		}

		private function sinpassUsuario($usuario)
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
			if (isset($usuario['status'])) {
				$set_usuario['status'] = $usuario['status'];
			};

			return $set_usuario;
		}

}
