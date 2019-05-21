  
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloPosts extends CI_Model {
  
   public function getPosts($id_usuario){

   		return $this->db->get_where('posts',array('id_usuario' => $id_usuario))->result();    
   
   }
   public function crearPost($id_usuario){

   		$datos = array (
   
            'titulo' => $this->input->post('titulo'),
            'contenido' => $this->input->post('contenido'),
            'id_usuario' => $id_usuario

           
        );
        $this->db->insert('posts', $datos); 
   
   }

   function eliminarPost($id_post)
    {
        
        $this->db->where('id_post',$id_post);
        $this->db->delete('posts');

    }

   function getPost($id_post)
    {
        $query = $this->db->get_where('posts', array('id_post' => $id_post));
        return $query->row();
    }

    function actualizarPost($id_post)
    {
        $datos = array (
           
            'titulo' => $this->input->post('titulo'),
            'contenido' => $this->input->post('contenido')
        );
        $this->db->where('id_post', $id_post);
        $this->db->update('posts', $datos);
    }

   


}
