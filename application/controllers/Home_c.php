<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_c extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
        $this->load->model('Home_m');
        $this->load->model('Home_student_m');
        $this->load->library('encrypt');
    }

    public function index(){
        $this->load->view('header/head_v');
        $this->load->view('inicio/Home_v');
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
            $user = $this->Home_m->recuperar_pass($email);
            if($user == 0){
                $error_recover_pass = "El correo electronico no esta registrado";
                echo $error_recover_pass;
            }else{
                $user["password"] = $this->decode_pass($user["password"]);
                $email = $this->send_email($email, $user);
                if($email){
                    echo "Su informacion fue enviada a su correo";
                }else{
                    echo "No se a enviado el email, intente mas tarde";
                }
            }
        }
        return;
    }

    /**
     * Descripcion
     *
     * @author Osvaldo Gómez Alvarez
     * @return true o false
     * @param Via post, se recibe el email y la informacion del usuario para recuperar contraseña
     * @version 1.0
     */
    function send_email($email, $user){

        $configuracion = $this->conf_email->configuracion_email();
        $this->email->initialize($configuracion);
        $this->email->from('Mate en linea');
        $this->email->to($email);
        $this->email->subject('Recuperar contraseña');
        $this->email->message("Su usuario es: ".$user["user_name"]."<br>Su contraseña es: ".$user["password"]);

        if($this->email->send()){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * Descripcion
     *
     * @author Osvaldo Gómez Alvarez
     * @return Error o te muestra la vista de estudiante en sesion
     * @param Via post, se recibe user_name y password
     * @version 1.0
     */
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

    /**
     * Descripcion
     *
     * @author Osvaldo Gómez Alvarez
     * @return Password decodificado
     * @param Recibe password
     * @version 1.0
     */
    private function decode_pass($pass){
        return $this->encrypt->decode($pass);
    }

    /**
     * Destruye la sesion
     *
     * @author Osvaldo Gómez Alvarez
     * @return
     * @param
     * @version 1.0
     */
    public function logout(){
        echo "sesion cerrada";
        $this->session->sess_destroy();
        redirect(base_url(), 'refresh');
    }


    /**
     * carga la vista del usuario
     *
     * @author Osvaldo Gómez Alvarez
     * @return La vista del usuario
     * @param Recibe un arreglo que contiene la informacion del usuario
     * @version 1.0
     */
    private function goHomeUser($user){
        $datos["user_log"] = $user;
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


                $ket_tutorial_studen = array_search($all_themes[$key_tutorial]["id_tutorial"], array_column($themes_student, 'id_tutorial'));
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
        $this->load->view('header/head_v');
        $this->load->view('header/Menu_user_v', $datos);
        $this->load->view('login/Sesion_user_v', $datos);
        $this->load->view('footer/footer_v');
    }
}
