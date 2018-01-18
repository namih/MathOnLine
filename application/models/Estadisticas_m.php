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

		public function count_tutorial() {
			$count_num = $this->db	->SELECT('*')
									->FROM('tutorial')
									->JOIN('subtopic', 'subtopic.id_subtopic = tutorial.id_subtopic')
									->JOIN('theme', 'theme.id_theme = subtopic.id_theme')
									->WHERE('theme.id_theme', 1)
									->WHERE('tutorial.status', 1)
									->COUNT_ALL_RESULTS();
			$count_algebra = $this->db	->SELECT('*')
									->FROM('tutorial')
									->JOIN('subtopic', 'subtopic.id_subtopic = tutorial.id_subtopic')
									->JOIN('theme', 'theme.id_theme = subtopic.id_theme')
									->WHERE('theme.id_theme', 2)
									->WHERE('tutorial.status', 1)
									->COUNT_ALL_RESULTS();
			$count_geo_tri = $this->db	->SELECT('*')
									->FROM('tutorial')
									->JOIN('subtopic', 'subtopic.id_subtopic = tutorial.id_subtopic')
									->JOIN('theme', 'theme.id_theme = subtopic.id_theme')
									->WHERE('theme.id_theme', 3)
									->WHERE('tutorial.status', 1)
									->COUNT_ALL_RESULTS();
			$count_geo_ana = $this->db	->SELECT('*')
									->FROM('tutorial')
									->JOIN('subtopic', 'subtopic.id_subtopic = tutorial.id_subtopic')
									->JOIN('theme', 'theme.id_theme = subtopic.id_theme')
									->WHERE('theme.id_theme', 4)
									->WHERE('tutorial.status', 1)
									->COUNT_ALL_RESULTS();
			$count_tuto['num'] = $count_num;
			$count_tuto['algebra'] = $count_algebra;
			$count_tuto['geo_tri'] = $count_geo_tri;
			$count_tuto['geo_ana'] = $count_geo_ana;

			return $count_tuto;
		}

		public function test(){
			return "Hola mundo";
		}

		public function end_tutorial($id_user=NULL) {
			if ($id_user != null) {
				$count_num = $this->db	->SELECT('*')
									->FROM('blog_tutorials')
									->JOIN('tutorial', 'tutorial.id_tutorial = blog_tutorials.id_tutorial')
									->JOIN('subtopic', 'subtopic.id_subtopic = tutorial.id_subtopic')
									->JOIN('theme', 'theme.id_theme = subtopic.id_theme')
									->WHERE('theme.id_theme', 1)
									->WHERE('blog_tutorials.id_user', $id_user)
									->WHERE('blog_tutorials.status',2)
									->GROUP_BY('blog_tutorials.id_tutorial')
									->GET();
				$count_algebra = $this->db	->SELECT('*')
									->FROM('blog_tutorials')
									->JOIN('tutorial', 'tutorial.id_tutorial = blog_tutorials.id_tutorial')
									->JOIN('subtopic', 'subtopic.id_subtopic = tutorial.id_subtopic')
									->JOIN('theme', 'theme.id_theme = subtopic.id_theme')
									->WHERE('theme.id_theme', 2)
									->WHERE('blog_tutorials.id_user', $id_user)
									->WHERE('blog_tutorials.status',2)
									->GROUP_BY('blog_tutorials.id_tutorial')
									->GET();
				$count_geo_tri = $this->db	->SELECT('*')
									->FROM('blog_tutorials')
									->JOIN('tutorial', 'tutorial.id_tutorial = blog_tutorials.id_tutorial')
									->JOIN('subtopic', 'subtopic.id_subtopic = tutorial.id_subtopic')
									->JOIN('theme', 'theme.id_theme = subtopic.id_theme')
									->WHERE('theme.id_theme', 3)
									->WHERE('blog_tutorials.id_user', $id_user)
									->WHERE('blog_tutorials.status',2)
									->GROUP_BY('blog_tutorials.id_tutorial')
									->GET();
				$count_geo_ana = $this->db	->SELECT('*')
									->FROM('blog_tutorials')
									->JOIN('tutorial', 'tutorial.id_tutorial = blog_tutorials.id_tutorial')
									->JOIN('subtopic', 'subtopic.id_subtopic = tutorial.id_subtopic')
									->JOIN('theme', 'theme.id_theme = subtopic.id_theme')
									->WHERE('theme.id_theme', 4)
									->WHERE('blog_tutorials.id_user', $id_user)
									->WHERE('blog_tutorials.status',2)
									->GROUP_BY('blog_tutorials.id_tutorial')
									->GET();
				$count_end['num'] = $count_num->num_rows();
				$count_end['algebra'] = $count_algebra->num_rows();
				$count_end['geo_tri'] = $count_geo_tri->num_rows();
				$count_end['geo_ana'] = $count_geo_ana->num_rows();

				return $count_end;
			} else {
				return NULL;
			}

		}

}

/* End of file Estadisticas_m.php */
/* Location: ./application/models/Estadisticas_m.php */
