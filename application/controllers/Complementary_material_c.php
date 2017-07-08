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
       $datos['bibliografia'] = $this ->bibliografia();
	   $datos['link'] = $this ->links();
	   //$this->load->model('Complementary_material_v',$datos);
	   $this->load->view('header/head_v');
		$this->load->view('/usuarios/Material_complementario_v',$datos);
    	$this->load->view('footer/footer_v');
    }
	
	/**
	 * Funcion para obtener las bibliografias almacenadas en BD
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */	
	
	public function bibliografia(){
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
			$links = $this->Complementary_material_m->lista_links();
			return $links;
			
		}

}


