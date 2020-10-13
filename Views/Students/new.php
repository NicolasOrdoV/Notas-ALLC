<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center my-5">Registrar nuevo estudiante</h1>
	</div>
	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container bg-success">
				<h4 class="m-auto">
					<a href="?controller=student" class="btn btn-danger"><<</a>
					Registra tu estudiante
			    </h4>
			</div>
			<div class=" card-body w-100">
				<form action="?controller=student&method=save" method="POST" class="needs-validation" novalidate>
					<div class="form-group">
						<input type="text" name="NOMBRES" class="form-control" placeholder="Ingrese el nombre del estudiante">
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<input type="text" name="APELLIDOS" class="form-control" placeholder="Ingrese los apellidos del estudiante">
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<input type="email" name="CORREO" class="form-control" placeholder="Ingrese un correo del estudiante">
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<input type="number" name="TELEFONO" class="form-control" placeholder="Ingrese el telefono de contacto del estudiante">
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<label>Fecha de nacimiento</label>
						<input type="date" name="FECHA_NACIMIENTO" class="form-control">
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<label>Curso a pertenecer</label>
						<select name="ID_CURSO" class="form-control">
							<option value="">Seleccione...</option>
							<?php foreach ($courses as $course) { ?>
								<option value="<?php echo $course->ID_CURSO?>"><?php echo $course->CURSO?></option>
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
<div class="my-5 py-5"></div>