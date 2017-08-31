<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Complementary_material_c  extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
        $this->load->model('Complementary_material_m');
    }

    public function index(){
    	$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){
	        $datos['bibliografia'] = $this ->bibliografia();
		    $datos['ligas_interes'] = $this ->links();
		    
		    $datos["user_log"][0] = $this->session->userdata('user');
		    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
	        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
	        $datos['opt_menu_active']='opt_materiales';

		    $this->load->view('header/head_v');
		    $this->load->view('header/Menu_user_v', $datos);
			$this->load->view('menu_usuario/Material_complementario_v',$datos);
	    	$this->load->view('footer/footer_v');
	    }else{
	    	redirect(base_url());
	    }
    }
	
	
	function cargar_administrador(){
		$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){
	        $datos['bibliografia'] = $this ->bibliografia();
		    $datos['ligas_interes'] = $this ->links();
		    
		    $datos["user_log"][0] = $this->session->userdata('user');
		    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
	        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
	        $datos['opt_menu_active']='opt_materiales';

		    $this->load->view('header/head_v');
		    $this->load->view('header/Menu_user_v', $datos);
			$this->load->view('administrador/Admin_material_v',$datos);
	    	$this->load->view('footer/footer_v');
	    }else{
	    	redirect(base_url());
	    }
	}
		
	
	/**
	 * Funcion para obtener mostrar la vista de editor de la bibliografia
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */	
	 function editor_biblio (){
		$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){
		    $datos["user_log"][0] = $this->session->userdata('user');
		    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
	        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
	       // $datos['opt_menu_active']='opt_materiales';
			$biblio = $this->Complementary_material_m->lista_bibliografia(1);
		    $this->load->view('header/head_v');
		    $this->load->view('header/Menu_user_v', $datos);
			$this->load->view('administrador/Editor_bibliografia_v',$biblio);
	    	$this->load->view('footer/footer_v');
	    }else{
	    	redirect(base_url());
	    }
		
	}
	
	
	
	/**
	 * Funcion para obtener mostrar la vista de editor de la bibliografia
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */	
	 function editor_links (){
		$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){
		    $datos["user_log"][0] = $this->session->userdata('user');
		    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
	        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
	       // $datos['opt_menu_active']='opt_materiales';
			$links = $this->Complementary_material_m->lista_links(1);
		    $this->load->view('header/head_v');
		    $this->load->view('header/Menu_user_v', $datos);
			$this->load->view('administrador/Editor_liga_v',$links);
	    	$this->load->view('footer/footer_v');
	    }else{
	    	redirect(base_url());
	    }
		
	}
	
	
	/**
	 * Funcion para obtener mostrar la vista de editor de la bibliografia
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */	
	 function agregar_biblio (){
		$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){
		    $datos["user_log"][0] = $this->session->userdata('user');
		    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
	        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
	       // $datos['opt_menu_active']='opt_materiales';
			$biblio = $this->Complementary_material_m->lista_bibliografia(1);
		    $this->load->view('header/head_v');
		    $this->load->view('header/Menu_user_v', $datos);
			$this->load->view('administrador/Editor_bibliografia_v');
	    	$this->load->view('footer/footer_v');
	    }else{
	    	redirect(base_url());
	    }
		
	}
	
	/**
	 * Funcion para obtener mostrar la vista de editor de la bibliografia
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */	
	 function agregar_links (){
		$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){
		    $datos["user_log"][0] = $this->session->userdata('user');
		    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
	        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
	       // $datos['opt_menu_active']='opt_materiales';
			$links = $this->Complementary_material_m->lista_links(1);
		    $this->load->view('header/head_v');
		    $this->load->view('header/Menu_user_v', $datos);
			$this->load->view('administrador/Editor_liga_v',$links);
	    	$this->load->view('footer/footer_v');
	    }else{
	    	redirect(base_url());
	    }
		
	}
	
	/**
	 * Funcion para actualizar  las bibliografias almacenadas en BD
	 * @author Cecilia Hernandez Vasquez
	 * @return mensaje de error o de exito en caso de que se haya realizado la actualizacion.
	 * @param NA
	 * @version 1.0
	 */	
	
	public function actualizar_biblio(){
		// con imagen
	}
	
	/**
	 * Funcion para actualizar  las bibliografias almacenadas en BD
	 * @author Cecilia Hernandez Vasquez
	 * @return mensaje de error o de exito en caso de que se haya realizado la actualizacion.
	 * @param NA
	 * @version 1.0
	 */	
	
	public function actualizar_link(){
		$id_link = $this->input->post('link');
		$link = $this->Complementary_material_m->actualizar_link($id_link);
		if ($id_link) {
			echo "Actualizacion exitosa";
		} else {
			echo" Intentar mas tarde";
		}
	}
	
	
	/**
	 * Funcion para obtener los links de los temas 
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */		
	 function links(){
			$links = $this->Complementary_material_m->lista_links();
			return $links; 
			
		}
	
	FUNCTION bibliografia(){
		$biblio = $this->Complementary_material_m->lista_bibliografia();
		return $biblio;
		
	}
	//METODOS PARA ACTUALIZAR LINK Y BIBLIOGRAFIA(CUENTA CON IMAGEN) 
	
	//BORRADO LOGICO (ELIMINAR) RETURN TRUE OR FALSE ECHO
}


