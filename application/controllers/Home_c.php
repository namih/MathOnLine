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
        echo "<pre>";
        print_r($this->session);
        echo "</pre>";
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
        $credencial['user_name'] = $this->input->post('username-user');
        $credencial['password'] = $this->input->post('password-user');
        $user = $this->Home_m->iniciar_sesion($credencial);
        if(isset($user[0]['id_user'])){
            $data_session = array(
                "logged_in" => TRUE,
                "user_id" => $user[0]["id_user"],
                "type_user" => $user[0]["type_user"],
            );
            $this->session->set_userdata($data_session);
            return TRUE;
        }else{
            switch ($user){
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
        $pass = $this->encrypt->encode("root");
        print_r($pass );
        echo "<br>";
        print_r($this->decode_pass("1rxKMj42HBeT3HHYpzQnU9pAL0jsG7mpegAjmCmTWK+eN55P0jcpebohu52R7lAPMMI+CSVX3wg0kGXRc4Gbeg=="));
    }

    private function decode_pass($pass){
        return $this->encrypt->decode($pass);
    }

    public function logout(){
        echo "sesion cerrada";
        $this->session->sess_destroy();
    }
}
