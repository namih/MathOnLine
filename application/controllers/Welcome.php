<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
		parent::__construct();
        $this->load->model('Home_m');
        $this->load->library('encrypt');
    }

	function index(){
		$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){
            redirect(base_url("/index.php/home_c/goHomeUser"));
        }else{
            $themes = $this->get_theme_month();
            $question_week = $this->Home_m->pregunta_semanal();
            $question_week = $this->custom_question($question_week[0]);
            $datos['themes'] = $themes;
            $datos['question_week'] = $question_week;

            $this->load->view('header/head_v');
            $this->load->view('inicio/Home_v', $datos);
            $this->load->view('footer/footer_v');
        }
	}

    private function custom_question($question){
        $question_custom = [];
        $i = 0;
        if(count($question) > 0){
            foreach ($question as $key => $value){
                if($key == "correct_answer"){
                    $question_custom["answers"][$i]["description"] = $value;
                    $question_custom["answers"][$i]["key"] = $key;
                    $question_custom["answers"][$i]["is_correct"] = 1;
                    shuffle($question_custom["answers"]);
                    $i++;
                }elseif ($key == "wrong_answer_a" || $key == "wrong_answer_b" || $key == "wrong_answer_c"){
                    $question_custom["answers"][$i]["description"] = $value;
                    $question_custom["answers"][$i]["key"] = $key;
                    $question_custom["answers"][$i]["is_correct"] = 0;
                    shuffle($question_custom["answers"]);
                    $i++;
                }else{
                    $question_custom[$key] = $value;
                }
            }
            return $question_custom;
        }
        return null;
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
}
