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
			$this->load->model("Tutorial_m");
			$this->load->library('email');
			$this->load->library('encrypt');
			$this->load->library('etiquetas');
        }
		
		public function wiris()
		{
			$this->load->view('header/head_v');
			$this->load->view('administrador/Editor_evaluacion_v');
			$this->load->view('footer/footer_v');
		}

		public function pass_encrypt()
		{
			$pass = '123456';
			$pass_encode = $this->encrypt->encode($pass);
			echo $pass_encode;
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
}
