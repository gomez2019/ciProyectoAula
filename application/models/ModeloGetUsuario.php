  
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloGetUsuario extends CI_Model {


  
   public function getUsuario(){

    $correo = $this->input->post('correo');
    
    
      return $this->db->get_where('usuarios',array('correo'=>$correo))->row();
    
   
   }


   


}
