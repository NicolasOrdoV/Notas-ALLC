<main class="caontainer">
	<section class="col-md-12 text-center">
		<h1>Lista de docentes</h1>
		<div class="col-md-12 m-2 d-flex justify-content-between">
			<h2>Docentes</h2>
			<a href="?controller=teacher&method=new" class="btn btn-success">+Agregar</a>
		</div>
		<section class="col-md-12">
			<table class="table table-hover table-striped table-borderless">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Usuario</th>
						<th scope="col">Nombres</th>
						<th scope="col">Apellidos</th>
						<th scope="col">Telefono</th>
						<th scope="col">Correo</th>
						<th scope="col">Estado</th>
						<th scope="col">Perfil</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($teachers as $teacher) { ?>
						<tr>
							<td><?php echo $teacher->ID_DOCENTE ?></td>
							<td><?php echo $teacher->USUARIO ?></td>
							<td><?php echo $teacher->NOMBRES ?></td>
							<td><?php echo $teacher->APELLIDOS ?></td>
							<td><?php echo $teacher->TELEFONO ?></td>
							<td><?php echo $teacher->CORREO ?></td>
							<td><?php echo $teacher->ESTADO ?></td>
							<td><?php echo $teacher->perfil ?></td>
							<td>
								<?php if ($teacher->ESTADO == "Activo") { ?>
									<a href="?controller=teacher&method=updateStatus&id=<?php echo $teacher->ID_DOCENTE?>" class="btn btn-danger">Inactivar</a>
								<?php }elseif($teacher->ESTADO == "Inactivo") { ?>
									<a href="?controller=teacher&method=updateStatus&id=<?php echo $teacher->ID_DOCENTE?>" class="btn btn-primary">Activar</a>
								<?php } ?>	
								<a href="?controller=teacher&method=delete&id=<?php echo $teacher->ID_DOCENTE?>" class="btn btn-danger">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
<div class="my-5 py-5"></div>