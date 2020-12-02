<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="name" content="content">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=yes">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
	<!--<link rel="stylesheet" type="text/css" href="http://localhost/RRB-1.0.0/assets/css/bootstrap.css">-->
	
	<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer></script>
	
	<title><?php echo $titulo?> - RRB</title>

</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<ul class="nav navbar navbar-expand-xl nav-justified bg-dark navbar-dark navbar-expand-xl h-75">
					<a href="<?php echo base_url(); ?>" class="navbar-brand"><img src="<?php echo base_url(); ?>/assets/img/logo2.png" style="width:100px;">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colapsable5">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="colapsable5">
						<li class="nav-item"><a href="<?php echo base_url(); ?>" class="nav-link text-light">Inicio</a></li>
						
						<li class="nav-item dropdown">
							<a class="nav-link text-light dropdown-toggle" data-toggle="dropdown" id="navbardrop">Servicios</a>
							<div class="dropdown-menu">
								<a href="<?php echo base_url('Menu/servicio1'); ?>" class="dropdown-item">Servicio 1</a>
								<a href="<?php echo base_url('Menu/servicio2'); ?>" class="dropdown-item">Servicio 2</a>
								<a href="<?php echo base_url('Menu/servicio3'); ?>" class="dropdown-item">Servicio 3</a>
							</div>
						</li>
						<li class="nav-item"><a href="<?php echo base_url('Menu/ayuda') ?>" class="nav-link text-light">Ayuda</a></li>
						<li class="nav-item"><a href="<?php echo base_url('Menu/prueba') ?>" class="nav-link text-light">Opción</a></li>
						<li class="nav-item"><a href="<?php echo base_url('Menu/contacto'); ?>" class="nav-link text-light">Contacto</a></li>
						
						<form action="<?php echo base_url('login') ?>" method="POST" class="form-inline">
							<label class="form-group text-light" for="correo">Correo:</label>
								<input class="form-control" type="e-mail" name="correo" value="" />
							<label class="form-group text-light" for="password">Contraseña:</label>
								<input class="form-control" type="password" name="password" value="" />
							<input type="submit" value="Iniciar Sesión" class="btn btn-success">
						</form>

					</div>
					
				</ul>
			</div>
		</div>
	</div>
	<hr>