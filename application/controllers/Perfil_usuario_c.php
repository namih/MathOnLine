<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
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
		public function actualizar_perfil()
		{
				
				$registro = $this->input->post('datos');
				
				$encrypted = $this->encrypt->encode($registro['password']);
				$registro['password']=$encrypted;
				
				
				print_r($registro);
				//$registro['id_avatar']=;
				$id_registro = $this->Perfil_usuario_m->actualizar_perfil($registro);
				//$datos['user_log'] = $this->Perfil_usuario_m->actualizar_perfil($id_user);
				//si status es igual a cero entonces enviar correo de activacion
				
				//echo "$id_registro";
    }
    }
?>