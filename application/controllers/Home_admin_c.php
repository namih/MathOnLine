<?php

class Home_admin_c extends CI_Controller {
	
	public function __construct(){
			
		
		parent::__construct();
		$this->load->model('Home_admin_m');
		
	}
	
	
	/**
	* Descripción de la función en una línea
	* o en más de una línea.
	*
	* @author Autor del código
	* @param Parámetros que recibe la función. Formato: [* @param tipo $nombre_var comentario]
	* @return Valor devuelto por la función. Formato: [* @return tipo comentario]
	* @version 1.0
	*/
	function index(){
		$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){     
        	$type_user = $this->session->userdata('type_user');
        	if($type_user == 1 || $type_user == 2){
        		$datos['temas'] = $this->tema_mes();
				
				$datos["user_log"][0] = $this->session->userdata('user');
		        $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
		        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];

				$this->load->view('header/head_v');
				$this->load->view('header/Menu_user_v', $datos);
				$this->load->view('administrador/Login_admin_v',$datos);
				$this->load->view('footer/footer_v');
        	}else{
        		redirect(base_url());
        	}
		}else{
	    	redirect(base_url());
	    }
	}
	
	/**
	 * 
	 * @author Cecilia Hernandez Vasquez
	 * @return lista con los temas del mes
	 * @param NA
	 * @version 1.0
	 */
	public function tema_mes(){
		$temas = $this->Home_admin_m->tema_mes();
		$mes = $this->etiquetas->meses();
		for($i=0;$i<count($temas);$i++){
			$temas[$i]['mounth'] =$mes[$temas[$i]['mounth']];
		}
		return $temas;
	}
	
	/**
	 * 
	 * @author Cecilia Hernandez Vasquez
	 * @return lista con los temas del mes
	 * @param NA
	 * @version 1.0
	 */
	function actualizar_calendarioEsc(){
		
	}
	
	/**
	 * 
	 * @author Cecilia Hernandez Vasquez
	 * @return mensaje de Error u exito dependiendo de lo que pase.
	 * @param NA
	 * @version 1.0
	 */
	function guardar_calendario(){
		$ruta = "statics/files/calendario_uam";
		$mensaje = "";
		$total =3;
		$cont=count($_FILES);

		if(count($_FILES)< 3){
			$mensaje= "Se requiere un total de 3 archivos";
		}

		if(count($_FILES )>3){
			$mensaje= "EL nùmero de archivos es mayor a 3";
		}
		if (count($_FILES )== 3){
			$i=0;
			foreach ($_FILES as $key) {
				if ($key['error'] == UPLOAD_ERR_OK) {
					$type = explode( '/', $key['type'] );
					if(is_uploaded_file($_FILES['archivo'.$i]['tmp_name'])){
						copy($_FILES['archivo'.$i]['tmp_name'], $ruta.".".$type[1]); 
						$i++;
						$mensaje= "Se subio el archivo";
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
		}
		echo $mensaje;
	}

	
	/**
	 * 
	 * @author Cecilia Hernandez Vasquez
	 * @return lista con los temas del mes
	 * @param NA
	 * @version 1.0
	 */
	
	public function editor_tema(){
		$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){     
        	$type_user = $this->session->userdata('type_user');
        	if($type_user == 1 || $type_user == 2){
        		$datos['temas'] = $this->tema_mes();
				
				$datos["user_log"][0] = $this->session->userdata('user');
		        $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
		        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
				$id_tema =  $_GET['id_tema'];
				$temas = $this->Home_admin_m->tema_mes($id_tema);

				$this->load->view('header/head_v');
				$this->load->view('header/Menu_user_v', $datos);
				$this->load->view('administrador/Editor_tema_mes_v',$temas);
				$this->load->view('footer/footer_v');
        	}else{
        		redirect(base_url());
        	}
		}else{
	    	redirect(base_url());
	    }
	}
	
	/**
	 * 
	 * @author Cecilia Hernandez Vasquez
	 * @return lista con los temas del mes
	 * @param NA
	 * @version 1.0
	 */
	
	public function update_tema(){
		if ($_FILES!=NULL) {
			$ruta = "statics/img/calendario_uam/";
			$mensaje = "";
			echo "<pre>";
			print_r($_FILES);
			echo "</pre>";
			if ($_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
				//$Nombre_Original = $_FILES['name'];
				$Temporal = $_FILES['imagen']['tmp_name'];
				$image = 'statics/img/tema_mes/'.$_FILES['imagen']['name'];

				move_uploaded_file($Temporal, $image);
				$id_tema = $this->input->post('id_monthly_theme');
				$id_mes = $this->input->post('id_monthly_theme');
				$titulo = $this->input->post('title');
				$descripcion = $this->input->post('description');
				
				
				$datos = array( 'id_monthly_theme' => $id_tema,
								'mounth' => $id_mes,
								'title' => $titulo,
								'description' => $descripcion,
								'image' => '/'.$image, );
				
				$update_editor=$this->Home_admin_m->actualizar_tema($datos);
				if ($update_editor) {
					echo "Actualizacion exitosa";
				} else {
					echo" Intentar mas tarde";
				}
			}
				if ($_FILES['imagen']['error']!= 0) {
					switch ($_FILES['imagen']['error']) {
					case UPLOAD_ERR_INI_SIZE:
						echo  "El archivo subido supera la directiva upload_max_filesize en php.ini";  
						break;

					case UPLOAD_ERR_FORM_SIZE:
						echo"El archivo subido supera la directiva MAX_FILE_SIZE que se especificó en el formulario HTM";
						break;

					case UPLOAD_ERR_PARTIAL:
						echo"El archivo subido sólo se cargó parcialmente";
						break;

					case UPLOAD_ERR_NO_FILE:
						echo"Ningun archivo fue subido";
					break;

					case UPLOAD_ERR_NO_TMP_DIR:
						echo"Falta una carpeta temporal";
					break;							

					case UPLOAD_ERR_CANT_WRITE:
						echo"Error al escribir el archivo en el disco";
					break;

					case UPLOAD_ERR_EXTENSION:
						echo"Archivo de carga detenido por extensión";
					break;

					default: 
						echo "Error desconocido en la carga"; 
						break; 
					}

				}
			//
			
		} else {
			$editor = $this->input->post('editor');
			$update_editor=$this->Home_admin_m->actualizar_tema($editor);
			if ($update_editor) {
				echo "Actualizacion exitosa";
			} else {
				echo" Intentar mas tarde";
			}
		}
		
	}
	
}