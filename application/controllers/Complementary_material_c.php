<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Complementary_material_c  extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
        $this->load->model('Complementary_material_m');
    }

    public function index(){
    	$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){
	        $datos['bibliografia'] = $this ->bibliografia();
		    $datos['ligas_interes'] = $this ->links();
		    
		    $datos["user_log"][0] = $this->session->userdata('user');
		    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
	        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
	        $datos['opt_menu_active']='opt_materiales';

		    $this->load->view('header/head_v');
		    $this->load->view('header/Menu_user_v', $datos);
			$this->load->view('menu_usuario/Material_complementario_v',$datos);
	    	$this->load->view('footer/footer_v');
	    }else{
	    	redirect(base_url());
	    }
    }
	
	
	function cargar_administrador(){
		$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){
	        $datos['bibliografia'] = $this ->bibliografia();
		    $datos['ligas_interes'] = $this ->links();
		    
		    $datos["user_log"][0] = $this->session->userdata('user');
		    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
	        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
	        $datos['opt_menu_active']='opt_materiales';

		    $this->load->view('header/head_v');
		    $this->load->view('header/Menu_user_v', $datos);
			$this->load->view('administrador/Admin_material_v',$datos);
	    	$this->load->view('footer/footer_v');
	    }else{
	    	redirect(base_url());
	    }
	}
		
	
	/**
	 * Funcion para obtener mostrar la vista de editor de la bibliografia
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */	
	 function editor_biblio ($id_biblio=NULL){
		$login = $this->session->userdata('logged_in');
		if ($id_biblio != NULL) {
			if($login != null && $login == true){
		    $datos["user_log"][0] = $this->session->userdata('user');
		    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
	        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
	       // $datos['opt_menu_active']='opt_materiales';
			$biblio = $this->Complementary_material_m->lista_bibliografia($id_biblio);
		    $this->load->view('header/head_v');
		    $this->load->view('header/Menu_user_v', $datos);
			$this->load->view('administrador/Editor_bibliografia_v',$biblio);
	    	$this->load->view('footer/footer_v');
	    }else{
	    	redirect(base_url());
	    }
		} else {
			redirect(base_url());
		}
	}
	
	
	
	/**
	 * Funcion para obtener mostrar la vista de editor de la bibliografia
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */	
	 function editor_liga ($link = NULL){
		$login = $this->session->userdata('logged_in');
		if ($link !=NULL) {
				if($login != null && $login == true){
			    $datos["user_log"][0] = $this->session->userdata('user');
			    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
		        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
		       // $datos['opt_menu_active']='opt_materiales';
				$links = $this->Complementary_material_m->lista_links($link);
			    $this->load->view('header/head_v');
			    $this->load->view('header/Menu_user_v', $datos);
				$this->load->view('administrador/Editor_liga_v',$links);
		    	$this->load->view('footer/footer_v');
		       }else{
		    		redirect(base_url());
		       }
		} else {
			redirect(base_url());
		}   
	}
	
	
	/**
	 * Funcion para obtener mostrar la vista de editor de la bibliografia
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */	
	 function agregar_biblio (){
		$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){
		    $datos["user_log"][0] = $this->session->userdata('user');
		    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
	        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
	       // $datos['opt_menu_active']='opt_materiales';
		   	$biblio_vacio = array('id_bibliography' =>null ,'id_user'=>'','author'=>'','title'=>'','place_publication'=>'','editorial'=>'','year'=>'','book_image'=>'statics/img/book_image/book_default.png' );
			$biblio = $this->Complementary_material_m->lista_bibliografia(1);
		    $this->load->view('header/head_v');
		    $this->load->view('header/Menu_user_v', $datos);
			$this->load->view('administrador/Editor_bibliografia_v',$biblio_vacio);
	    	$this->load->view('footer/footer_v');
	    }else{
	    	redirect(base_url());
	    }
		
	}
	
	/**
	 * Funcion para obtener mostrar la vista de editor de la bibliografia
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */	
	 function agregar_links (){
		$login = $this->session->userdata('logged_in');
        if($login != null && $login == true){
		    $datos["user_log"][0] = $this->session->userdata('user');
		    $menu = $this->etiquetas->menu_user($datos["user_log"][0]['id_user']);
	        $datos['menu_user'] = $menu[$datos["user_log"][0]['type_user']];
	       // $datos['opt_menu_active']='opt_materiales';
	       	$vacio_link = array('id_links_interest' => null, 'id_user'=>'','title'=>'','description'=>'','link'=>'');
		    $this->load->view('header/head_v');
		    $this->load->view('header/Menu_user_v', $datos);
			$this->load->view('administrador/Editor_liga_v',$vacio_link);
	    	$this->load->view('footer/footer_v');
	    }else{
	    	redirect(base_url());
	    }
		
	}
	
	
	/**
	 * Funcion para actualizar  las bibliografias almacenadas en BD
	 * @author Cecilia Hernandez Vasquez
	 * @return mensaje de error o de exito en caso de que se haya realizado la actualizacion.
	 * @param NA
	 * @version 1.0
	 */	
	function insertar_link(){
		$id_link = $this->input->post('link');
		if ($id_link != null) {
			$agregar = $this->Complementary_material_m->registrar_link($id_link);
			if ($agregar == TRUE) {
				echo "Se registro correctamente el link";
			
			} else {
				echo "No se puedo registrar el link";
			}
			
		} else {
			echo "No se puedo registrar el link";
		}
		
	}
	
	/**
	 * Funcion para actualizar  las bibliografias almacenadas en BD
	 * @author Cecilia Hernandez Vasquez
	 * @return mensaje de error o de exito en caso de que se haya realizado la actualizacion.
	 * @param NA
	 * @version 1.0
	 */	
	function insertar_biblio(){
			if ($_FILES!=NULL) {
			$ruta = "statics/img/book_image/";
			$mensaje = "";
			/*echo "<pre>";
			print_r($_FILES);
			echo "</pre>";*/
			if ($_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
				//$Nombre_Original = $_FILES['name'];
				$Temporal = $_FILES['imagen']['tmp_name'];
				$image = 'statics/img/book_image/'.$_FILES['imagen']['name'];
				
				

				move_uploaded_file($Temporal, $image);
				$titulo =$this->input->post('title');
				$autor = $this->input->post('author');
				$editorial = $this->input->post('editorial');
				$anio = $this->input->post('year');
				$pais = $this->input->post('place_publication');
				$tema = $this->input->post('id_theme');
												
				$datos = array( 'title' => $titulo,
								'author' => $autor,
								'editorial' => $editorial,
				 				'year' => $anio,
				     			'place_publication' =>$pais,	
								'image' => '/'.$image);
				
				
				$registrar=$this->Complementary_material_m->registrar_biblio($datos);
				if ($registrar) {
					echo "Se registro correctamente la bibliografia";
				} else {
					echo" Intentar mas tarde";
				}
			}
				if ($_FILES['imagen']['error']!= 0) {
					switch ($_FILES['imagen']['error']) {
					case UPLOAD_ERR_INI_SIZE:
						echo  "El archivo subido supera la directiva upload_max_filesize en php.ini";  
						break;

					case UPLOAD_ERR_FORM_SIZE:
						echo"El archivo subido supera la directiva MAX_FILE_SIZE que se especificó en el formulario HTML";
						break;

					case UPLOAD_ERR_PARTIAL:
						echo"El archivo subido sólo se cargó parcialmente";
						break;

					case UPLOAD_ERR_NO_FILE:
						echo"Ningun archivo fue subido";
					break;

					case UPLOAD_ERR_NO_TMP_DIR:
						echo"Falta una carpeta temporal";
					break;							

					case UPLOAD_ERR_CANT_WRITE:
						echo"Error al escribir el archivo en el disco";
					break;

					case UPLOAD_ERR_EXTENSION:
						echo"Archivo de carga detenido por extensión";
					break;

					default: 
						echo "Error desconocido en la carga"; 
						break; 
					}

				}
		} else {
			$biblio = $this->input->post('biblio');
			$update_editor=$this->Complementary_material_m->registrar_biblio($biblio);
			if ($update_editor) {
				echo "Se registro correctamente la bibliografia";
			} else {
				echo" Intentar mas tarde";
			}
		}
	}
	
	
	
	/**
	 * Funcion para actualizar  las bibliografias almacenadas en BD
	 * @author Cecilia Hernandez Vasquez
	 * @return mensaje de error o de exito en caso de que se haya realizado la actualizacion.
	 * @param NA
	 * @version 1.0
	 */	
	
	function actualizar_biblio(){
		if ($_FILES!=NULL) {
			$ruta = "statics/img/book_image/";
			$mensaje = "";
			/*echo "<pre>";
			print_r($_FILES);
			echo "</pre>";*/
			if ($_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
				//$Nombre_Original = $_FILES['name'];
				$Temporal = $_FILES['imagen']['tmp_name'];
				$image = 'statics/img/book_image/'.$_FILES['imagen']['name'];
				
				

				move_uploaded_file($Temporal, $image);
				$id_biblio = $this->input->post('id_bibliography');
				$titulo =$this->input->post('title');
				$autor = $this->input->post('author');
				$editorial = $this->input->post('editorial');
				$anio = $this->input->post('year');
				$pais = $this->input->post('place_publication');
				$tema = $this->input->post('id_theme');
				
				

				
				$datos = array( 'id_bibliography' => $id_biblio,
								'title' => $titulo,
								'author' => $autor,
								'editorial' => $editorial,
				 				'year' => $anio,
				     			'place_publication' =>$pais,	
								'image' => '/'.$image);
				
				
				$update_editor=$this->Complementary_material_m->actualizar_biblio($datos);
				if ($update_editor) {
					echo "Actualizacion exitosa";
				} else {
					echo" Intentar mas tarde";
				}
			}
				if ($_FILES['imagen']['error']!= 0) {
					switch ($_FILES['imagen']['error']) {
					case UPLOAD_ERR_INI_SIZE:
						echo  "El archivo subido supera la directiva upload_max_filesize en php.ini";  
						break;

					case UPLOAD_ERR_FORM_SIZE:
						echo"El archivo subido supera la directiva MAX_FILE_SIZE que se especificó en el formulario HTML";
						break;

					case UPLOAD_ERR_PARTIAL:
						echo"El archivo subido sólo se cargó parcialmente";
						break;

					case UPLOAD_ERR_NO_FILE:
						echo"Ningun archivo fue subido";
					break;

					case UPLOAD_ERR_NO_TMP_DIR:
						echo"Falta una carpeta temporal";
					break;							

					case UPLOAD_ERR_CANT_WRITE:
						echo"Error al escribir el archivo en el disco";
					break;

					case UPLOAD_ERR_EXTENSION:
						echo"Archivo de carga detenido por extensión";
					break;

					default: 
						echo "Error desconocido en la carga"; 
						break; 
					}

				}
		} else {
			$editor = $this->input->post('editor');
			$update_editor=$this->Complementary_material_m->actualizar_biblio($editor);
			if ($update_editor) {
				echo "Actualizacion exitosa";
			} else {
				echo" Intentar mas tarde";
			}
		}
	}
	
	/**
	 * Funcion para actualizar  las bibliografias almacenadas en BD
	 * @author Cecilia Hernandez Vasquez
	 * @return mensaje de error o de exito en caso de que se haya realizado la actualizacion.
	 * @param NA
	 * @version 1.0
	 */	
	
  	function actualizar_link(){
		$id_link = $this->input->post('link');
		$link = $this->Complementary_material_m->actualizar_link($id_link);
		if ($link) {
			echo "Actualizacion exitosa";
		} else {
			echo" Intentar mas tarde";
		}
	}
	
	
	/**
	 * Funcion para eliminar de manera logica el link seleccionado.
	 * @author Cecilia Hernandez Vasquez
	 * @return mensaje de error o de exito en caso de que se haya realizado la eliminacion.
	 * @param NA
	 * @version 1.0
	 */	
	function eliminar_link (){
		$id_link = $this->input->post('link');
		if ($id_link != null) {
			$eliminado = $this->Complementary_material_m->borrar_link($id_link);
			if ($eliminado) {
				echo "Se eliminó el registro";
			} else {
				echo "No se puede eliminar el registro";
			}
			
		} else {
			echo "No se puede eliminar el registro";
		}
	}
	
	
	/**
	 * Funcion para eliminar de manera logica el link seleccionado.
	 * @author Cecilia Hernandez Vasquez
	 * @return mensaje de error o de exito en caso de que se haya realizado la eliminacion.
	 * @param NA
	 * @version 1.0
	 */	
	function eliminar_biblio (){
		$biblio = $this->input->post('biblio');
		if ($biblio != null) {
			$eliminado = $this->Complementary_material_m->borrar_biblio($biblio);
			if ($eliminado == TRUE) {
				echo "Se elimino el registro";
			
			} else {
				echo "No se puede eliminar el registro";
			}
			
		} else {
			echo "No se puede eliminar el registro";
		}
	}
	
	/**
	 * Funcion para obtener los links de los temas 
	 * @author Cecilia Hernandez Vasquez
	 * @return 	NA
	 * @param NA
	 * @version 1.0
	 */		
	 function links(){
			$links = $this->Complementary_material_m->lista_links();
			return $links; 
			
		}
	
	function bibliografia(){
		$biblio = $this->Complementary_material_m->lista_bibliografia();
		return $biblio;
		
	}
}


