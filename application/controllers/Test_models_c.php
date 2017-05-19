<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Test_models_c extends CI_Controller {
			
		public function __construct() {
			parent::__construct();
			$this->load->model("Registro_usuario_m");
			$this->load->model("Modelo_inicio_m");
        }
		
		/**
		 * Controlador para testear los modelos creados
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return NA
		 * @param NA
		 * @version 1.0
		 */
		public function lista_uam()
		{
			$uamis = $this->Registro_usuario_m->obtener_unidades_uam();
			print_r($uamis);
		}
		
		public function activar()
		{
			$id_usuario = 2;
			$activacion = $this->Registro_usuario_m->activar_cuenta($id_usuario);
			echo $activacion;
		}
		
		public function registrar()
		{
			date_default_timezone_set('America/Mexico_City');
			$format = 'Y-m-d h:i:s';
			$usuario = array(
							'username' => 'NightlightMX',
							'password' => 'qwerty2017',
							'type_user' => 2,
							'name' => 'Cesar',
							'last_name' => 'Padilla',
							'sex' => 1,
							'year_birthday' => 1985,
							'id_unit_uam' => 4,
							'email' =>'NightlightMX@gmail.com',
							'uam_identifier' => '204214807',
							'is_student' => TRUE,
							'is_employed' => TRUE,
							'registration_date' => date($format)
							 );
			
			$id_usuario = $this->Registro_usuario_m->registrar_usuario($usuario);
			
			echo $id_usuario;
		}
		
		public function login()
		{
			$login = array('username' => 'NightlIGhtmx', 'password' => 'qwerty2017');
			$validar = $this->Modelo_inicio_m->iniciar_sesion($login);
			echo $validar;
			
		}
}
