<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Home_student_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
			$this->load->library('encrypt');
		}
		
		/**
		 * Funcion temporal para registrar avance de tutoriales para usuario Dummy
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return INT 1 Acceso concedido, 2 Nombre de usuario incorrecto, 3 Contraseña incorrecto, 4 Cuenta de usuario desactivada
		 * @param Array $credencial Arreglo con el nombre de usuario y contraseña para el inicio de sesión.
		 * @version 1.0
		 */
		public function registro_tutorial($tutorial = NULL)
		{
			if ($tutorial!=NULL) {
				$registro = $this->db->INSERT('blog_tutorials', $tutorial);
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
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array Arreglo con la lista de todos los tutoriales activos del sistema.
		 * @param NA
		 * @version 1.0
		 */
		public function lista_tutoriales()
		{
			$tutoriales = $this->db	->SELECT('tutorial.id_tutorial, subtopic.id_subtopic, theme.id_theme, theme.theme, subtopic.subtopic, tutorial.tutorial, tutorial.status')
									->FROM('tutorial')
									->JOIN('subtopic', 'subtopic.id_subtopic = tutorial.id_subtopic')
									->JOIN('theme', 'theme.id_theme = subtopic.id_theme')
									->WHERE('subtopic.status', 1)
									->GET();
			if ($tutoriales->num_rows() > 0) {
				return $tutoriales->result_array();
			} else {
				return FALSE;
			}
		}

		/**
		 * Descripcion
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return INT 1 Acceso concedido, 2 Nombre de usuario incorrecto, 3 Contraseña incorrecto, 4 Cuenta de usuario desactivada
		 * @param Array $credencial Arreglo con el nombre de usuario y contraseña para el inicio de sesión.
		 * @version 1.0
		 */
		public function tutoriales_usuario($id_user = NULL)
		{
			if ($id_user != NULL) {
				$tuto_complete = $this->db->SELECT('*')->
											FROM('blog_tutorials')->
											WHERE('id_user', $id_user)->
											WHERE('status !=', 0)->
											ORDER_BY('id_tutorial ASC')->
											ORDER_BY('id_blog_tutorials ASC')->
											GROUP_BY('id_tutorial')->
											GET();
				if ($tuto_complete->num_rows() > 0) {
					return $tuto_complete->result_array();
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
}

/* End of file Home_student_m.php */
/* Location: ./application/models/Home_student_m.php */