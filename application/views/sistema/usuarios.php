<div class="container">
		<div class="row">
			<div class="col">
				<table class="table table-hover table-dark" border="1">
					<tr class="table table-success ">
						<form action="<?=base_url("usuarios/agregar");?>" method="post">
							<td class="text-center text-dark">
								Nuevo Usuario
							</td>
							<td>
								<input class="form-control" type="text" name="nombre"/>
							</td>
							<td>
								<input class="form-control" type="text" name="apellido"/>
							</td>
							<td>
								<input class="form-control" type="tel" name="telefono"/>
							</td>
							<td>
								<select class="form-control" id="genero" name="genero">
									<option value="Hombre">Hombre</option>
									<option value="Mujer">Mujer</option>
								</select>
							</td>
							<td>
								<input class="form-control" type="email" name="correo"/>
							</td>
							<td>
								<input class="form-control" type="password" name="password"/>
							</td>
							
							
							<td>
								<input class="btn btn-info form-control" type="submit" name="submit" value="Añadir" />
							</td>
						</form>
					</tr>
					<tr class="table table-info">
						<td class="text-center">id</td>
						<td class="text-center">Nombre</td>
						<td class="text-center">Apellidos</td>
						<td class="text-center">Teléfono</td>
						<td class="text-center">Género</td>
						<td class="text-center">Correo</td>
						<td class="text-center">Contraseña</td>
						<td class="text-center">Opciones</td>
					</tr>


					<?php
					foreach($ver as $fila){
						?>
						<tr>
							<td class="text-light text-center">
								<?=$fila->id_usuario;?>
							</td>
							<td class="text-light text-center">
								<?=$fila->nombre;?>
							</td>
							<td class="text-light text-center">
								<?=$fila->apellido;?>
							</td>
							<td class="text-light text-center">
								<?=$fila->telefono;?>
							</td>
							<td class="text-light text-center">
								<?=$fila->genero;?>
							</td>
							<td class="text-light text-center">
								<?=$fila->correo;?>
							</td>
							<td class="text-light text-center">
								<?=$fila->password;?>
							</td>
							<td>
								<button class="btn btn-block btn-success" type="button">
									<a href="<?=base_url("usuarios/actualizar/$fila->id_usuario")?>">Actualizar</a>
								</button>
								<button class="btn btn-block btn-danger" type="button">
									<a href="<?=base_url("usuarios/eliminar/$fila->id_usuario")?>">Eliminar</a>
								</button>

							</td>
						</tr>
						<?php

					}
					?>
				</table>

			</div>
		</div>
	</div>