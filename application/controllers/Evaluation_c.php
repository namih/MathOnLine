<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluation_c extends CI_Controller
{
    private $questions;
    private $evaluation = array();
    private $id_theme;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Evaluation_m');
        $this->load->library('encrypt');
    }

    public function index()
    {

    }

    /**
     * Devuelve un arreglo de 15 preguntas de forma desordenada
     *
     * @author Osvaldo Gómez Alvarez
     * @return Mensaje de error o el arreglo
     * @param Via get, se recibe el id de la evaluacion
     * @version 1.0
     */
    public function get_evaluation($id){
        $datos['id_theme'] = $id;
        $login = $this->session->userdata('logged_in');

        if($login != null && $login == true){
            $datos["user_log"][0] = $this->session->userdata('user');
            $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
            $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
            $this->questions = $this->Evaluation_m->evaluacion($id);
            $datos['tema_eval']=$this->questions['tema'][0]['theme'];

            $this->questions = $this->questions['evaluacion'];

            if($this->questions != null || $this->questions != false){
                $evaluation = $this->one_question_by_subtopic();
                if(count($evaluation)<15){
                    $dif = 15 - count($evaluation);
                    $evaluation = $this->complete_evaluation($evaluation, $dif);
                }elseif (count($evaluation)>15){
                    array_splice($evaluation, 15);
                }
                shuffle($evaluation);
                $datos['preguntas_evaluacion']= $evaluation;
            }else{
                $datos['preguntas_evaluacion']= null;
            }

            $datos['opt_menu_active']='opt_evaluaciones';
            //$datos['theme'] =
            $this->load->view('header/head_v');
            $this->load->view('header/Menu_user_v', $datos);
            $this->load->view('menu_usuario/Evaluacion_tema_v', $datos);
            $this->load->view('footer/footer_v');
        }else{
            redirect(base_url());
        }
    }


    /**
     * Devuelve un arreglo con una pregunta diferente de cada subtopic
     *
     * @author Osvaldo Gómez Alvarez
     * @return Arreglo con evaluaciones
     * @param Sin parametros, la funcion es provada para que solo se pueda acceder desde la clase
     * @version 1.0
     */
    private function one_question_by_subtopic(){
        $subtopic = $this->questions[0]["id_subtopic"];
        $evaluation = [];
        $max = 0;
        $min = 0;
        foreach($this->questions as $question){
            $aux_subtopic = $question["id_subtopic"];
            if($aux_subtopic != $subtopic){
                $max--;
                $position = rand ($min, $max);
                $max++;
                $evaluation[] = $this->custom_question($this->questions[$position]);
                array_splice($this->questions, $position, 1);
                $min = $max;
                $subtopic = $aux_subtopic;
            }
            $max++;
        }
        $max = count($this->questions)-1;
        $position = rand ($min, $max);
        $evaluation[] = $this->custom_question($this->questions[$position]);
        array_splice($this->questions, $position, 1);
        return $evaluation;
    }


    /**
     * Completa el arreglo de preguntas para la evaluacion
     *
     * @author Osvaldo Gómez Alvarez
     * @return Arreglo con evaluaciones
     * @param Un arreglo con las preguntas de cada uno de los subtopics,
     * un entero para saber cuantas preguntas faltan para completar las 15
     * @version 1.0
     */
    private function complete_evaluation($evaluation, $dif){
        while($dif > 0){
            $position = rand (0, count($this->questions)-1);
            $evaluation[] = $this->custom_question($this->questions[$position]);
            $dif--;
        }
        return $evaluation;
    }

    private function custom_question($question){
        $question_custom = [];
        $i = 0;
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

    public function get_current_responses(){
    	
		date_default_timezone_set('America/Mexico_City');
		$format = 'Y-m-d h:i:s';
		
        $responses = $this->input->post('arrayResultado');
        $time = $responses['tiempo'];
        $evaluations = $responses["evaluacion"];
        $response_calculate = $this->calculate_results($evaluations);
        $total = $response_calculate['total'];
        $number_correct = $response_calculate['number_corrects'];
        $this->evaluation['id_user'] = $this->session->userdata('user_id');
        $this->evaluation['id_theme'] = 1;
        $this->evaluation['time_finish'] = $time;
        $this->evaluation['score'] = $total;
        $this->evaluation['evaluation_date'] = date($format);
        
        $response_evaluation = $this->Evaluation_m->guardar_evaluacion($this->evaluation);
        
        if($response_evaluation != FALSE || $response_evaluation != NULL){
            foreach ($evaluations as $evaluation) {
                $data[] = array(
                        'id_evaluation_test_log' => $response_evaluation ,
                        'id_evaluation' => $evaluation['id_evaluation'],
                        'answer' => $evaluation['answer_select']
                    );  
            }
            $response = $this->Evaluation_m->guardar_respuestas($data);
            if($response){
                $data = array(
                    'id_user' => $this->evaluation['id_user'],
                    'total_score' => $this->evaluation['score']
                );
                $response = $this->Evaluation_m->actualiza_escore($data);
                
                if($response){
                    echo "todo un exito";
                }else{
                    
                    echo "fracaso total :(";
                }
            }else{
                echo "fracaso en guardar respuestas";
            }
        }
        // id user y id de la evaluacion para obterner score mas alto
        //regresar un json con su puntuacion actual, el numero de preguntas correctas y las erroneas
        
    }

    private function calculate_results($evaluations){
    	
        $data["total"] = 0;
        $data["number_corrects"] = 0;
        foreach ($evaluations as $evaluation){
            if($evaluation["answer_is_correct"]){
                $data["total"] += $evaluation["points"];
                $data["number_corrects"]++;
            }
        }
        return $data;
    }
}
