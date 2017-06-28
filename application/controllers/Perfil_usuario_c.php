<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Perfil_usuario_c extends CI_Controller
	{
    public function __construct()
    {
		parent::__construct();
		$this->load->model('Perfil_usuario_m');
    }
	public function Perfil_usuario($id_user = null)
	{
		if ($id_user != null){
			$datos['user_log'] = $this->Perfil_usuario_m->datos_usuario($id_user);
		} else {
			$datos['user_log']= false;
		}

		$this->load->view('usuarios/Perfil_v', $datos);

	}
    }
?>