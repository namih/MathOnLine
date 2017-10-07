<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    class Tutorial_content_c extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model(array('Perfil_usuario_m','Tutorial_m'));//cambiar modelo
            $this->load->library('encrypt');
        }



        function load_tutorial_content($id_tutorial = null, $num_diapositiva = null, $id_blog = null,$btn_navegacion){
            //menu usuario
            $datos["user_log"][0] = $this->session->userdata('user');
            $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
            $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
            $datos['opt_menu_active']='opt_tutoriales';

            //iniciar tutorial
            if($id_blog==0){
                $datos['id_blog_actual']= $this->start_tutorial($id_tutorial);
            }else{
                $datos['id_blog_actual']=$id_blog;
            } 

            //guardar avance
            if($btn_navegacion==2){
                $save= $this->tutorial_progress($datos['id_blog_actual'], $num_diapositiva);
            }           

            // consulta en base el contenido tutorial

            $tutorials=$this->Tutorial_m->list_views($id_tutorial);
            if(isset($tutorials) && !empty($tutorials)){
                foreach ($tutorials as $key => $value) {
                  $datos['tutorial_content']['theme'] =$value['theme'];
                  $datos['tutorial_content']['subtopic'] = $value['subtopic'];
                  $datos['tutorial_content']['diapositivas'][$value['view_number']]['num_diapositiva'] = $value['view_number']; 
                  $datos['tutorial_content']['diapositivas'][$value['view_number']]['id_tutorial'] = $value['id_tutorial']; 
                  $datos['tutorial_content']['diapositivas'][$value['view_number']]['titulo'] = $value['tutorial'];               
                  $datos['tutorial_content']['diapositivas'][$value['view_number']]['vista'] = $value['name_view'];               
                }
                $last_diapo = end($datos['tutorial_content']['diapositivas']);
                $last_diapo_number=$last_diapo['num_diapositiva'];
            }else{
                $datos['tutorial_content']=false;
                $last_diapo_number=0;
            }


            if(!empty($datos['tutorial_content']['diapositivas'])){
                $actual=$num_diapositiva;
                if(isset($datos['tutorial_content']['diapositivas'][$num_diapositiva-1])){
                    $anterior=$num_diapositiva-1;
                }else{
                    $anterior='';
                }
                if(isset($datos['tutorial_content']['diapositivas'][$num_diapositiva+1])){
                    $siguiente=$num_diapositiva+1;
                }else{
                    $siguiente='';
                }
                $datos['paginador']=array(
                'anterior'=>$anterior,
                'actual'=>$actual, 
                'siguiente'=>$siguiente
                );

            }

            //hacer el load de la vista correspondiente
            $datos['diapositiva_actual']= $this->load->view('tutorial/'.$datos['tutorial_content']['diapositivas'][$num_diapositiva]['vista'],$datos,TRUE);
            //$datos['diapositiva_actual']= $this->load->view('tutorial/template_tutorial/Finish_tutorial_v',$datos,TRUE);
            if($last_diapo_number==$num_diapositiva){
                //cargar dos vistas en lugar de una. Se agrega la vista de finalizar
                $datos['diapositiva_actual'].=$this->load->view('tutorial/template_tutorial/Finish_tutorial_v',$datos,TRUE);//diapositiva de finalizar
            }
            $datos['id_tutorial'] = $id_tutorial;

            $this->load->view('header/head_v');
            $this->load->view('header/Menu_user_v', $datos);
            $this->load->view('tutorial/template_tutorial/Tutorial_content_v',$datos);
            $this->load->view('footer/footer_v');
        }


        function load_tutorial_content2($id_tutorial = null){
            //menu usuario
            $datos["user_log"][0] = $this->session->userdata('user');
            $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
            $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
            $datos['opt_menu_active']='opt_tutoriales';


            // consulta en base el contenido tutorial
            $datos['tutorial_content'] = array(
            'nombre_tutorial'=>'Enteros',
            'diapositivas'=>array(
                0=>array( 'id_tutorial'=>1, 'titulo'=>'Factorización', 'vista'=>'numeros/enteros/fact_d_1' ),
                1=>array( 'id_tutorial'=>2, 'titulo'=>'Números primos', 'vista'=>'numeros/enteros/num_d_2' ),
                2=>array( 'id_tutorial'=>3, 'titulo'=>'Mínimo común múltiplo y máximo común divisor', 'vista'=>'numeros/enteros/min_max_d_3' ),
                ),
            );

            if(!empty($datos['tutorial_content']['diapositivas'])){
                $anterior='';
                $actual=0;
                if(isset($datos['tutorial_content']['diapositivas'][1])){
                    $siguiente=1;
                }else{
                    $siguiente='';
                }
                $datos['paginador']=array(
                'anterior'=>$anterior,
                'actual'=>$actual,
                'siguiente'=>$siguiente
                );
            }

            $this->load->view('header/head_v');
            $this->load->view('header/Menu_user_v', $datos);
            $this->load->view('tutorial/template_tutorial/Tutorial_content_v',$datos);

            $this->load->view('footer/footer_v');
        }

        /**
        * Descripcion
        *
        * @author Julio Cesar Padilla Dorantes
        * @return
        * @param NA
        * @version 1.0
        */
        function start_tutorial($id_tutorial){
            $tutorial['id_tutorial'] = $id_tutorial;
            $user_log = $this->session->userdata('user');
            $tutorial['id_user']=$user_log['id_user'];

            if ($tutorial != NULL) {
                date_default_timezone_set('America/Mexico_City');
                $format = 'Y-m-d h:i:s';
                
                $tutorial['start_date'] = date($format);
                                
                $create = $this->Tutorial_m->create_tutorial($tutorial);
                if ($create != null) {
                    return $create;
                } else {
                    return FALSE;
                }
            } else {
                return NULL;
            }
        }

        /**
        * Descripcion
        *
        * @author Julio Cesar Padilla Dorantes
        * @return
        * @param NA
        * @version 1.0
        */
        function tutorial_progress($id_blog, $progress){
            $tutorial['id_blog_tutorials'] = $id_blog;
            $tutorial['progress'] = $progress;
            if ($tutorial != NULL) {
                $create = $this->Tutorial_m->update_progress($tutorial);
                if ($create != null) {
                    return TRUE;
                } else {
                    return FALSE;
                }
            } else {
                return NULL;
            }
        }

        /**
        * Descripcion
        *
        * @author Julio Cesar Padilla Dorantes
        * @return
        * @param NA
        * @version 1.0
        */
        function end_tutorial($id_blog_tutorial){
            if ($id_blog_tutorial != NULL) {
                date_default_timezone_set('America/Mexico_City');
                $format = 'Y-m-d h:i:s';
                
                $tutorial['id_blog_tutorials'] = $id_blog_tutorial;
                $tutorial['finish_date'] = date($format);
                $tutorial['status'] = 2;
                
                $create = $this->Tutorial_m->finish_tutorial($tutorial);
                if ($create != null) {
                    //return $create;
                    redirect(base_url().'/tutoriales');
                } else {
                    return FALSE;
                }
            } else {
                return NULL;
            }
        }        

}
?>