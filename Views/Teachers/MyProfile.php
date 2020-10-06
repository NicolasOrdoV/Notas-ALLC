<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center my-5">Mi perfil</h1>
	</div>
	<section class="row mt-3">
		<div class="card w-100 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información del docente o coordinador 
					<a href="?controller=teacher&method=edit&id=<?php echo $_SESSION['user']->ID_DOCENTE?>" class="btn btn-warning float-right">Editar</a>
				</h2>
			</div>
			<div class=" card-body w-100">
				<div class="form-group row">
					<div class="col-4">
						<p>Nombres:</p>
					    <h3><?php echo $_SESSION['user']->NOMBRES?></h3>
					</div>
					<div class="col-4">
						<p>Apellidos:</p>
						<h3><?php echo $_SESSION['user']->APELLIDOS?></h3>
					</div>
					<div class="col-4">
						<p>Correo electronico:</p>
						<h3><?php echo $_SESSION['user']->CORREO?></h3>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-4">
						<p>Telefono:</p>
					    <h3><?php echo $_SESSION['user']->TELEFONO?></h3>
					</div>
					<div class="col-4">
						<p>Usuario:</p>
						<h3><?php echo $_SESSION['user']->USUARIO?></h3>
					</div>
					<div class="col-4">
						<p>Perfil:</p>
						<h3><?php echo $_SESSION['user']->perfil?></h3>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-4">
						<p>Cambia tu contraseña aquí:</p>
					    <a href="?controller=teacher&method=editPass" class="btn btn-warning">Editar Contraseña</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<div class="my-5 py-5"></div>