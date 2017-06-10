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

    /*public function index(){
        $this->load->view('header/head_v');
        $this->load->view('inicio/Home_v');
        $this->load->view('footer/footer_v');
    }*/

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
            $this->goHomeUser($user);
        }else{
            switch ($user){
                case 2:
                    echo "<script type='text/javascript'> alert('No existe el usuario'); history.go(-1)</script>";
                    break;
                case 3:
                    echo "<script type='text/javascript'> alert('No existe'); history.go(-1)</script>";
                    break;
                case 4:
                    echo "<script type='text/javascript'> alert('Cuenta inactiva'); history.go(-1)</script>";                    
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

    private function goHomeUser($user){
        $datos["user_log"] = $user;
        //Todo lo siguiente se tiene que mandar en el arreglo de datos
        //traer temas todos
        //traer los temas cubiertos por el usuario
        //formar un arreglo de la siguiente forma:
        /*
            -tema
                --Subtemas
                    ---Tutoriales

            En tutorial necesitamos :
            -id
            -Nombre
            -Concluido (0,1) (0 cuando el usuario no ah realizado el tutorial, 1 cuando si)

        El arreglo global se llamara $temas
        */

        $temas = array(
            "nombre" => "Tema 1",
            "Subtemas" => array(
                [
                    "nombre" => "Sub tema 1"
                    "tutoriales" => array(
                        [
                            "id" => 1,
                            "nombre" => "tutorial 1",
                            "concluido" => 0,
                        ]
                        [
                            "id" => 2,
                            "nombre" => "tutorial 2",
                            "concluido" => 1,
                        ]
                    )
                ],

                [
                    "nombre" => "Sub tema 2"
                    "tutoriales" => array(
                        [
                            "id" => 3,
                            "nombre" => "tutorial 3",
                            "concluido" => 0,
                        ],
                        [
                            "id" => 4,
                            "nombre" => "tutorial 4",
                            "concluido" => 1,
                        ]
                    )
                ]
            )
        );
        $this->load->view('header/head_v');
        $this->load->view('header/Menu_user_v', $datos);
        $this->load->view('login/Sesion_user_v', $datos);
        $this->load->view('footer/footer_v');
    }
}
