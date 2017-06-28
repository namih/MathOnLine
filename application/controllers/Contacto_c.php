<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto_c extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
    }
	
	public function correo_contacto()
	{
		$contacto = $this->input->post('datos');
		$email = 'matenlinea.cbi@gmail.com';
		
		if ($contacto != NULL) {
			$configuracion = $this->conf_email->configuracion_email();
			$this->email->initialize($configuracion);
			
			$this->email->from('Bienvenido a matematicas .....');
			$this->email->to($email);
			$this->email->subject('Activacion de la cuenta Mathonline');
			$this->email->message('Correo electronico: '. $contacto['email'] . ' Comentario: '. $contacto['comentario']);
			
			if($this->email->send()) {
				echo 'TRUE';
			} else {
				echo 'FALSE';
			}		
		} else {
			echo 'ERROR';
		}
	
	}
}


