<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center my-5">Actualiza tu contraseña</h1>
	</div>
	<section class="row mt-3">
		<div class="card w-100 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">
					<a href="?controller=teacher&method=myProfile" class="btn btn-danger"><<</a>
				    Información del docente o coordinador
			    </h2>
			</div>
			<div class=" card-body w-100">
				<form action="?controller=teacher&method=updatePass" method="POST" class="needs-validation" novalidate>
					<?php if(isset($error['errorMessage'])){ ?>
						<div class="alert alert-danger">
							<?php echo $error['errorMessage']; ?>
						</div>
					<?php } ?>
					<input type="hidden" name="ID_DOCENTE" value="<?php echo $_SESSION['user']->ID_DOCENTE?>">
					<div class="form-group">
						<label>Contraseña:</label>
						<input type="password" name="CLAVE" placeholder="Ingrese nueva clave" class="form-control" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<label>Confirma contraseña:</label>
						<input type="password" name="CLAVEC" placeholder="Ingrese nueva clave" class="form-control" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-warning">Actualiza contraseña</button>
					</div>
				</form>	
			</div>
		</div>
	</section>
</main>
<div class="my-5 py-5"></div>