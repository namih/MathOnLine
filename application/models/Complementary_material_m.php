<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Complementary_material_m extends CI_Model {
			
		public function __construct()
		{
			parent::__construct();
		}
		
		
		/**
		 * Extrae toda la lista o un link en especifico
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array Lista de todos los links o uno en especifico, NULL si no encuentra ningun registro
		 * @param INT Identificador del link
		 * @version 1.0
		 */
		 public function lista_links($id_link = NULL)
		 {
		 	if (!is_null($id_link)) {
				$query = $this->db->SELECT('*')->FROM('links_interest')->WHERE('id_links_interest',$id_link)->WHERE('status', 1)->GET();
				if ($query->num_rows() === 1) {
					return $query->row_array();
				} else {
					return NULL;
				}
			} else {
				$query = $this->db->SELECT('*')->FROM('links_interest')->WHERE('status', 1)->GET();
				if ($query->num_rows() > 0) {
					return $query->result_array();
				} else {
					return NULL;
				}
			}
		 }
		 
		 
		 /**
		 * Extrae toda la lista o una bibliografia en especifico
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return Array Lista de todas las bibliografias o una en especifico, NULL su no se encuentra ningun registro
		 * @param INT Identificador de la bibliografia
		 * @version 1.0
		 */
		 public function lista_bibliografia($id_bibliography = NULL)
		 {
		 	if (!is_null($id_bibliography)) {
				$query = $this->db->SELECT('*')->FROM('bibliography')->WHERE('id_bibliography', $id_bibliography)->WHERE('status', 1)->GET();
				if ($query->num_rows() === 1) {
					return $query->row_array();
				} else {
					return NULL;
				}
			} else {
				$query = $this->db->SELECT('*')->FROM('bibliography')->WHERE('status', 1)->GET();
				if ($query->num_rows() > 0) {
					return $query->result_array();
				} else {
					return NULL;
				}
			}
		 }
		 
		 /**
		 * Actualiza un registro de links
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return TRUE si actualizo correctamente, FALSE si ocurrio un error en la actualización
		 * @param INT Identificador del link
		 * @version 1.0
		 */
		 public function actualizar_link($link)
		 {
		 	if (!is_null($link)) {
				$this->db->where('id_links_interest', $link['id_links_interest']);
				$this->db->update('links_interest', $link); 
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
		 * Actualiza un registro de links
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return TRUE si actualizo correctamente, FALSE si ocurrio un error en la actualización
		 * @param INT Identificador del link
		 * @version 1.0
		 */
		 public function actualizar_biblio($bibliography)
		 {
		 	if (!is_null($bibliography)) {
				$this->db->where('id_bibliography', $bibliography['id_bibliography']);
				$this->db->update('bibliography', $bibliography); 
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
		 * Borrado logico (Baja) de un link
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return TRUE si el borrado fue correcto, FALSE si ocurrio un error en el borrado
		 * @param INT Identificador del link
		 * @version 1.0
		 */
		 public function borrar_link($id_link)
		 {
		 	if (!is_null($id_link)) {
		 		$logical_erasure = array('status' => 0);
				$this->db->where_in('id_links_interest', $id_link);
				$this->db->update('links_interest', $logical_erasure); 
				if ($this->db->affected_rows() > 0) {
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		 }
		 
		 /**
		 * Borrado logico (Baja) de una bibliografia
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return TRUE si el borrado fue correcto, FALSE si ocurrio un error en el borrado
		 * @param INT Identificador d la bibliografia
		 * @version 1.0
		 */
		 public function borrar_biblio($id_bibliography)
		 {
		 	if (!is_null($id_bibliography)) {
		 		$logical_erasure = array('status' => 0);
				$this->db->where_in('id_bibliography', $id_bibliography);
				$this->db->update('bibliography', $logical_erasure); 
				if ($this->db->affected_rows() > 0) {
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		 }
		 
		 /**
		 * Guarda los datos recabados del formulario de alta de link.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return TRUE si se registro correctamente o NULL si ocurrio un problema en el registro a la base de datos.
		 * @param Array $link datos del link
		 * @version 1.0
		 */
		public function registrar_link($link)
		{
			if ($link != NULL) {
				$this->db->SET($this->_setLink($link))->INSERT('links_interest');
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
		 * Guarda los datos recabados del formulario de alta de link.
		 * 
		 * @author Julio Cesar Padilla Dorantes
		 * @return TRUE si se registro correctamente o NULL si ocurrio un problema en el registro a la base de datos.
		 * @param Array $link datos del link
		 * @version 1.0
		 */
		public function registrar_biblio($bibliography)
		{
			if ($bibliography != NULL) {
				$this->db->SET($this->_setBibliography($bibliography))->INSERT('bibliography');
				if ($this->db->affected_rows() === 1) {
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				return NULL;
			}
		}
		
		private function _setLink($link)
		{
			$set_link = array();
			
			if (isset($link['id_user'])) {
				$set_link['id_user'] =  $link['id_user'];
			};
			if (isset($link['title'])) {
				$set_link['title'] =  $link['title'];
			};
			if (isset($link['description'])) {
				$set_link['description'] =  $link['description'];
			};
			if (isset($link['link'])) {
				$set_link['link'] =  $link['link'];
			};			
			return $set_link;
		}
		
		private function _setBibliography($bibliography)
		{
			$set_bibliography = array();
			
			if (isset($bibliography['id_user'])) {
				$set_bibliography['id_user'] =  $bibliography['id_user'];
			};
			if (isset($bibliography['author'])) {
				$set_bibliography['author'] =  $bibliography['author'];
			};
			if (isset($bibliography['title'])) {
				$set_bibliography['title'] =  $bibliography['title'];
			};
			if (isset($bibliography['place_publication'])) {
				$set_bibliography['place_publication'] =  $bibliography['place_publication'];
			};
			if (isset($bibliography['editorial'])) {
				$set_bibliography['editorial'] =  $bibliography['editorial'];
			};
			if (isset($bibliography['year'])) {
				$set_bibliography['year'] =  $bibliography['year'];
			};
			if (isset($bibliography['book_image'])) {
				$set_bibliography['book_image'] =  $bibliography['book_image'];
			};
			
			return $set_bibliography;
		}
}

/* End of file Complementary_material_m.php */
/* Location: ./application/models/Complementary_material_m.php */