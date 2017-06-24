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
	
	function type_avatar()
	{
		$type = array(
				'male' => array(2,4,6,10,11,12,13,16,17,19,21,24,25,27,29), 
				'female' => array(1,3,4,5,7,8,9,14,15,18,20,22,23,26,28,30));
		return $type;
	}
}
?>