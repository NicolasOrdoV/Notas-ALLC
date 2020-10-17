<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center my-5">Registrar nuevas notas</h1>
	</div>
	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container bg-success">
				<h4 class="m-auto">
					Registrar nuevas notas
			    </h4>
			    <p><?php echo $data[0]->NOMBRES."-".$data[0]->APELLIDOS?></p>
			    <p><?php echo $data[0]->curso ?></p>
			</div>
			<div class=" card-body w-100">
				<form action="?controller=note&method=save" method="POST" class="needs-validation" novalidate>
					<input type="hidden" name="ID_DOCENTE" value="<?php echo $_SESSION['user']->ID_DOCENTE ?>">
					<input type="hidden" name="ID_ESTUDIANTE" value="<?php echo $data[0]->ID_ESTUDIANTE ?>">
					<div class="form-group">
						<select name="ID_ASIGNATURA" class="form-control">
							<option value="">Seleccione...</option>
							<?php foreach ($asignatures as $asignature) { ?>
                            	<option value="<?php echo $asignature->ID_ASIGNATURA ?>"><?php echo $asignature->NOMBRE ?></option>    
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<input type="number" name="NOTA1" placeholder="Ingrese primera nota" class="form-control" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<input type="number" name="NOTA2" placeholder="Ingrese segunda nota" class="form-control" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<input type="number" name="NOTA3" placeholder="Ingrese tercera nota" class="form-control" required>
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