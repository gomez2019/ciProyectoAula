  
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloIngreso extends CI_Model {
	
   public function validarIngreso($correo,$clave){
    $this->db->select('clave');
    $this->db->from('usuarios');
    $this->db->where('correo',$correo);
    $hash = $this->db->get()->row('clave');
    
    if  (password_verify($clave, $hash))
    {
      return $this->db->get_where('usuarios',array('correo'=>$correo))->row();
    }
    else
    {
      return false;
    }
   }

}