<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Home_c extends CI_Controller
	{
    public function __construct()
    {
		parent::__construct();
    }
	public function Perfil_usuario($id_user = null)
	{
		if ($id_usuario != null){
			$perfil = $this->Perfil_usuario_m->datos_usuario($id_user);
			return $perfil;
		} else {
			return false;
		}
	}
    }
?>