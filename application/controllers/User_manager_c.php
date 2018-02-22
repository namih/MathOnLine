<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ERROR);

class User_manager_c extends CI_Controller {
		
	public function __construct() {
			parent::__construct();
			$this->load->model("User_manager_m");
        }
		
		public function administrador()
		{
			$login = $this->session->userdata('logged_in');
	        if($login != null && $login == true){
	        			    
			    $datos["user_log"][0] = $this->session->userdata('user');
			    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
		        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
		        $datos['opt_menu_active']='opt_admin_users';
	
			    $this->load->view('header/head_v');
			    $this->load->view('header/Menu_user_v', $datos);
				$this->load->view('administrador/User_manager_v');
		    	$this->load->view('footer/footer_v');
		    }else{
		    	redirect(base_url());
		    }
		}
		
		public function usuarios()
		{
			$datos = $this->input -> post('datos');
			$type_user = $datos['type_user'];
			$usuarios = $this->User_manager_m->get_usuarios($type_user);	
			if ($subtema == FALSE) {
				echo "No hay usuarios registrados con el perfil seleccionado.";
			} else {
				echo json_encode($usuarios);
			}
		}
		
	}
