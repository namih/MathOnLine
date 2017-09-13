<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	class Perfil_usuario_c extends CI_Controller
	{
	    public function __construct()
	    {
			parent::__construct();
			$this->load->model('Perfil_usuario_m');
			$this->load->library('encrypt');
			$this -> load -> model('Registro_usuario_m');
	
	    }
		public function Perfil_usuario($id_user = null){
			$login = $this->session->userdata('logged_in');
	
	        if($login != null && $login == true){
			
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
			} else{
	            	redirect(base_url());
	        	}
			
		}
		
		public function actualizar_perfil()
		{
			$login = $this->session->userdata('logged_in');

        	if($login != null && $login == true){
				$registro = $this->input->post('datos');
				$encrypted = $this->encrypt->encode($registro['password']);
				$registro['password']=$encrypted;
				
				
				$id_registro = $this->Perfil_usuario_m->actualizar_perfil($registro);
			
				
				if ($id_registro['status']==0) {
					$this->envio_email($id_registro['id_user'], $id_registro['user_name'], $id_registro['email']);
					header('Location: ../home_c/logout');
				} else {
					print_r($id_registro);
				}
    		} else{
            	redirect(base_url());
        	}
    	}
		
		function envio_email($id_usuario,$usuario,$email){
		
			$configuracion = $this->conf_email->configuracion_email();
		    
			$datos_email = array('url' =>  base_url().'Registro_usuario_c/activar_cuenta?id_usuario='.$id_usuario,
							   'user_name' =>$usuario);
			
			echo "<pre>"; 
			print_r(base_url().'Perfil_usuario_c?id_usuario='.$usuario);
			echo "</pre>";
			$this->email->initialize($configuracion);
		   	$this->email->from('Activacion de la cuenta .....');
		   	$this->email->to($email);
		   	$this->email->subject('Activacion de la cuenta Mathonline');
		   	$this->email->message($this -> load -> view('/email/activacion_cuenta',$datos_email,TRUE)); //$datos enviar a vista
		   
		   	if($this->email->send()){
	       	    return TRUE;
	            echo "Email enviado correctamente";
	        }else{
	          	return FALSE;
				echo "No se a enviado el email";
	        }
		}
}
?>