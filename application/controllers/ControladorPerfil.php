
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorPerfil extends CI_Controller {

	public function index(){

		$logged_in = $this->session->userdata('datos_usuario')['logged_in'];
		

		if($logged_in == true)
		{
			$id_usuario = $this->session->userdata('datos_usuario')['id'];
			$datos['posts'] = $this->ModeloPosts->getPosts($id_usuario);
			$this->load->view('includes/header');	
			$this->load->view('VistaPerfil',$datos);
			
			
		}
		else
		{
			$this->load->view('includes/header');	
			$this->load->view('VistaBase');		
			
		}


	}

	

}