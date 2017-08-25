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
	function actualizarCalendarioEsc(){
		
	}
	
	function guardarCalendario(){
		
	}
	
	/**
	 * 
	 * @author Cecilia Hernandez Vasquez
	 * @return lista con los temas del mes
	 * @param NA
	 * @version 1.0
	 */
	
	public function editor_tema(){
		$id_tema =  $_GET['id_tema'];
		$temas = $this->Home_admin_m->tema_mes($id_tema);
		$this->load->view('header/head_v');
		$this->load->view('administrador/Editor_tema_mes_v',$temas);
		$this->load->view('footer/footer_v');
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
        $update_editor=$this->Home_admin_m->actualizar_tema($editor);
		if ($update_editor) {
			echo "Actualizacion exitosa";
		} else {
			echo" Intentar mas tarde";
		}
	}
	
}