<div class="container">
	<div class="row">
<div class="col-12">
	<?php echo validation_errors('<div class="alert alert-danger alert-dismissable disabled text-center">
				<button type="button" class="close" data-dismiss="alert">&times;</button>','</div>'); ?>
</div>


		<div class="col-8">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<!-- INDICADORES (Miniaturas o indicaduras de posición de imágenes -->
				<ul class="carousel-indicators">
					<li data-target="demo" data-slider-to="0" class="active"></li>
					<li data-target="demo" data-slider-to="1"></li>
					<li data-target="demo" data-slider-to="2"></li>
				</ul>
				<!-- IMÁGENES -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo base_url(); ?>/assets/img/wall4.jpg" class="img-fluid w-100">
						<div class="carousel-caption">
							<h3>PRIMER TÍTULO</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, id.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url(); ?>/assets/img/wall2.jpg" class="img-fluid w-100">
						<div class="carousel-caption">
							<h3>SEGUNDO TÍTULO</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, repudiandae.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url(); ?>/assets/img/wall3.jpg" class="img-fluid w-100">
						<div class="carousel-caption">
							<h3>TERCER TÍTULO</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, debitis.</p>
						</div>
					</div>
				</div>
				<!-- cONTROLES IZQUIERDA Y DERECHA-->
				<a href="#demo" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
				<a href="#demo" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
			</div>
		</div>


		<div class="col-4">
			<h3 class="text-center text-primary">Regístrate</h3>
			<!--<form action="<?php echo base_url('Auth/registro'); ?>" method="POST">-->

				<!--<input type="submit" name="registro" value="Registrarse" class="btn btn-info">-->
				<?php echo form_open('form'); ?>

				<?php if(isset($_SESSION['success'])) { ?>
					<div class="alert alert-success"> <?php echo $_SESSION['success']; ?><div>
						<?php
					}
					?>

					<form action="" method="POST">
						<label class="form-group text-muted" for="username">Nombre:</label>
						<input class="form-control" type="text" name="nombre" value="" size="50"/>

						<label class="form-group text-muted" for="apellido">Apellidos:</label>
						<input class="form-control" type="text" name="apellido" value="" size="50"/>

						<label class="form-group text-muted" for="telefono">Teléfono:</label>
						<input class="form-control" type="tel" name="telefono" pattern="[0-9]{10}">

						<label for="genero" class="text-muted">Género:</label>
						<select class="form-control" id="genero" name="genero">
							<option value="Hombre">Hombre</option>
							<option value="Mujer">Mujer</option>
						</select>

						<label class="form-group text-muted" for="correo">Correo:</label>
						<input class="form-control" type="e-mail" name="correo" value="" size="50"/>

						<label class="form-group text-muted" for="password">Contraseña:</label>
						<input class="form-control" type="password" name="password" value="" size="50"/>

						<label class="form-group text-muted" for="passconf">Confirma Contraseña:</label>
						<input class="form-control" type="password" name="passconf" value="" size="50"/>

						<div><input class="btn btn-primary" type="submit" value="Registrarse"/></div>
					</form>

				</form>
				
			</div>



		</div>
	</div>		
	
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="text-justify mt-5 mr-5 mb-5 ml-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
			</div>
		</div>
	</div>

<!--<div class="row">
		<div class="col">
			<p class="alert alert-success alert-dismissable disabled text-center">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Registrado</strong> con éxito. Ya puedes iniciar sesión.
			</p>
		</div>
	</div>
-->




<!--Botón del modal-->
<!--
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo">Botón Modal</button>
				<!--MODAL-->
	<!--			
				<div class="modal"  role="dialog" id="modaldemo">
					<div class="modal-dialog" role="document">
						<div class="modal-content">

							<!--modal-header-->
							<!--
							<div class="modal-header">
								<h5 class="modal-title">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<!--modal-body-->
							<!--
							<div class="modal-body">
								<p>modal-body</p>
							</div>

							<!--modal-footer-->
							<!--
							<div class="modal-footer">
								<button type="button" class="btn btn-primary">Guardar</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							</div>
						</div>
					</div>
				</div>
-->