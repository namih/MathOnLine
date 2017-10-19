<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Evaluation_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
		}
		
		
		/**
		 * Obtiene los identificadores de los subtemas relacionados al tema del cual se desea hacer una evaluación
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array lista de identificadores de subtemas del tema solicitado
		 * @param Int Identificador del tema
		 * @version 1.0
		 */
		public function lista_subtemas($id_tema)
		{
			if ($id_tema!=NULL) {
				$subtemas = $this->db->SELECT('id_subtopic')->FROM('subtopic')->WHERE('id_theme', $id_tema)->GET();
				if ($subtemas->num_rows() > 0) {
					$id_subtema = array();
					foreach ($subtemas->result_array() as $key1 => $value1) {
						foreach ($value1 as $key2 => $value2) {
							array_push($id_subtema, $value2);
						}
					}
				return $id_subtema;					
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
		
		/**
		 * Obtiene todas las preguntas relacionadas al tema solicitado de todos los subtemas
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array lista de preguntas para hacer la evaluación
		 * @param Int Identificador del tema
		 * @version 1.0
		 */
		public function evaluacion($id_tema)
		{
			if ($id_tema!=NULL) {
				$subtemas = $this->lista_subtemas($id_tema);
				$tema = $this->db->SElECT('*')->FROM('theme')->WHERE('id_theme', $id_tema)->GET();
				$evaluacion = $this->db->SELECT('*')->FROM('evaluation')->or_where_in('id_subtopic',$subtemas)->GET();
				if ($evaluacion->num_rows() > 0) {
					$respuesta = array('evaluacion' => $evaluacion->result_array(), 'tema' => $tema->result_array());
					return $respuesta;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
		
		/**
		 * Obtiene ls lista de los temas del sistema
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array lista de los temas activos
		 * @param Int Identificador del tema
		 * @version 1.0
		 */
		public function temas()
		{
			$temas = $this->db->SELECT('*')->FROM('theme')->WHERE('status', 1)->GET();
			if ($temas->num_rows() > 0) {
				return $temas->result_array();
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Obtiene ls lista de los subtemas del sistema
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array lista de los temas activos
		 * @param Int Identificador del tema
		 * @version 1.0
		 */
		public function subtemas($tema)
		{
			if ($tema!= NULL) {
				$subtemas = $this->db->SELECT('*')->FROM('subtopic')->WHERE('status', 1)->WHERE('id_theme', $tema)->GET();
				if ($subtemas->num_rows() > 0) {
					return $subtemas->result_array();
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
		/**
		 * Obtiene todas las preguntas relacionadas al tema solicitado de todos los subtemas
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array lista de preguntas para hacer la evaluación
		 * @param Int Identificador del tema
		 * @version 1.0
		 */
		public function evaluacion_subtema($id_subtema)
		{
			if ($id_subtema!=NULL) {
				$evaluacion = $this->db->SELECT('*')->FROM('evaluation')->where('id_subtopic',$id_subtema)->WHERE('status', 1)->GET();
				if ($evaluacion->num_rows() > 0) {
					return $evaluacion->result_array();
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
		/**
		 * Guarda la evaluacion realizada por el usuario
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array lista de preguntas para hacer la evaluación
		 * @param Int Identificador del tema
		 * @version 1.0
		 */
		public function guardar_evaluacion($evaluacion)
		{
			if ($evaluacion!=NULL) {
				$this->db->SET($this->_setEvaluacion($evaluacion))->INSERT('evaluation_test_log');
				if ($this->db->affected_rows() === 1) {
					return $this->db->insert_id();
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
		/**
		 * Guarda las respuestas de la evaluacion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array lista de preguntas para hacer la evaluación
		 * @param Int Identificador del tema
		 * @version 1.0
		 */
		public function guardar_respuestas($respuestas)
		{
			if ($respuestas != NULL) {
				$num_respuestas = count($respuestas);
				$inserts = $this->db->insert_batch('evaluation_response', $respuestas);
				if ($inserts == $num_respuestas) {
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
		/**
		 * Actualiza el score total del usuario
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array lista de preguntas para hacer la evaluación
		 * @param Int Identificador del tema
		 * @version 1.0
		 */
		public function actualiza_escore($update)
		{
			if ($update!=NULL) {
				$this->db->WHERE('id_user', $update['id_user']);
				$this->db->SET('total_score', 'total_score +' .	(string)$update['total_score'], FALSE);
				$this->db->UPDATE('user');
				if($this->db->affected_rows() > 0) {
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
		
		/**
		 * Borrado logico (Baja) de una evaluacion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return TRUE si el borrado fue correcto, FALSE si ocurrio un error en el borrado
		 * @param INT Identificador del link
		 * @version 1.0
		 */
		 public function borrar_evaluacion($id_eva)
		 {
		 	if (!is_null($id_eva)) {
		 		$logical_erasure = array('status' => 0);
				$this->db->where('id_evaluation', $id_eva);
				$this->db->update('evaluation', $logical_erasure); 
				if ($this->db->affected_rows() === 1) {
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		 }
		 
		 
		 /**
		 * Actualiza un evaluación determinada
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return TRUE si fue satisfactoria la actualizacion, FALSE si ocurrio un error en la actualización
		 * @param ARRAY Datos a actualizar de la evaluación
		 * @version 1.0
		 */
		 public function actualizar_evaluacion($evaluacion)
		 {
		 	if (!is_null($evaluacion)) {
				$this->db->where('id_evaluation', $evaluacion['id_evaluation']);
				$this->db->update('evaluation', $evaluacion); 
				if ($this->db->affected_rows() === 1) {
					return 'TRUE';
				} else {
					return 'FALSE';
				}
			} else {
				return 'NULL';
			}
		 }
		 
		 /**
		 * Registra una nueva evaluacion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return INT identificar de la nueva evaluación, FALSE si ocurrio un error en el registro
		 * @param INT Identificador del link
		 * @version 1.0
		 */
		 public function nueva_evaluacion($evaluacion)
		 {
		 	if (!is_null($evaluacion)) {
		 		$this->db->SET($this->_setNewEvaluacion($evaluacion))->INSERT('evaluation');
				if ($this->db->affected_rows() === 1) {
					return $this->db->insert_id();
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		 }
		 
		  /**
		 * Obtiene los datos especificos de una evaluacion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array si encuentra los datos de la evaluacion solicitada, FALSE si no existe evaluacion con dicho identificador
		 * @param INT Identificador de la evaluación
		 * @version 1.0
		 */
		 public function get_evaluacion($id_evaluation)
		 {
		 	if ($id_evaluation!=NULL) {
				$evaluacion = $this->db->SELECT('*')->FROM('evaluation')->WHERE('id_evaluation',$id_evaluation)->GET();
				if ($evaluacion->num_rows() === 1) {
					$aux_array = $evaluacion->row_array();
					$out_array = str_replace('src="../', 'src="../../', $aux_array);
					return $out_array;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		 }
		 
		 private function _setNewEvaluacion($evaluacion)
		 {
		 	$set_new_evaluacion = array();
			
			if (isset($evaluacion['id_subtopic'])) {
				$set_new_evaluacion['id_subtopic'] =  $evaluacion['id_subtopic'];
			};
			if (isset($evaluacion['question'])) {
				$set_new_evaluacion['question'] =  $evaluacion['question'];
			};
			if (isset($evaluacion['correct_answer'])) {
				$set_new_evaluacion['correct_answer'] =  $evaluacion['correct_answer'];
			};
			if (isset($evaluacion['wrong_answer_a'])) {
				$set_new_evaluacion['wrong_answer_a'] =  $evaluacion['wrong_answer_a'];
			};
			if (isset($evaluacion['wrong_answer_b'])) {
				$set_new_evaluacion['wrong_answer_b'] =  $evaluacion['wrong_answer_b'];
			};
			if (isset($evaluacion['wrong_answer_c'])) {
				$set_new_evaluacion['wrong_answer_c'] =  $evaluacion['wrong_answer_c'];
			};
			if (isset($evaluacion['points'])) {
				$set_new_evaluacion['points'] =  $evaluacion['points'];
			};
			
			return $set_new_evaluacion;
		}
		
		
		private function _setEvaluacion($evaluacion)
		{
			$set_evaluacion = array();
			
			if (isset($evaluacion['id_user'])) {
				$set_evaluacion['id_user'] =  $evaluacion['id_user'];
			};
			if (isset($evaluacion['id_theme'])) {
				$set_evaluacion['id_theme'] =  $evaluacion['id_theme'];
			};
			if (isset($evaluacion['time_finish'])) {
				$set_evaluacion['time_finish'] =  $evaluacion['time_finish'];
			};
			if (isset($evaluacion['score'])) {
				$set_evaluacion['score'] =  $evaluacion['score'];
			};
			if (isset($evaluacion['evaluation_date'])) {
				$set_evaluacion['evaluation_date'] =  $evaluacion['evaluation_date'];
			};
			
			return $set_evaluacion;
		}
				
}

/* End of file Evaluation_m.php */
/* Location: ./application/models/Evaluation_m.php */