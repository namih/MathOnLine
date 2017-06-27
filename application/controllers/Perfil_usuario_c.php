<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Perfil_usuario_c extends CI_Controller
	{
    public function __construct()
    {
		parent::__construct();
		$this->load->model('Perfil_usuario_m');
    }
	public function perfil_usuario($id_user = null)
	{
		if ($id_user != null){
			$perfil = $this->Perfil_usuario_m->datos_usuario($id_user);
			return $perfil;
		} else {
			return false;
		}
	}
    }
?>