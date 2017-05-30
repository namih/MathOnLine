<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Test_models_c extends CI_Controller {
			
		public function __construct() {
			parent::__construct();
			$this->load->model("Registro_usuario_m");
			$this->load->model("Home_m");
			$this->load->library('email');
			$this->load->library('encrypt');
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
		
		public function lista_lic()
		{
			$unidad = 4;
			$lic = $this->Registro_usuario_m->obtener_licenciaturas($unidad);
			echo "<pre>";
			print_r($lic);
			echo "<pre>";
		}
		
		public function activar()
		{
			$id_usuario = 2;
			$activacion = $this->Registro_usuario_m->activar_cuenta($id_usuario);
			echo $activacion;
		}
		
		public function registrar()
		{
			
			// for ($i=1; $i < 75000; $i++) { 
				// date_default_timezone_set('America/Mexico_City');
				// $format = 'Y-m-d h:i:s';
				// $usuario = array(
								// 'user_name' => 'usuario_'.$i,
								// 'password' => 'qwerty2017',
								// 'type_user' => 2,
								// 'name' => 'Cesar_'.$i,
								// 'last_name' => 'Padilla',
								// 'sex' => 1,
								// 'year_birthday' => 1985,
								// 'id_unit_uam' => 4,
								// 'email' =>'correo'.$i.'@gmail.com',
								// 'uam_identifier' => '20421480'.$i,
								// 'is_student' => TRUE,
								// 'is_employed' => TRUE,
								// 'registration_date' => date($format)
								 // );
// 				
				// $id_usuario = $this->Registro_usuario_m->registrar_usuario($usuario);
			// }
			date_default_timezone_set('America/Mexico_City');
				$format = 'Y-m-d h:i:s';
				$usuario = array(
								'user_name' => 'JCesarCBI',
								'password' => $this->encrypt->encode('JiU8Lp19O0'),
								'type_user' => 2,
								'name' => 'Cesar',
								'last_name' => 'Padilla',
								'sex' => 1,
								'year_birthday' => 1985,
								'id_unit_uam' => 4,
								'email' =>'nightlightmx@gmail.com',
								'uam_identifier' => '20421480',
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
		
		public function verificar()
		{
			$datos = array('username' => 'nightlightmx', 'email'=> 'nightlightmx@gmail.com');
			$existen = $this->Registro_usuario_m->usuario_email($datos);
			
			echo $existen;
		}

		public function auto_verificar()
		{
			$this -> load -> view('auto_verificar');
			
		}

		public function pass_layaout()
		{
			$datos = array('user_name' => "Yo",'password'=>'M1P4ssw0RD' );
			$this -> load -> view('email/recovery_password', $datos);
			
		}
		
		public function activacion_layaout()
		{
			$datos = array('user_name' => "Yo",'url'=>'http://www.crunchyroll.com/' );
			$this -> load -> view('email/activacion_cuenta', $datos);
			
		}
		
		
		public function enviar_correo()
		{
			$data = array('user_name' => "Yo",'password'=>'M1P4ssw0RD' );
			$configuracion = $this->conf_email->configuracion_email();
					
			$this->email->initialize($configuracion);
			
			$this->email->from('mate');
			$this->email->to('jcesarcbi@gmail.com');
			$this->email->subject('Registro de lacontraseña');
			$this->email->message($this->load->view('email/recovery_password', $data, TRUE));
			if ($this->email->send()) {
				echo "Correo enviado";
			} else {
				echo "Error al enviar el correo";
			}
		}
		
		public function enviar_activacion()
		{
						
			$data = array('user_name' => "Yo", 'url' => 'http://www.crunchyroll.com/' );
			$configuracion = $this->conf_email->configuracion_email();
					
			$this->email->initialize($configuracion);
			
			$this->email->from('mate');
			$this->email->to('jcesarcbi@gmail.com');
			$this->email->subject('Activación cuenta');
			$this->email->message($this->load->view('email/activacion_cuenta', $data, TRUE));
			if ($this->email->send()) {
				echo "Correo enviado";
			} else {
				echo "Error al enviar el correo";
			}
		}
		
		public function enviar_password()
		{
						
			$data = array('user_name' => "Yo", 'password' => '3sTE-EsM1_P@ssWoRd' );
			$configuracion = $this->conf_email->configuracion_email();
					
			$this->email->initialize($configuracion);
			
			$this->email->from('mate');
			$this->email->to('jcesarcbi@gmail.com');
			$this->email->subject('Activación cuenta');
			$this->email->message($this->load->view('email/recovery_password', $data, TRUE));
			if ($this->email->send()) {
				echo "Correo enviado";
			} else {
				echo "Error al enviar el correo";
			}
		}
		
		public function nombre_usuario_disponible()
		{
			$pre_registro = $this -> input -> post('datos');
			$usuario = $pre_registro['user_name'];
			
			$valida = $this->Registro_usuario_m->validar_usuario($usuario);
			
			if ($valida == TRUE) {
				echo 'NO';
			} else {
				echo 'SI';
			}
			
		}
		
		public function recuperar()
		{
			$email = 'nightlightmx@gmail.com';
			
			$data = $this->Home_m->recuperar_pass($email);
			
			$configuracion = $this->conf_email->configuracion_email();
					
			$this->email->initialize($configuracion);
			
			$this->email->from('matenlinea.cbi@gmail.com');
			$this->email->to($email);
			$this->email->subject('Recuperación de contraseña');
			$this->email->message($this->load->view('email/recovery_password', $data, TRUE));
			if ($this->email->send()) {
				echo "Correo enviado";
			} else {
				echo "Error al enviar el correo";
			}
		}
		
		public function recuperar_password()
		{
			$email = 'nightlightmx@gmail.com';
			
			$data = $this->Home_m->recuperar_pass($email);
			
			
			$pass = $this->encrypt->decode($data['password']);
			
			echo $pass;
			
		}
		
		public function tema_mes_inicio()
		{
			$meses = array('anterior' => 4, 'actual' => 5, 'siguiente' => 6);
			
			$mostrar = $this->Home_m->tema_mes($meses);
			
			echo "<pre>";
			print_r($mostrar);
			echo "<pre>";
		}
}
