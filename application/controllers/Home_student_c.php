<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_student_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_student_m');
        $this->load->model('Perfil_usuario_m');
    }

    public function get_all_tutorial(){
        $tutoriales = $this->Home_student_m->lista_tutoriales();
    }

    public function tutorial_by_user_id(){
        $session = $this->session->all_userdata();
        echo "<pre>";
        print_r($session['user']['id_user']);
        echo "</pre>";
    }

    public function perfil_usuario(){
        $session = $this->session->all_userdata();
        $user_log = $this->Perfil_usuario_m->datos_usuario($session['user']['id_user']);
        echo "<pre>";
        print_r($user_log);
        echo "</pre>";
    }

    public function material_complementario(){
        
    }
}