<?php
class Conf_email{
	function configuracion_email_2(){
		$configuracion=array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'matenlinea.cbi@gmail.com',
			'smtp_pass' => 'qwerty2017',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n");
		return $configuracion;
	}
	
	function configuracion_email(){
		$configuracion=array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.xanum.uam.mx',
			'smtp_port' => 465,
			'smtp_timeout'=>30,
			'smtp_user' => 'matlinea@xanum.uam.mx',
			'smtp_pass' => 'e1a2n3i4l5',
			'charset' => 'utf-8',
			'newline' => "\r\n");
		return $configuracion;
	}
}
?>