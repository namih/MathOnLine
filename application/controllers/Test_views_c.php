<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_views_c extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Registro_usuario_m');
		
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function index(){
		$unidades = $this->Registro_usuario_m->obtener_unidades_uam();
		$datos = array('unidades' => $unidades );
		$this->load->view('header/head_v');
		$this->load->view('Registro_usuario_v', $datos);
		$this->load->view('footer/footer_v');
	}
}
