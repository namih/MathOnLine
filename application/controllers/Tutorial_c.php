<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    class Tutorial_c extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Perfil_usuario_m');//cambiar modelo
            $this->load->library('encrypt');
        }

        function load_tutorial_content($id_tutorial = null){
            //menu usuario
            $datos["user_log"][0] = $this->session->userdata('user');
            $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
            $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
            $datos['opt_menu_active']='opt_tutoriales';


            //contenido tutorial
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

}
?>