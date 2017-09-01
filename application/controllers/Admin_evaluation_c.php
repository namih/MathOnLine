<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	error_reporting(E_ERROR);

	class Admin_evaluation_c extends CI_Controller {
			
		public function __construct() {
			parent::__construct();
			$this->load->model("Evaluation_m");
        }
		
		public function index()
		{
			$login = $this->session->userdata('logged_in');
	        if($login != null && $login == true){
		        $datos['temas'] = $this->Evaluation_m->temas();
			   			    
			    $datos["user_log"][0] = $this->session->userdata('user');
			    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
		        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
		        $datos['opt_menu_active']='opt_materiales';
	
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
}
