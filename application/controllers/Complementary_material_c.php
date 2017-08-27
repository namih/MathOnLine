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
	
	/**
	 * Funcion para obtener las bibliografias almacenadas en BD
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */	
	
	public function bibliografia(){
	//pARA EDITAR VIA GET.	PARA MANDAR A LLAMAR VISTA  RETURN ECHO
			$biblio = $this->Complementary_material_m->lista_bibliografia();
			return $biblio;
		}
	
	/**
	 * Funcion para obtener los links de los temas 
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */	
	
	
	public function links(){
		//pARA EDITAR VIA GET.	PARA MANDAR A LLAMAR VISTA RETURN ECHO
			$links = $this->Complementary_material_m->lista_links();
			return $links; 
			
		}
	
	//METODOS PARA ACTUALIZAR LINK Y BIBLIOGRAFIA(CUENTA CON IMAGEN) 
	
	//BORRADO LOGICO (ELIMINAR) RETURN TRUE OR FALSE ECHO
}


