<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Estadisticas_m extends CI_Model {
			
		public function __construct() {
			parent::__construct();
		}
		
		public function best_evaluation($id_user = null) {
			if ($id_user != NULL) {
				$best_num = $this->db->SELECT('*')->FROM('evaluation_test_log')->ORDER_BY('score', 'DESC')->ORDER_BY('time_finish', 'ASC')->WHERE('id_user', $id_user)->WHERE('id_theme', 1)->GET();
				$best_algebra = $this->db->SELECT('*')->FROM('evaluation_test_log')->ORDER_BY('score', 'DESC')->ORDER_BY('time_finish', 'ASC')->WHERE('id_user', $id_user)->WHERE('id_theme', 2)->GET();
				$best_geo_tri = $this->db->SELECT('*')->FROM('evaluation_test_log')->ORDER_BY('score', 'DESC')->ORDER_BY('time_finish', 'ASC')->WHERE('id_user', $id_user)->WHERE('id_theme', 3)->GET();
				$best_geo_ana = $this->db->SELECT('*')->FROM('evaluation_test_log')->ORDER_BY('score', 'DESC')->ORDER_BY('time_finish', 'ASC')->WHERE('id_user', $id_user)->WHERE('id_theme', 4)->GET();
				$best['num'] = $best_num->row_array();
				$best['algebra'] = $best_algebra->row_array();
				$best['geo_tri'] = $best_geo_tri->row_array();
				$best['geo_ana'] = $best_geo_ana->row_array();
				return $best;
				
			} else {
				return NULL;
			}
			
		}
		
}

/* End of file Estadisticas_m.php */
/* Location: ./application/models/Estadisticas_m.php */