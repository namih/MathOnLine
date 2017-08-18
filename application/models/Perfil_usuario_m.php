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
}