
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorRegistro extends CI_Controller {


	public function index()
	{
		
		$this->load->view('includes/header');	
		$this->load->view('VistaBase');		
		

	}

	public function registro()
	{
		$this->form_validation->set_message('required', 'el campo %s es requerido');
		$this->form_validation->set_message('is_unique', 'el %s ya esta registrado');
		$this->form_validation->set_message('matches', 'las contraseñas no coinciden');

		
		$this->form_validation->set_rules('nombre','nombre','required|trim');

		$this->form_validation->set_rules('correo','correo','required|is_unique[usuarios.correo]|trim|valid_email');
		$this->form_validation->set_rules('clave','Contraseña','required');
		$this->form_validation->set_rules('clave_confirmacion','Repite la contraseña','required|matches[clave]');



		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('includes/header');	
			$this->load->view('VistaBase');		

		}
		else
		{
			$clave_encriptada = password_hash($this->input->post('clave'), PASSWORD_BCRYPT);
			if($this->ModeloRegistro->registrarUsuario($clave_encriptada))
			{

				$datos = $this->ModeloGetUsuario->getUsuario();
				$datos_usuario = array(
					'id' => $datos->id_usuario,
					'nombre' => $datos->nombre,					
					'correo' => $datos->correo,					
					'logged_in' => true
				);


				$this->session->set_userdata('datos_usuario', $datos_usuario);
				$this->session->set_flashdata('usuario_registrado','registro exitoso');
				redirect('ControladorPerfil');
				
				
					
			

			}






		}	


	}

	
	


}
