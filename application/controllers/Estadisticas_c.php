<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estadisticas_c extends CI_Controller {
			
		public function __construct() {
			parent::__construct();
			$this->load->model("Estadisticas_m");
        }
		
		public function index() {
			$login = $this->session->userdata('logged_in');
			if($login != null && $login == true) {
				$datos["user_log"][0] = $this->session->userdata('user');
				$menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
				$best_evaluation = $this->Estadisticas_m->best_evaluation($datos["user_log"][0]['id_user']);
				$datos['best_evaluation'] = $best_evaluation;
				$datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
				$datos['opt_menu_active']='opt_estadisticas';
				
				$this->load->view('header/head_v');
				$this->load->view('header/Menu_user_v', $datos);
				$this->load->view('menu_usuario/Estadisticas_v',$datos);
				$this->load->view('footer/footer_v');
			} else {
				redirect(base_url());
			}
		}	
}
