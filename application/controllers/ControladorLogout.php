
	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorLogout extends CI_Controller {

	public function index(){

		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('correo');
		$this->session->unset_userdata('nombre');
		$this->session->unset_userdata('apellidos');
		$this->session->unset_userdata('sexo');
		$this->session->unset_userdata('fecha_nacimiento');
		$this->session->unset_userdata('id');
		


		$this->session->set_flashdata('usuario_loggedout', 'Has salido  de tu cuenta');

		redirect('ControladorRegistro');
	}


}