<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center my-5">Actualiza tu perfil</h1>
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
				<form action="?controller=teacher&method=update" method="POST" class="needs-validation" novalidate>
					<input type="hidden" name="ID_DOCENTE" value="<?php echo $data[0]->ID_DOCENTE?>">
					<div class="form-group">
						<label>Usuario:</label>
						<input type="text" name="USUARIO" placeholder="Ingrese el usuario(Nombre unico del docente)" class="form-control" value="<?php echo $data[0]->USUARIO?>" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<label>Nombres:</label>
						<input type="text" name="NOMBRES" placeholder="Escribe los nombres del docente" class="form-control" value="<?php echo $data[0]->NOMBRES?>" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<label>Apellidos:</label>
						<input type="text" name="APELLIDOS" placeholder="Escribe los apellidos del docente" class="form-control" value="<?php echo $data[0]->APELLIDOS?>" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<label>Telefono:</label>
						<input type="number" name="TELEFONO" placeholder="Escribe el telefono del docente" class="form-control" value="<?php echo $data[0]->TELEFONO?>" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<label>Correo electronico:</label>
						<input type="email" name="CORREO" placeholder="Escribe el correo del docente" class="form-control" value="<?php echo $data[0]->CORREO?>" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<label>Perfil a desempeñar: <?php echo $data[0]->perfil ?>*</label>
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
						<button type="submit" class="btn btn-warning">Actualizar</button>
					</div>
				</form>	
			</div>
		</div>
	</section>
</main>
<div class="my-5"></div>