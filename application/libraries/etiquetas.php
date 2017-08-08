<?php
class Etiquetas{
	
	function type_user(){
		$type=array(
			'Administrador' => 1,
			'CCC' => 2,
			'Alumno' => 3,
			);
		return $type;
	}
	
	function meses(){
	$mes=array(
			1 => 'Enero',
			2 => 'Febrero',
			3 => 'Marzo',
			4 => 'Abril',
			5 => 'Mayo',
			6 => 'Junio',
			7 => 'Julio',
			8 => 'Agosto',
			9 => 'Septiembre',
			10 => 'Octubre',
			11 => 'Noviembre',
			12 => 'Diciembre');
		return $mes;	
}
	
	function type_avatar()
	{
		$type = array(
				'male' => array(2,4,6,10,11,12,13,16,17,19,21,24,25,27,29), 
				'female' => array(1,3,4,5,7,8,9,14,15,18,20,22,23,26,28,30));
		return $type;
	}
	
	function menu_user($idUser){
		$menu_user = array(
				//admin
				1 => array(
					1=>array(
						'nombre'=>'Inicio',
						'id'=>'',
						'href'=>'',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array()
						),
					2=>array(
						'nombre'=>'Evaluaciones',
						'id'=>'',
						'href'=>'',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array()
						),
					3=>array(
						'nombre'=>'Alta ccc 3',
						'id'=>'',
						'href'=>'',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array()
						),
					4=>array(
						'nombre'=>'Material Complementario',
						'id'=>'',
						'href'=>'',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array()
						),
					5=>array(
						'nombre'=>'Estadisticas',
						'id'=>'',
						'href'=>'',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array()
						),
					6=>array(
						'nombre'=>'<span class="glyphicon glyphicon-user"> </span>',
						'id'=>'',
						'href'=>'',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array(
								1=>array(
									'nombre'=>'<span class="glyphicon glyphicon-user"> </span>Consultar perfil',
									'id'=>'',
									'href'=>'',
									'onclick'=>'perfil_user/'.$idUser
								),
								2=>array(
									'nombre'=>'<span class="glyphicon glyphicon-log-in"> </span>Cerrar sesión',
									'id'=>'',
									'href'=>'logout',
									'onclick'=>''
								),
							)
						),					
					), 
				//consejo
				2 => array(
					1=>array(
						'nombre'=>'Inicio',
						'id'=>'',
						'href'=>'',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array()
						),
					2=>array(
						'nombre'=>'Evaluaciones',
						'id'=>'',
						'href'=>'',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array()
						),
					3=>array(
						'nombre'=>'Material Complementario',
						'id'=>'',
						'href'=>'',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array()
						),
					4=>array(
						'nombre'=>'Estadisticas',
						'id'=>'',
						'href'=>'',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array()
						),
					5=>array(
						'nombre'=>'<span class="glyphicon glyphicon-user"> </span>',
						'id'=>'',
						'href'=>'',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array(
								1=>array(
									'nombre'=>'<span class="glyphicon glyphicon-user"> </span>Consultar perfil',
									'id'=>'',
									'href'=>'',
									'onclick'=>'perfil_user/'.$idUser
								),
								2=>array(
									'nombre'=>'<span class="glyphicon glyphicon-log-in"> </span>Cerrar sesión',
									'id'=>'',
									'href'=>'logout',
									'onclick'=>''
								),
							)
						),					
					), 
				//usuario gral (alumno)
				3 => array(
					1=>array(
						'nombre'=>'Tutoriales',
						'id'=>'opt_tutoriales',
						'href'=>base_url().'tutoriales',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array()
						),
					2=>array(
						'nombre'=>'Evaluaciones',
						'id'=>'opt_evaluaciones',
						'href'=>base_url().'evaluaciones',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array()
						),
					3=>array(
						'nombre'=>'Material complementario',
						'id'=>'opt_materiales',
						'href'=>base_url().'material_complementario',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array()
						),
					4=>array(
						'nombre'=>'Estadísticas',
						'id'=>'opt_estadisticas',
						'href'=>'',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array()
						),
					5=>array(
						'nombre'=>'<span class="glyphicon glyphicon-user"> </span>',
						'id'=>'opt_usuario',
						'href'=>'',
						'onclick'=>'',
						'clase'=>'',
						'submenu'=>array(
								1=>array(
									'nombre'=>'<span class="glyphicon glyphicon-user"> </span>Consultar perfil',
									'id'=>'opt_perfil',
									'href'=>base_url().'perfil_user/'.$idUser,
									'onclick'=>''
								),
								2=>array(
									'nombre'=>'<span class="glyphicon glyphicon-log-in"> </span>Cerrar sesión',
									'id'=>'opt_sesion',
									'href'=>base_url().'logout',
									'onclick'=>''
								),
							)
						),
					), 
		);
		return $menu_user;
	}
}




?>