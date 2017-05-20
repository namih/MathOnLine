<?php

class Registro_usuario_c extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('Registro_usuario_m');
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
	*Funcion para registrar los datos del usuario 
	*
	* 	
	* @author Cecilia Hernandez Vasquez 
	* @param Parámetros que recibe la función. Formato: [* @param tipo $nombre_var comentario]
	* @return id_usuario si el registro se realizo, en otro caso un msj de acuerdo si existe registro del nombre del usuario o email
	* @version 1.0
	*/
	
	public function registrar_usuario() {
		$registro = $this -> input -> post('datos');
		
		$valida_usuario=$this->Registro_usuario_m->existe_usuario($registro['username']);
		$valida_correo=$this->Registro_usuario_m->validar_correo($registro['email']);
		
		if($valida_usuario == TRUE){
			return "El nombre de usuario ya se encuentra registrado";
		}
		if($valida_correo == TRUE){
			return "El correo ya se encuentra registrado";
		}
		if($valida_usuario == FALSE && $valida_correo == FALSE){
			$id_registro = $this->Registro_usuario_m->registrar_usuario($registro);
			return $id_registro;
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
