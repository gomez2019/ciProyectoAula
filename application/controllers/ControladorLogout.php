
	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorLogout extends CI_Controller {

	public function index(){

		$this->session->sess_destroy();  

		$this->session->set_flashdata('usuario_loggedout', 'Has salido  de tu cuenta');

		redirect('ControladorRegistro');
	}


}
