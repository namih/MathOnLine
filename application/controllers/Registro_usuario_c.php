<?php

class Registro_usuario_c extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('Registro_usuario_m');
		//$this->load->library('email');
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
	
	public function index() {
		$datos['unidades'] = $this->lista_uam();
		$this->load->view('header/head_v');
		$this -> load -> view('Registro_usuario_v',$datos);
		$this->load->view('footer/footer_v');		
	}
	
	/**
	 * 
	 * @author Cecilia Hernandez Vasquez
	 * @return lista con las unidades existentes en la BD	
	 * @param NA
	 * @version 1.0
	 */
		public function lista_uam(){
			$uamis = $this->Registro_usuario_m->obtener_unidades_uam();
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
		
		$valida_usuario=$this->Registro_usuario_m->existe_usuario($username['user_name']);
		
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
		
		$valida_correo=$this->Registro_usuario_m->validar_correo($correo_user['email']);
		
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
	public function registrar_usuario() {
		date_default_timezone_set('America/Mexico_City');
		$format = 'Y-m-d h:i:s';
		
		$registro = $this -> input -> post('datos');
		$registro['type_user']=2;
		$registro['registration_date']=date($format);
		
			$id_registro = $this->Registro_usuario_m->registrar_usuario($registro);
			//return $id_registro;
			if ($id_registro != null) {
				return $this->envio_email($id_registro,$registro['user_name']);
			} else {
				return false;
			}	
	}
	
	/**
	*Funcion para enviar un correo al usuario para la activacion de la cuenta
	*
	* 	
	* @author Cecilia Hernandez Vasquez 
	* @param id_usuario identificador con el que se registro en la base datos, $usuario nombre de usuario
	* @return TRUE si el envio fue exitoso FALSE en caso contrario.
	* @version 1.0
	*/
	function envio_email($id_usuario,$usuario){
		
		$usuario=123;
		$configuracion = $this->conf_email->configuracion_email();
	    
		$datos = array('url' =>  base_url().'Registro_usuario_c/activar_cuenta?id_usuario='.$id_usuario,
						   'usuario' =>$usuario);
		
		echo "<pre>"; 
		print_r(base_url().'Registro_usuario_c?id_usuario='.$usuario);
		echo "</pre>";
		$this->email->initialize($configuracion);
		   
	   $this->email->from('Bienvenido a matematicas .....');
	   $this->email->to('ceciferch@gmail.com');
	   $this->email->subject('Activacion de la cuenta Mathonline');
	   $this->email->message('Hola mathonline'.base_url().'/Registro_usuario_c'.$usuario); //$datos enviar a vista
	   
	   if($this->email->send()){
           return TRUE;
            echo "Email enviado correctamente";
        }else{
          	return FALSE;
			echo "No se a enviado el email";
        }
	}
	
	
	
	
	
	/**
	* Funcion que actuaiza el estatus de la cuenta
	* 
	*
	* @author Cecilia Hernandez Vasquez
	* @param NA
	* @return Boolean TRUE si la cuenta fue activada correctamente o FALSE si la cuenta no existe o ya esta activa
	* @version 1.0
	*/	
	
	public function activar_cuenta(){
		$id_usuario = $_GET["id_usuario"]; 
		$activacion = $this->Registro_usuario_m->activar_cuenta($id_usuario);
		return $activacion;
	}

}
