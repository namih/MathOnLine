<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_c extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
        $this->load->model('Home_m');
        $this->load->library('encrypt');
    }

    public function index(){
        $themes = $this->get_theme_month();
        $datos=Array(
            'temas' => $themes
        );
        $this->load->view('header/head_v');
        $this->load->view('inicio/Home_v', $datos);
        $this->load->view('footer/footer_v');
    }

    /**
     * Descripcion
     *
     * @author Osvaldo Gómez Alvarez
     * @return Error o mensaje de que fue enviado el correo
     * @param Via post, se recibe el email
     * @version 1.0
     */
    public function recover_pass(){
        $email = $this->input->post('email-user');
        if($email != null){
            $pass = $this->Home_m->recuperar_pass($email);
            if($pass == 0){
                $error_recover_pass = "El correo electronico no esta registrado";
                echo $error_recover_pass;
            }else{
                /*aqui mandas correo para enviar el password*/
                echo "Su password fue enviado a su correo";
            }
        }
        return;
    }

    /**
     * Descripcion
     *
     * @author Osvaldo Gómez Alvarez
     * @return Los temas en casi de que no se hayan encontrado temas se retorna false
     * @param -
     * @version 1.0
     */
    public function get_theme_month(){
        $mes['actual'] = date('n');
        $months = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
        if($mes['actual'] == 12){
            $mes['siguiente'] = 1;
        }else{
            $mes['siguiente'] = $mes['actual'] + 1;
        }
        if($mes['actual'] == 1){
            $mes['anterior'] = 12;
        }else{
            $mes['anterior'] = $mes['actual'] - 1;
        }
        $themes = $this->Home_m->tema_mes($mes);

        if($themes!=false){
            for($i=0; $i<count($themes); $i++){
                $themes[$i]['mes'] = $months[$themes[$i]['mounth']-1];
            }
        }
        return $themes;
    }

    public function login(){
        $credencial['username'] = $this->input->post('username-user');
        $credencial['password'] = $this->input->post('password-user');
        //$credencial['password'] = $this->encrypt->encode($this->input->post('password-user'));
        $login = $this->Home_m->iniciar_sesion($credencial);
        if($login == 1){
            $data_session = array(
                "logged_in" => true
            );
            $this->session->set_userdata($data_session);
            print_r($login);
        }else{
            switch ($login){
                case 2:
                    print_r("No existe el usuario");
                    break;
                case 3:
                    print_r("No existe");
                    break;
                case 4:
                    print_r("Cuenta inactiva");
            }
        }
    }

    public function prueba_decode(){
        $pass = $this->encrypt->encode("123");
        print_r($this->decode_pass($pass));
    }

    private function decode_pass($pass){
        return $this->encrypt->decode($pass);
    }
}
