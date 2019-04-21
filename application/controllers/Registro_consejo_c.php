<?php

class Registro_consejo_c extends CI_Controller {

	public function __construct() {
		parent::__construct();
			$this->load->library('encryption');
			$this -> load -> model('Registro_consejo_m');
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

	// public function index() {
		// $datos['unidades'] = $this->lista_uam();
		// $this->load->view('header/head_v');
		// $this -> load -> view('administrador/Registro_consejo_v',$datos);
		// $this->load->view('footer/footer_v');
	// }
	public function index()
	{
		$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){
		    $datos["user_log"][0] = $this->session->userdata('user');
		    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
	        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];



			$datos['opt_menu_active']='opt_admin_alta';
			$datos['unidades'] = $this->lista_uam();
		    $this->load->view('header/head_v');
		    $this->load->view('header/Menu_user_v', $datos);
			$this->load->view('administrador/Registro_consejo_v',$datos);
	    	$this->load->view('footer/footer_v');
	    }else{
	    	redirect(base_url());
	    }
	}

	/**
	 *
	 * @author Cecilia Hernandez Vasquez
	 * @return lista con las unidades existentes en la BD
	 * @param NA
	 * @version 1.0
	 */
		public function lista_uam(){
			$uamis = $this->Registro_consejo_m->obtener_unidades_uam();
			return $uamis;
		}


	/**
	 * Funcion para validar si el nombre de usuario ya se encuentra en registrado
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */
	public function nombre_usuario_disponible(){
		$username = $this->input->post('datos');

		$valida_usuario=$this->Registro_consejo_m->validar_usuario($username['user_name']);

		if ($valida_usuario == TRUE) {
			echo "NO";
		} else {
			echo "SI";
		}
	}

	/**
	 * Funcion para validar si el nombre de usuario ya se encuentra en registrado
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */
	public function correo_usuario_disponible(){
		$correo_user = $this->input->post('datos');

		$valida_correo=$this->Registro_consejo_m->validar_correo($correo_user['email']);

		if ($valida_correo == TRUE) {
			echo "NO";
		} else {
			echo "SI";
		}
	}

	/**
	*Funcion para registrar los datos del usuario
	*
	*
	* @author Cecilia Hernandez Vasquez
	* @param Parámetros que recibe la función. Formato: [* @param tipo $nombre_var comentario]
	* @return id_usuario si el registro se realizo, en otro caso un msj de acuerdo si existe registro del nombre del usuario o email
	* @version 1.0
	*/
	public function registrar_consejo() {

		date_default_timezone_set('America/Mexico_City');
		$format = 'Y-m-d h:i:s';
		$type_user = $this->etiquetas->type_user();
		$registro = $this -> input -> post('datos');
		$registro['type_user']= $type_user['CCC'];
		$registro['registration_date']=date($format);
		$encrypted = $this->encryption->encrypt($registro['password']);
		$registro['password']=$encrypted;
		$registro['id_degree'] = 1;
		$registro['is_employed'] = 1;
		$registro['status'] = 1;
		if ($registro['sex']==1) {
			$registro['id_avatar']=17;
		} else {
			$registro['id_avatar']=26;
		}
		//print_r($registro);
		$id_registro = $this->Registro_consejo_m->registrar_consejo($registro);
	}
}
