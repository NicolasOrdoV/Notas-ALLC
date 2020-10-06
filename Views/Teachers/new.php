<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center my-5">Registrar nuevo docente o coordinador</h1>
	</div>
	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container bg-success">
				<h2 class="m-auto">Información del docente o coordinador</h2>
			</div>
			<div class=" card-body w-100">
				<form action="?controller=teacher&method=save" method="POST" class="needs-validation" novalidate>
					<?php if(isset($succesful)){ ?>
						<div class="alert alert-success">
							<?php echo $succesful; ?>
					        <a href="?controller=teacher" class="btn btn-danger">Regresar</a>	
						</div>
					<?php } ?>
					<div class="form-group">
						<input type="text" name="USUARIO" placeholder="Ingrese el usuario(Nombre unico del docente)" class="form-control" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<input type="password" name="CLAVE" value="<?php echo rand('12456789','2'); ?>" class="form-control" readonly required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<input type="text" name="NOMBRES" placeholder="Escribe los nombres del docente" class="form-control" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<input type="text" name="APELLIDOS" placeholder="Escribe los apellidos del docente" class="form-control" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<input type="number" name="TELEFONO" placeholder="Escribe el telefono del docente" class="form-control" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<input type="email" name="CORREO" placeholder="Escribe el correo del docente" class="form-control" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<label>Perfil a desempeñar*</label>
						<select name="ID_PERFIL" class="form-control" required>
							<option value="">Seleccione</option>
							<?php foreach ($profiles as $profile) { ?>
								<option value="<?php echo $profile->ID_PERFIL ?>"><?php echo $profile->NOMBRE ?></option>
							<?php } ?>
						</select>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</form>	
			</div>
		</div>
	</section>
</main>
<div class="my-4 py-2"></div>