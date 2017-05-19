<?php

class Registro_usuario_c extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this -> load -> model('Registro_usuario_m');
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
		$datos['$unidades'] = $this->lista_uam();
		$this->load->view('header/head_v');
		$this -> load -> view('Registro_usuario_v');
		$this->load->view('footer/footer_v');		
	}
	
	/*
	 * 
	 * @author Cecilia Hernandez Vasquez
	 * @return NA
	 * @param NA
	 * @version 1.0
	 */
		public function lista_uam()
		{
			$uamis = $this->Registro_usuario_m->obtener_unidades_uam();
		}
	
	/**
	*Funcion para registrar los datos del usuario 
	*
	* 	
	* @author Cecilia Hernandez Vasquez 
	* @param Parámetros que recibe la función. Formato: [* @param tipo $nombre_var comentario]
	* @return Valor devuelto por la función. Formato: [* @return tipo comentario]
	* @version 1.0
	*/
	
	public function registrar_Usuario() {
		$registro = $this -> input -> post('datos');
		$id_registro = $this->Registro_usuario_m->registrar_usuario($registro);
		return $id_registro;

	}
	
	/**
	* Funcion que actuaiza el estatus de la cuenta
	* 
	*
	* @author Cecilia Hernandez Vasquez
	* @param 
	* @return Valor devuelto por la función. Formato: [* @return tipo comentario]
	* @version 1.0
	*/	
	
	public function activar_Cuenta(){
		$id_usuario = $_GET["id_usuario"]; 
		echo "id_usuario" . $id_usuario;
		//$id_registro = $this->Registro_usuario_m->activar_cuenta($id_usuario);
	}

}
