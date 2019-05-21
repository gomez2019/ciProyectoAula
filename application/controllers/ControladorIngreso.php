
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorIngreso extends CI_Controller {
	
	public function index()
	{
		$this->form_validation->set_message('required', 'el campo %s es requerido');
		$this->form_validation->set_rules('correo','Correo','required');
		$this->form_validation->set_rules('clave','Contraseña','required');
		if($this->form_validation->run()=== FALSE)
		{
			$this->load->view('includes/header');
			$this->load->view('VistaBase');		
			
		}
		else 
		{

			$correo = $this->input->post('correo');
			$clave = $this->input->post('clave');
			if($datos = $this->ModeloIngreso->validarIngreso($correo,$clave)) 
			{

				$datos_usuario = array(
					'id' => $datos->id_usuario,
					'nombre' => $datos->nombre,					
					'correo' => $datos->correo,					
					'logged_in' => true
				);

				$this->session->set_userdata('datos_usuario', $datos_usuario);

				$this->session->set_flashdata('usuario_loggedin', 'has iniciado sesion');

				redirect('ControladorPerfil');

			}
			else{
				$this->session->set_flashdata('login_invalido', 'Login invalido');
				redirect('ControladorRegistro');
				}

		}
	}


}





