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
				$evaluacion = $this->db->SELECT('*')->FROM('evaluation')->or_where_in('id_subtopic',$subtemas)->GET();
				if ($evaluacion->num_rows() > 0) {
					return $evaluacion->result_array();
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
}

/* End of file Evaluation_m.php */
/* Location: ./application/models/Evaluation_m.php */