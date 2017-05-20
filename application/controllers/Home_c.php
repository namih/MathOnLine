<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_c extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
        $this->load->model('Home_m');
    }

    public function index(){

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
}
