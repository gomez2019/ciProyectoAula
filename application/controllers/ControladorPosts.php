
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorPosts extends CI_Controller {

	public function crear(){
		$id_usuario = $this->session->userdata('datos_usuario')['id'];
		$this->ModeloPosts->crearPost($id_usuario);
        redirect("ControladorPerfil");


	}

	public function eliminar($id_post)
	{
		$this->ModeloPosts->eliminarPost($id_post);
    	redirect('ControladorPerfil');
	}

	public function editar($id_post) {
        $datos['post'] = $this->ModeloPosts->getPost($id_post);
        $this->load->view('includes/header');
        $this->load->view('VistaEditar', $datos);
    }

    public function actualizar($id_post)
    {    	
    	$this->ModeloPosts->actualizarPost($id_post);
    	redirect('ControladorPerfil');
    }

	

}