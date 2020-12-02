<div class="container">
	<div class="row">
		<div class="col-12">
			<?php echo validation_errors('<div class="alert alert-danger alert-dismissable disabled text-center">
			<button type="button" class="close" data-dismiss="alert">&times;</button>','</div>'); ?>
		</div>
		<div class="row">
			<div class="col-12">
				<h3>Bienvenido</h3>
			</div>
		</div>


		<div class="col-12">
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
