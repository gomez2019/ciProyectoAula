


<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">		

		<a class="navbar-brand" href="#">ciProyectoAula</a>
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">

			</li>	
						

		</ul>		


	</nav>
	

	<?php echo validation_errors() ?>


	<?php if ($this->session->flashdata('login_invalido')):?> 

	<!-- 	<p class='alert alert-danger'> 
			<?php //echo $this->session->flashdata('login_invalido')?> 
		</p>  -->

		<script>
			
			Swal.fire(
				'Error',
				'<?php echo $this->session->flashdata('login_invalido')?>  ',
				'error'
				)
			</script>


		<?php endif?>



		<div class="container p-4">
			<h3>Posts</h3>

			<form class="" action="<?php echo site_url('ControladorRegistro/registro')?>" method="post" id="formularioRegistro">


				<div class="p-4">
					<input class="form-control" type="text" name="nombre" placeholder="nombre">	
					<input class="form-control" type="email" name="correo" placeholder="correo">
					<input class="form-control" type="password" name="clave" placeholder="contraseña">
					<input class="form-control" type="password" name="clave_confirmacion" placeholder="repetir contraseña">
					<input  class="btn btn-primary"  type="submit" value="Registrarme">

				</div>
			</form>


			<form action="<?php echo site_url('ControladorIngreso') ?>" method = "post">

				<div class=" p-4">
					<input class="form-control" type="email" name="correo" placeholder="correo">
					<input class="form-control" type="password" name="clave" placeholder="contraseña">
					<input class="btn btn-primary" type="submit" value="Ingresar">
				</div>
			</form>

		</div>

			<script>

				$(function(){


				})

			</script>

		</body>
		</html>
