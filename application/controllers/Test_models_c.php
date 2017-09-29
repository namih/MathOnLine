<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	error_reporting(E_ERROR);

	class Test_models_c extends CI_Controller {
			
		public function __construct() {
			parent::__construct();
			$this->load->model("Home_student_m");
			$this->load->model("Home_admin_m");
			$this->load->model("Registro_usuario_m");
			$this->load->model("Complementary_material_m");
			$this->load->model("Perfil_usuario_m");
			$this->load->model("Home_m");
			$this->load->model("Evaluation_m");
			$this->load->library('email');
			$this->load->library('encrypt');
			$this->load->library('etiquetas');
        }
		
		
		public function answer()
		{
			$data = array(
					   array(
					      'id_evaluation_test_log' => 1 ,
					      'id_evaluation' => 2 ,
					      'answer' => 'correct_answer'
					   ),
					   array(
					      'id_evaluation_test_log' => 1 ,
					      'id_evaluation' => 4 ,
					      'answer' => 'wrong_answer_a'
					   ),
					   array(
					      'id_evaluation_test_log' => 1 ,
					      'id_evaluation' => 6 ,
					      'answer' => 'wrong_answer_b'
					   ),
					   array(
					      'id_evaluation_test_log' => 1 ,
					      'id_evaluation' =>  8,
					      'answer' => 'correct_answer'
					   ),
					);
					
			$respuestas = $this->Evaluation_m->guardar_respuestas($data);
			
			echo "<pre>";
			print_r($respuestas);
			echo "<pre>";
		}
		
		public function update_score()
		{
			$data = array('id_user' => 2,
					      'total_score' => 45);
					
			$score = $this->Evaluation_m->actualiza_escore($data);
			
			echo "<pre>";
			print_r($score);
			echo "<pre>";
		}
		
		public function wiris()
		{
			$this->load->view('header/head_v');
			$this->load->view('administrador/Editor_evaluacion_v');
			$this->load->view('footer/footer_v');
		}

		public function clean()
		{
			$this->load->view('header/head_v');
			$this->load->view('auto_verificar');
			$this->load->view('footer/footer_v');
		}
		
		public function registrar() {
			date_default_timezone_set('America/Mexico_City');
			$format = 'Y-m-d h:i:s';
			$usuario = array(
				'user_name' => 'NightlightMX',
				'password' => $this->encrypt->encode('JiU8Lp19O0'),
				'type_user' => 3,
				'name' => 'Julio Cesar',
				'last_name' => 'Padilla Dorantes',
				'sex' => 1,
				'year_birthday' => 1985,
				'id_degree' => 36,
				'email' =>'nightlightmx@gmail.com',
				'uam_identifier' => '204214807',
				'is_student' => TRUE,
				'is_employed' => TRUE,
				'registration_date' => date($format)
			);
			
			$ids = $this->Registro_usuario_m->obtener_id_avatar($usuario['sex']);
			
			$avatar = $ids[array_rand($ids, 1)];
									
			$usuario['id_avatar'] = $avatar['id_avatar'];
			
			
			$id_usuario = $this->Registro_usuario_m->registrar_usuario($usuario);				
			echo $id_usuario;
			echo "<br>";
			$activacion = $this->Registro_usuario_m->activar_cuenta($id_usuario);
			echo $activacion;
		}
		
		public function pass_encrypt()
		{
			$pass = '123456';
			
			$pass_encode = $this->encrypt->encode($pass);
			
			echo $pass_encode;
			
			date_default_timezone_set('America/Mexico_City');
			$format = 'Y-m-d h:i:s';
			
			echo date($format);
		}

		public function eva()
		{
			$id_tema = 1;
			$eva = $this->Evaluation_m->evaluacion($id_tema);
			
			echo "<pre>";
			print_r($eva);
			echo "<pre>";
		}
		
		public function semanal()
		{
			$semanal = $this->Home_m->pregunta_semanal();
			
			echo "<pre>";
			print_r($semanal);
			echo "<pre>";
		}
		
		public function guardar_imagen()
		{
		//comprobamos que sea una petición ajax
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
			
			if(empty($_FILES['archivo']) || $_FILES['archivo']['name']==null){
				echo "No seleccionaste archivo";
				print_r($_FILES);
			} else {
								
				//obtener la extension del archivo
				$tipo_archivo = $_FILES['archivo']['type'];
				$extension = explode("/", $tipo_archivo);
				
				//obtenemos el archivo a subir
				$file = $_FILES['archivo']['name'];
				
				$archivo_renombrado = 'nuevo_calendario'.".".$extension[1];
				
				//comprobamos si existe un directorio para subir el archivo
				//si no es así, lo creamos
				if(!is_dir("/statics/img/calendario_uam/")) 
					mkdir("/statics/img/calendario_uam/", 0777);
				
				//comprobamos si el archivo ha subido
				if ($file && move_uploaded_file($_FILES['archivo']['tmp_name'],"statics/img/calendario_uam/".$archivo_renombrado)) {
					sleep(1);//retrasamos la petición 1 segundos
					echo $archivo_renombrado;//devolvemos el nombre del archivo para pintar la imagen
				}	
			}
		}else{
			throw new Exception("Error Processing Request", 1);
		}
	}
	public function guardar()
	{
		$ruta = "statics/img/calendario_uam/";
		$mensaje = "";
		foreach ($_FILES as $key) {
			if ($key['error'] == UPLOAD_ERR_OK) {
				$Nombre_Original = $key['name'];
				$Temporal = $key['tmp_name'];
				$destino = $ruta.$Nombre_Original;
				
				move_uploaded_file($Temporal, $destino);
			}
			if ($key['error'] == '') { 
				$mensaje = "archivo subido";
			}
			if ($key['error'] != '') { 
				$mensaje = "error".$key['error'];
			}
		}
		echo $mensaje;
	}
	
	public function math()
	{
		$datos = array(	'question' => 'Simplifique <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>6</mn><mi>x</mi><mo>+</mo><mn>5</mn></mrow><mrow><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>25</mn></mrow></mfrac></math>',
						'r1' => '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mi>x</mi><mo>+</mo><mn>1</mn></mrow><mrow><mi>x</mi><mo>+</mo><mn>5</mn></mrow></mfrac></math>',
						'r2' => '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mi>x</mi><mo>+</mo><mn>5</mn></mrow><mrow><mi>x</mi><mo>-</mo><mn>25</mn></mrow></mfrac></math>',
						'r3' => '<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>+</mo><mn>5</mn></math>',
						'r4' => '<img src="../statics/img/evaluacion/geom_trigonom/Img_3_4_1_1_2.bmp" class="img-responsive">', );
		
		$this->load->view('header/head_v');
		$this->load->view('evaluacion',$datos);
		$this->load->view('footer/footer_v');
	}
}
