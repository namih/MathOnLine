<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	error_reporting(E_ERROR);

	class Test_models_c extends CI_Controller {
			
		public function __construct() {
			parent::__construct();
			$this->load->model("Home_student_m");
			$this->load->model("Home_admin_m");
			$this->load->model("Registro_usuario_m");
			$this->load->model("Complementary_material_m");
			$this->load->model("Home_m");
			$this->load->library('email');
			$this->load->library('encrypt');
			$this->load->library('etiquetas');
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
				'user_name' => 'Sisbyte',
				'password' => $this->encrypt->encode('JiU8Lp19O0'),
				'type_user' => 3,
				'name' => 'Cesar',
				'last_name' => 'Padilla',
				'sex' => 1,
				'year_birthday' => 1985,
				'id_degree' => 36,
				'email' =>'sisbyte@gmail.com',
				'uam_identifier' => '204214807',
				'is_student' => TRUE,
				'is_employed' => TRUE,
				'registration_date' => date($format)
			);
			
			$avatar = $this->etiquetas->type_avatar();
									
			if ($usuario['sex'] === 1) {
				$usuario['id_avatar'] = $avatar['male'][array_rand($avatar['male'], 1)];
			} else {
				$usuario['id_avatar'] = $avatar['female'][array_rand($avatar['female'], 1)];
			}
			
			
			$id_usuario = $this->Registro_usuario_m->registrar_usuario($usuario);				
			echo $id_usuario;
			echo "<br>";
			echo $usuario['id_avatar'];
			echo "<br>";
			$activacion = $this->Registro_usuario_m->activar_cuenta($id_usuario);
			echo $activacion;
		}
		
		
		public function tutoriales()
		{
			$tutoriales = $this->Home_student_m->lista_tutoriales();
			echo "<pre>";
			print_r($tutoriales);
			echo "<pre>";
		}
		
		
		public function tutorial_rnd()
		{
			for ($i=0; $i < 5; $i++) {
				
				$inicio = strtotime('2017-05-01 00:00:00');
				$fin = strtotime('2017-05-31 23:59:59');
				$int= mt_rand($inicio,$fin);
				$date_rnd = date("Y-m-d H:i:s",$int);
				
				$tutorial = array('id_user' => 3,
						'id_tutorial' => rand(1, 26),
						'time_finish' => rand(600, 1800),
						'tutorial_date' => $date_rnd			
						);
			
				$guardar = $this->Home_student_m->registro_tutorial($tutorial);
			
				echo $guardar;
				echo "<br>";
			}
		}
		
		public function pass_encrypt()
		{
			$pass = '4dM1n@2017';
			
			$pass_encode = $this->encrypt->encode($pass);
			
			echo $pass_encode;
		}
		
		public function tuto_usuario()
		{
			$id_user = 2;
			$terminados = $this->Home_student_m->tutoriales_usuario($id_user);
			echo "<pre>";
			print_r($terminados);
			echo "<pre>";
		}
		
		public function temas()
		{
			$temas = $this->Home_admin_m->lista_tema_mes();
			
			
			$datos['temas'] = $temas;
			$this->load->view('header/head_v');
			$this -> load -> view('auto_verificar',$datos);
			$this->load->view('footer/footer_v');	
		}
		
		public function editor_tema()
		{
			$temas = $this->Home_admin_m->lista_tema_mes();
			
			
			$datos['temas'] = $temas;
			
			// $this->load->view('header/head_v');
			$this->load->view('editor_tema_mes_v',$datos);
			// $this->load->view('footer/footer_v');	
		}
		
		
		public function etiquetas()
		{
			$test = $this->etiquetas->type_user();
			print_r($test);
		}
		
		public function datos_sesion()
		{
			$credencial = array('user_name' => 'NightlightCDMX', 'password' => 'JiU8Lp19O0');
			
			$datos = $this->Home_m->iniciar_sesion($credencial);
			
			echo "<pre>";
			print_r($datos);
			echo "<pre>";
			
		}
		
		
		public function links()
		{
			$links = $this->Complementary_material_m->lista_links();
			echo "<pre>";
			print_r($links);
			echo "<pre>";
		}
		
		public function biblio()
		{
			$biblio = $this->Complementary_material_m->lista_bibliografia();
			echo "<pre>";
			print_r($biblio);
			echo "<pre>";
		}
		
		public function activacion_ok()
		{
			$this->load->view('header/head_v');
			$this->load->view('Activacion_exitosa_v');
			$this->load->view('footer/footer_v');
		}

}
