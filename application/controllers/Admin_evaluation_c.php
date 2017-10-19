<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	error_reporting(E_ERROR);

	class Admin_evaluation_c extends CI_Controller {
			
		public function __construct() {
			parent::__construct();
			$this->load->model("Evaluation_m");
        }
		
		public function administrador()
		{
			$login = $this->session->userdata('logged_in');
	        if($login != null && $login == true){
		        $datos['temas'] = $this->Evaluation_m->temas();
			   			    
			    $datos["user_log"][0] = $this->session->userdata('user');
			    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
		        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
		        $datos['opt_menu_active']='opt_admin_evaluacion';
	
			    $this->load->view('header/head_v');
			    $this->load->view('header/Menu_user_v', $datos);
				$this->load->view('administrador/Admin_evaluaciones_v',$datos);
		    	$this->load->view('footer/footer_v');
		    }else{
		    	redirect(base_url());
		    }
		}
		
		public function subtema()
		{
			$datos = $this->input -> post('datos');
			$tema = $datos['tema'];
			$subtema = $this->Evaluation_m->subtemas($tema);	
			if ($subtema == FALSE) {
				echo "No existen subtemas para el tema.";
			} else {
				echo json_encode($subtema);
			}
		}
		
		
		public function evaluacion()
		{
			$datos = $this->input -> post('datos');
			$subtema = $datos['subtema'];
			$evaluacion = $this->Evaluation_m->evaluacion_subtema($subtema);	
			if ($subtema == FALSE) {
				echo "No existen subtemas para el tema.";
			} else {
				echo json_encode($evaluacion);
			}
		}
		
		public function borrar_evaluacion()
		{
			$id_evaluacion= $this->input->post('id');
			$borrar = $this->Evaluation_m->borrar_evaluacion($id_evaluacion);
			if ($borrar== TRUE) {
				echo "Borrado";
			} else {
				echo "Error";
			}
		}
		
		public function nueva_evaluacion()
		{
			$login = $this->session->userdata('logged_in');
			if($login != null && $login == true){
				$datos["user_log"][0] = $this->session->userdata('user');
				$menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
				$datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
				$datos['opt_menu_active']='opt_admin_evaluacion';
				
				$datos['temas'] = $this->Evaluation_m->temas();				
				
				$this->load->view('header/head_v');
				$this->load->view('header/Menu_user_v', $datos);
				$this->load->view('administrador/Editor_evaluacion_v', $datos);
				$this->load->view('footer/footer_v');
			}else{
				redirect(base_url());
			}
		}
		
		
		public function editor_evaluacion($id_evaluacion=NULL)
		{
			$login = $this->session->userdata('logged_in');
			if ($id_evaluacion != NULL) {
				if($login != null && $login == true){
			    $datos["user_log"][0] = $this->session->userdata('user');
			    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
		        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
		        $datos['opt_menu_active']='opt_admin_evaluacion';
				
				$datos['temas'] = $this->Evaluation_m->temas();	
				$datos['evaluacion'] = $this->Evaluation_m->get_evaluacion($id_evaluacion);
			    
			    $this->load->view('header/head_v');
				$this->load->view('header/Menu_user_v', $datos);
				$this->load->view('administrador/Editor_evaluacion_v', $datos);
				$this->load->view('footer/footer_v');
		    }else{
		    	redirect(base_url());
		    }
			} else {
				redirect(base_url());
			}
		}
		
		public function guardar_evaluacion()
		{
			$evaluacion = array();
			$mensaje = '';
			
			$id_subtopic = $this->input->post('id_subtopic');
			$tema = $this->input->post('tema');
			$question = $this->input->post('question');
			$correct_answer = $this->input->post('correct_answer');
			$wrong_answer_a = $this->input->post('wrong_answer_a');
			$wrong_answer_b = $this->input->post('wrong_answer_b');
			$wrong_answer_c = $this->input->post('wrong_answer_c');
			$points = $this->input->post('points');
			
			switch ($tema) {
				case 'Números':
					$tema = 'numeros';
					break;
				case 'Álgebra':
					$tema = 'algebra';
					break;
				case 'Geometría y Trigonometría':
					$tema = 'geom_trigonom';
					break;
				case 'Geometría analítica':
					$tema = 'geom_ana';
					break;
			}
			
			$ruta = "statics/img/evaluacion/".$tema."/";
			
			$evaluacion['id_subtopic'] = $id_subtopic;
			$evaluacion['points'] = $points;
			
			if (isset($_FILES['image_question_0'])) {
				$i = 0;			
				foreach ($_FILES as $key) {
					if ($key['error'] == UPLOAD_ERR_OK) {
						$type = explode( '/', $key['type'] );
						if(is_uploaded_file($_FILES['image_question_'.$i]['tmp_name'])){
							$temporal = $_FILES['image_question_'.$i]['tmp_name'];
							$nombre = uniqid().'.'.$type[1];
							$image = $ruta.$nombre;
							
							move_uploaded_file($temporal, $image);
							
							$ubicacion = $ruta.$nombre;
							$question = str_replace("img_".$i, '<img class="img-responsive" src="../'.$ubicacion.'">', $question);
							$i++;
						}
					}
					if ($key['error']!= 0) {
						switch ($key['error']) {
						case UPLOAD_ERR_INI_SIZE:
							$mensaje = "El archivo subido supera la directiva upload_max_filesize en php.ini";  
							break;
	
						case UPLOAD_ERR_FORM_SIZE:
							$mensaje="El archivo subido supera la directiva MAX_FILE_SIZE que se especificó en el formulario HTM";
							break;
	
						case UPLOAD_ERR_PARTIAL:
							$mensaje="El archivo subido sólo se cargó parcialmente";
							break;
	
						case UPLOAD_ERR_NO_FILE:
							$mensaje="Ningun archivo fue subido";
						break;
	
						case UPLOAD_ERR_NO_TMP_DIR:
							$mensaje="Falta una carpeta temporal";
						break;							
	
						case UPLOAD_ERR_CANT_WRITE:
							$mensaje="Error al escribir el archivo en el disco";
						break;
	
						case UPLOAD_ERR_EXTENSION:
							$mensaje="Archivo de carga detenido por extensión";
						break;
	
						default: 
							$mensaje = "Error desconocido en la carga"; 
							break; 
						}
					}
				}
				$evaluacion['question'] = $question;
			} else {
				$evaluacion['question'] = $question;
			}
			
			if (isset($_FILES['correct_answer_img_0'])) {
				$i = 0;			
				foreach ($_FILES as $key) {
					if ($key['error'] == UPLOAD_ERR_OK) {
						$type = explode( '/', $key['type'] );
						if(is_uploaded_file($_FILES['correct_answer_img_'.$i]['tmp_name'])){
							$temporal = $_FILES['correct_answer_img_'.$i]['tmp_name'];
							$nombre = uniqid().'.'.$type[1];
							$image = $ruta.$nombre;
							
							move_uploaded_file($temporal, $image);
							
							$ubicacion = $ruta.$nombre;
							$correct_answer = str_replace("img_".$i, '<img class="img-responsive" src="../'.$ubicacion.'">', $correct_answer);
							$i++;
						}
					}
					if ($key['error']!= 0) {
						switch ($key['error']) {
						case UPLOAD_ERR_INI_SIZE:
							$mensaje = "El archivo subido supera la directiva upload_max_filesize en php.ini";  
							break;
	
						case UPLOAD_ERR_FORM_SIZE:
							$mensaje="El archivo subido supera la directiva MAX_FILE_SIZE que se especificó en el formulario HTM";
							break;
	
						case UPLOAD_ERR_PARTIAL:
							$mensaje="El archivo subido sólo se cargó parcialmente";
							break;
	
						case UPLOAD_ERR_NO_FILE:
							$mensaje="Ningun archivo fue subido";
						break;
	
						case UPLOAD_ERR_NO_TMP_DIR:
							$mensaje="Falta una carpeta temporal";
						break;							
	
						case UPLOAD_ERR_CANT_WRITE:
							$mensaje="Error al escribir el archivo en el disco";
						break;
	
						case UPLOAD_ERR_EXTENSION:
							$mensaje="Archivo de carga detenido por extensión";
						break;
	
						default: 
							$mensaje = "Error desconocido en la carga"; 
							break; 
						}
					}
				}
				$evaluacion['correct_answer'] = $correct_answer;
			} else {
				$evaluacion['correct_answer'] = $correct_answer;
			}
			
			if (isset($_FILES['wrong_answer_a_img_0'])) {
				$i = 0;			
				foreach ($_FILES as $key) {
					if ($key['error'] == UPLOAD_ERR_OK) {
						$type = explode( '/', $key['type'] );
						if(is_uploaded_file($_FILES['wrong_answer_a_img_'.$i]['tmp_name'])){
							$temporal = $_FILES['wrong_answer_a_img_'.$i]['tmp_name'];
							$nombre = uniqid().'.'.$type[1];
							$image = $ruta.$nombre;
							
							move_uploaded_file($temporal, $image);
							
							$ubicacion = $ruta.$nombre;
							$wrong_answer_a = str_replace("img_".$i, '<img class="img-responsive" src="../'.$ubicacion.'">', $wrong_answer_a);
							$i++;
						}
					}
					if ($key['error']!= 0) {
						switch ($key['error']) {
						case UPLOAD_ERR_INI_SIZE:
							$mensaje = "El archivo subido supera la directiva upload_max_filesize en php.ini";  
							break;
	
						case UPLOAD_ERR_FORM_SIZE:
							$mensaje="El archivo subido supera la directiva MAX_FILE_SIZE que se especificó en el formulario HTM";
							break;
	
						case UPLOAD_ERR_PARTIAL:
							$mensaje="El archivo subido sólo se cargó parcialmente";
							break;
	
						case UPLOAD_ERR_NO_FILE:
							$mensaje="Ningun archivo fue subido";
						break;
	
						case UPLOAD_ERR_NO_TMP_DIR:
							$mensaje="Falta una carpeta temporal";
						break;							
	
						case UPLOAD_ERR_CANT_WRITE:
							$mensaje="Error al escribir el archivo en el disco";
						break;
	
						case UPLOAD_ERR_EXTENSION:
							$mensaje="Archivo de carga detenido por extensión";
						break;
	
						default: 
							$mensaje = "Error desconocido en la carga"; 
							break; 
						}
					}
				}
				$evaluacion['wrong_answer_a'] = $wrong_answer_a;
			} else {
				$evaluacion['wrong_answer_a'] = $wrong_answer_a;
			}
			
			if (isset($_FILES['wrong_answer_b_img_0'])) {
				$i = 0;			
				foreach ($_FILES as $key) {
					if ($key['error'] == UPLOAD_ERR_OK) {
						$type = explode( '/', $key['type'] );
						if(is_uploaded_file($_FILES['wrong_answer_b_img_'.$i]['tmp_name'])){
							$temporal = $_FILES['wrong_answer_b_img_'.$i]['tmp_name'];
							$nombre = uniqid().'.'.$type[1];
							$image = $ruta.$nombre;
							
							move_uploaded_file($temporal, $image);
							
							$ubicacion = $ruta.$nombre;
							$wrong_answer_b = str_replace("img_".$i, '<img class="img-responsive" src="../'.$ubicacion.'">', $wrong_answer_b);
							$i++;
						}
					}
					if ($key['error']!= 0) {
						switch ($key['error']) {
						case UPLOAD_ERR_INI_SIZE:
							$mensaje = "El archivo subido supera la directiva upload_max_filesize en php.ini";  
							break;
	
						case UPLOAD_ERR_FORM_SIZE:
							$mensaje="El archivo subido supera la directiva MAX_FILE_SIZE que se especificó en el formulario HTM";
							break;
	
						case UPLOAD_ERR_PARTIAL:
							$mensaje="El archivo subido sólo se cargó parcialmente";
							break;
	
						case UPLOAD_ERR_NO_FILE:
							$mensaje="Ningun archivo fue subido";
						break;
	
						case UPLOAD_ERR_NO_TMP_DIR:
							$mensaje="Falta una carpeta temporal";
						break;							
	
						case UPLOAD_ERR_CANT_WRITE:
							$mensaje="Error al escribir el archivo en el disco";
						break;
	
						case UPLOAD_ERR_EXTENSION:
							$mensaje="Archivo de carga detenido por extensión";
						break;
	
						default: 
							$mensaje = "Error desconocido en la carga"; 
							break; 
						}
					}
				}
				$evaluacion['wrong_answer_b'] = $wrong_answer_b;
			} else {
				$evaluacion['wrong_answer_b'] = $wrong_answer_b;
			}
			
			if (isset($_FILES['wrong_answer_c_img_0'])) {
				$i = 0;			
				foreach ($_FILES as $key) {
					if ($key['error'] == UPLOAD_ERR_OK) {
						$type = explode( '/', $key['type'] );
						if(is_uploaded_file($_FILES['wrong_answer_c_img_'.$i]['tmp_name'])){
							$temporal = $_FILES['wrong_answer_c_img_'.$i]['tmp_name'];
							$nombre = uniqid().'.'.$type[1];
							$image = $ruta.$nombre;
							
							move_uploaded_file($temporal, $image);
							
							$ubicacion = $ruta.$nombre;
							$wrong_answer_c = str_replace("img_".$i, '<img class="img-responsive" src="../'.$ubicacion.'">', $wrong_answer_c);
							$i++;
						}
					}
					if ($key['error']!= 0) {
						switch ($key['error']) {
						case UPLOAD_ERR_INI_SIZE:
							$mensaje = "El archivo subido supera la directiva upload_max_filesize en php.ini";  
							break;
	
						case UPLOAD_ERR_FORM_SIZE:
							$mensaje="El archivo subido supera la directiva MAX_FILE_SIZE que se especificó en el formulario HTM";
							break;
	
						case UPLOAD_ERR_PARTIAL:
							$mensaje="El archivo subido sólo se cargó parcialmente";
							break;
	
						case UPLOAD_ERR_NO_FILE:
							$mensaje="Ningun archivo fue subido";
						break;
	
						case UPLOAD_ERR_NO_TMP_DIR:
							$mensaje="Falta una carpeta temporal";
						break;							
	
						case UPLOAD_ERR_CANT_WRITE:
							$mensaje="Error al escribir el archivo en el disco";
						break;
	
						case UPLOAD_ERR_EXTENSION:
							$mensaje="Archivo de carga detenido por extensión";
						break;
	
						default: 
							$mensaje = "Error desconocido en la carga"; 
							break; 
						}
					}
				}
				$evaluacion['wrong_answer_c'] = $wrong_answer_c;
			} else {
				$evaluacion['wrong_answer_c'] = $wrong_answer_c;
			}
			
			$id_evaluacion = $this->Evaluation_m->nueva_evaluacion($evaluacion);
			echo $id_evaluacion;
		}
}
