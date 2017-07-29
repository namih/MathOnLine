<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Home_admin_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
		}
		
		/**
		 * Lista de todos los temas del mes o de un mes en especifico.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array Listado de todos los temas del mes o de un especifico
		 * @param Int Número del mes
		 * @version 1.0
		 */
		public function tema_mes($mounth = NULL)
		{
			if (!is_null($mounth)) {
				$query = $this->db->SELECT('*')->FROM('monthly_theme')->WHERE('mounth', $mounth)->WHERE('status', 1)->GET();
				if ($query->num_rows() === 1) {
					return $query->row_array();
				} else {
					return NULL;
				}
			} else {
				$query = $this->db->SELECT('*')->FROM('monthly_theme')->WHERE('status', 1)->GET();
				if ($query->num_rows() > 0) {
					return $query->result_array();
				} else {
					return NULL;
				}
			}
		}
		
		/**
		 * Actualiza un tema del mes especifico.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array Datos a actualizar del tema
		 * @param Bool True si se actualizo correctamente False si ocurrio un error en la base de datos
		 * @version 1.0
		 */
		public function actualizar_tema($tema_mes)
		{
			if (!is_null($tema_mes)) {
				$this->db->where('mounth', $tema_mes['mounth']);
				$this->db->update('monthly_theme', $tema_mes); 
				if ($this->db->affected_rows() === 1) {
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
}

/* End of file Home_admin_m.php */
/* Location: ./application/models/Home_admin_m.php */