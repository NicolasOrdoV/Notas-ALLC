<main class="caontainer">
	<section class="col-md-12 text-center">
		<h1>Lista de cursos</h1>
		<div class="col-md-12 m-2 d-flex justify-content-between">
			<h2>Cursos</h2>
			<a href="?controller=course&method=new" class="btn btn-success">+Agregar</a>
		</div>
		<section class="col-md-12">
			<table class="table table-hover table-striped table-borderless">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Cursos</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($courses as $course) { ?>
						<tr>
							<td><?php echo $course->ID_CURSO ?></td>
							<td><?php echo $course->CURSO ?></td>
							<td>
								<a href="?controller=course&method=delete&id=<?php echo $course->ID_CURSO?>" class="btn btn-danger">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
<div class="my-5"></div>