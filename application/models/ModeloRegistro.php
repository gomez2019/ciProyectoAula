
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloRegistro extends CI_Model {


	public function registrarUsuario($clave_encriptada){
		$datos_usuario = array (   
      'nombre' => $this->input->post('nombre'),     
      'correo' => $this->input->post('correo'),           
      'clave' => $clave_encriptada,           
    
         
            
    );
        return $this->db->insert('usuarios', $datos_usuario);

	}


}
