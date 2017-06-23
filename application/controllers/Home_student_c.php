<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_student_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_student_m');
    }

    public function get_all_tutorial(){
        $tutoriales = $this->Home_student_m->lista_tutoriales();
    }

    public function tutorial_by_user_id(){
        echo "<pre>";
        print_r($this->session->all_userdata());
        echo "</pre>";
    }

    public function perfil_usuario(){

    }

    public function material_complementario(){
        
    }
}