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
		$datos['temas'] = $this->tema_mes();
		$this->load->view('header/head_v');
		$this->load->view('administrador/Login_admin_v',$datos);
		$this->load->view('footer/footer_v');
	}
	
	/**
	 * 
	 * @author Cecilia Hernandez Vasquez
	 * @return lista con los temas del mes
	 * @param NA
	 * @version 1.0
	 */
	public function tema_mes(){
		$temas = $this->Home_admin_m->lista_tema_mes();
		return $temas;
	}

	
	/**
	 * 
	 * @author Cecilia Hernandez Vasquez
	 * @return lista con los temas del mes
	 * @param NA
	 * @version 1.0
	 */
	
	public function editor_tema(){
		
		$temas = $this->Home_admin_m->lista_tema_mes();
		$datos['temas'] = $temas;
		$this->load->view('Editor_tema_mes_v',$datos);	
	}
	
	/**
	 * 
	 * @author Cecilia Hernandez Vasquez
	 * @return lista con los temas del mes
	 * @param NA
	 * @version 1.0
	 */
	
	public function update_tema(){
		
		$editor = $this->input->post('editor');
		$update_editor=$this->Home_admin_m->update_tema($editor);
		
	}
		
	
	
}