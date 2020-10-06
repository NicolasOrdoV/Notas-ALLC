<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center my-5">Registrar nuevo curso</h1>
	</div>
	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container bg-warning">
				<h4 class="m-auto">
					<a href="?controller=course" class="btn btn-danger"><<</a>
					Recuerda: Solo los cursos se registran si es necesario hacerlo, por si alguna novedad, estara disponible una opcion de eliminar en el listado principal
			    </h4>
			</div>
			<div class=" card-body w-100">
				<form action="?controller=course&method=save" method="POST" class="needs-validation" novalidate>
					<div class="form-group">
						<input type="text" name="CURSO" placeholder="Ingrese el curso nuevo. Ej: 604 JM" class="form-control" required>
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