<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Perfil_usuario_c extends CI_Controller
	{
    public function __construct()
    {
		parent::__construct();
		$this->load->model('Perfil_usuario_m');
    }
	public function perfil_usuario($id_user = null){

		$datos=array();
		if ($id_user != null){
			$perfil = $this->Perfil_usuario_m->datos_usuario($id_user);
			$datos['user_log']=$perfil;/*Aqui solo los datos del usuario, la lista de avatares disponibles que sea separada por favor*/
		} else {
			$datos['user_log']= false;
		}

		$datos['avatar_list'] = array();/*Aqui colocar lo que regrese la consulta de avatares de acuerdo al genero del usuario logueado*/

		$this->load->view('usuarios/Perfil_v', $datos);/* lo que se regresa debe ser la vista no el arreglo con los datos*/
	}


}/* END controller*/
?>