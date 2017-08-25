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

	    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
        $datos['opt_menu_active']='opt_usuario';
        
	    $this->load->view('header/head_v');
	    $this->load->view('header/Menu_user_v', $datos);
		$this->load->view('menu_usuario/Perfil_v', $datos);
    	$this->load->view('footer/footer_v');

	}
    }
?>