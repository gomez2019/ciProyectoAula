
<body>

	<?php 

	$nombre = $this->session->userdata('datos_usuario')['nombre'];
	
	

	?>

	<?php if ($this->session->flashdata('usuario_registrado')):?> 

		<script>
			
			Swal.fire(
				'Registro exitoso',
				'Binevenido <?php echo $nombre ?> ',
				'success'
				)
			</script>


		<?php endif?>


		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">		
			
			<a class="navbar-brand" href="#">ciProyectoAula</a>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="#"><?php echo $nombre; ?> <span class="sr-only"></span></a>
				</li>	
				<li>

					<a class="nav-link" href="<?php echo site_url('ControladorLogout'); ?>">logout</a>
				</li>			

			</ul>		


		</nav>

		<div class="container">	



			<form action="<?= site_url('ControladorPosts/crear')?>" method="post" >
				<div class="form-group">
					<label for="exampleInputEmail1">titulo</label>
					<input name="titulo" type="text" class="form-control"   placeholder="Titulo">

				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">contenido</label>
					<input name = "contenido" type="text" class="form-control" placeholder="Contenido">
				</div>

				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>		
			

			
			<table class="table col-6">
				<tbody>
					<thead>
						<th>titulo</th>
						<th>contenido</th>
					</thead>
					<?php foreach($posts as $post) :?>
						<tr>
							<td><?php echo $post->titulo; ?></td>
							<td><?php echo $post->contenido; ?></td>
							<td> <a href="<?= site_url('ControladorPosts/editar');?>/<?= $post->id_post;?>">Editar</a> </td>
							<td> <a onclick="return confirm('esta seguro ?');" href="<?= site_url('ControladorPosts/eliminar');?>/<?= $post->id_post;?>">Eliminar</a> </td>
						</tr>

					<?php endforeach ?>
				</tbody>
			</table>			

			
		</div>	



	</body>


</body>
</html>
