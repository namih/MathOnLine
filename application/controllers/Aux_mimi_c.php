<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aux_mimi_c extends CI_Controller
{
    public function __construct(){
		parent::__construct();
		$this->load->model(array('Home_student_m'));
    }
	
	function carga_tutoriales(){
        $all_themes = $this->Home_student_m->lista_tutoriales();
        $themes_student = $this->Home_student_m->tutoriales_usuario($this->session->userdata("user_id"));

        $i = 0;
        $aux_theme = "";
        $aux_subtopic = "";
        $aux_tutorial = "";
        $themes_aux = array();
        if(count($themes_student)>0){
            $themes_student = array();
        }   
        foreach ($all_themes as $theme){
            if($theme["theme"] != $aux_theme){
                $aux_theme = $theme["theme"];
                $key_theme = array_search($aux_theme, array_column($all_themes, 'theme'));
                $themes_aux[] = array(
                    "nombre" => $all_themes[$key_theme]["theme"],
                    "id_tema" => $all_themes[$key_theme]["id_theme"]
                );
                $i = count($themes_aux) - 1;
            }
            if($theme["subtopic"] != $aux_subtopic){
                $aux_subtopic = $theme["subtopic"];
                $key_subtopic = array_search($aux_subtopic, array_column($all_themes, 'subtopic'));
                $themes_aux[$i]["subtemas"][] = array(
                    "nombre" => $all_themes[$key_subtopic]["subtopic"],
                    "id_subtema" => $all_themes[$key_subtopic]["id_subtopic"]
                );
                $j = count($themes_aux[$i]["subtemas"]) - 1 ;

            }
            if($theme["tutorial"] != $aux_tutorial){
                $aux_tutorial = $theme["tutorial"];
                $key_tutorial = array_search($aux_tutorial, array_column($all_themes, 'tutorial'));


                if(count($themes_student)>0){
                    $ket_tutorial_studen = array_search($all_themes[$key_tutorial]["id_tutorial"], array_column($themes_student, 'id_tutorial'));
                }else{
                    $ket_tutorial_studen = null;
                }
                $concluido = 0;

                if(is_int($ket_tutorial_studen)){
                    $concluido = 1;
                }
                $themes_aux[$i]["subtemas"][$j]["tutoriales"][] = array(
                    "nombre" => $all_themes[$key_tutorial]["tutorial"],
                    "id_tutorial" => $all_themes[$key_tutorial]["id_tutorial"],
                    "concluido" => $concluido
                );
            }
        }
       
        $datos["temas"] = $themes_aux;

        $this->load->view('menu_usuario/Tutoriales_v', $datos);
	
	}

	function carga_panel_evaluaciones(){
		$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){
		    $datos["user_log"][0] = $this->session->userdata('user');
		    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
	        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];


	        $all_themes = $this->Home_student_m->lista_tutoriales();
	        $themes_student = $this->Home_student_m->tutoriales_usuario($this->session->userdata("user_id"));

	        $i = 0;
	        $aux_theme = "";
	        $aux_subtopic = "";
	        $aux_tutorial = "";
	        $themes_aux = array();
	        if(count($themes_student)>0){
	            $themes_student = array();
	        }   
	        foreach ($all_themes as $theme){
	            if($theme["theme"] != $aux_theme){
	                $aux_theme = $theme["theme"];
	                $key_theme = array_search($aux_theme, array_column($all_themes, 'theme'));
	                $themes_aux[] = array(
	                    "nombre" => $all_themes[$key_theme]["theme"],
	                    "id_tema" => $all_themes[$key_theme]["id_theme"]
	                );
	                $i = count($themes_aux) - 1;
	            }
	        }      
	        $datos["temas"] = $themes_aux;
			
			$datos['opt_menu_active']='opt_evaluaciones';
		    $this->load->view('header/head_v');
		    $this->load->view('header/Menu_user_v', $datos);
			$this->load->view('menu_usuario/Panel_evaluaciones_v', $datos);	    	
	    	$this->load->view('footer/footer_v');
	    }else{
	    	redirect(base_url());
	    }
	
	}

	function carga_evaluacion_tema($idTema){
		$datos['tema_eval']='Numeros';
		$datos['preguntas']=array(
			0=>array(
				'id_evaluacion'=>114,
				'id_subtopic'=>3,
				'question'=>'Si la densidad de un gas es....',
				'answers'=>array(
					0=>array(
						'descripcion'=>'3x107 litros',
						'key'=>'correct_answer',
						'is_correct'=>1
						),
					1=>array(
						'descripcion'=>'3x104 litros',
						'key'=>'wrong_answer',
						'is_correct'=>0
						),
					2=>array(
						'descripcion'=>'30x10.7 litros',
						'key'=>'wrong_answer',
						'is_correct'=>0
						),
					3=>array(
						'descripcion'=>'3x10.6 litros',
						'key'=>'wrong_answer',
						'is_correct'=>0
						),

					),
				'points'=>5,
				'estatus'=>1,
				),
			1=>array(
				'id_evaluacion'=>16,
				'id_subtopic'=>1,
				'question'=>'El diametro de la tierra mide aproximadamente...',
				'answers'=>array(
					0=>array(
						'descripcion'=>'13000 km',
						'key'=>'correct_answer',
						'is_correct'=>1
						),
					1=>array(
						'descripcion'=>'3000 km',
						'key'=>'wrong_answer',
						'is_correct'=>0
						),
					2=>array(
						'descripcion'=>'130 000 km',
						'key'=>'wrong_answer',
						'is_correct'=>0
						),
					3=>array(
						'descripcion'=>'17000 km',
						'key'=>'wrong_answer',
						'is_correct'=>0
						),

					),
				'points'=>15,
				'estatus'=>1,
				),
			);
		$this->load->view('menu_usuario/Evaluacion_tema_v', $datos);
	
	}

}/*END controller*/


