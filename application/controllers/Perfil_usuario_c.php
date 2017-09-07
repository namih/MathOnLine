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
		//$this->load->library('session');
		//$this->load->library('../controllers/Registro_usuario_c');
		//$this->usuario = new Registro_usuario_c();
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
				
				
				$id_registro = $this->Perfil_usuario_m->actualizar_perfil($registro);
				//$datos['user_log'] = $this->Perfil_usuario_m->actualizar_perfil($id_user);
				//si status es igual a cero entonces enviar correo de activacion
				
				
				if ($id_registro['status']==0) {
					$this->envio_email($id_registro['id_user'], $id_registro['user_name'], $id_registro['email']);
					$this->logout();
				} else {
					print_r($id_registro);
				}
    	}
		
		public function logout(){
        	echo "sesion cerrada";
			$ruta=base_url();
        	$this->session->sess_destroy();
			redirect(base_url(), 'refresh');
    	}
		
		function envio_email($id_usuario,$usuario,$email){
		
		$configuracion = $this->conf_email->configuracion_email();
	    
		$datos_email = array('url' =>  base_url().'Perfil_usuario_c/activar_cuenta?id_usuario='.$id_usuario,
						   'user_name' =>$usuario);
		
		echo "<pre>"; 
		print_r(base_url().'Perfil_usuario_c?id_usuario='.$usuario);
		echo "</pre>";
		$this->email->initialize($configuracion);
		   
	   $this->email->from('Bienvenido a matematicas .....');
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
		
		function activar_cuenta(){
		$id_usuario = $_GET["id_usuario"]; 
		$activacion = $this->Registro_usuario_m->activar_cuenta($id_usuario);
			if ($activacion == TRUE){
				$this->load->view('header/head_v');
				$this -> load -> view('Activacion_exitosa_v');
				$this->load->view('footer/footer_v');	
			}
			return $activacion;
		}
		
    }
?>