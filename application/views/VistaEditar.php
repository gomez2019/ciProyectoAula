<div class="container">

<form action="<?= site_url('ControladorPosts/actualizar')?>/<?php echo $post->id_post; ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">titulo</label>
    <input name="titulo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titulol" value="<?= $post->titulo?>">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">contenido</label>
    <input name = "contenido" type="text" class="form-control" id="exampleInputPassword1" placeholder="Contenido" value="<?= $post->contenido ?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Enviar</button>
  <a class="btn btn-danger" href="<?= site_url('ControladorPerfil')?>">Cancelar</a>
</form>
</div>
