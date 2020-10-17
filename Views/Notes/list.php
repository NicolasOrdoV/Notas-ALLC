<main class="caontainer">
	<section class="col-md-12 text-center">
		<h1>Lista de estudiantes</h1>
		<div class="col-md-12 m-2 d-flex justify-content-between">
			<h2><a href="?controller=note" class="btn btn-danger"><<</a>Estudiantes</h2>
		</div>
		<section class="col-md-12">
			<table class="table table-hover table-striped table-borderless" id="myTable">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nombres</th>
						<th scope="col">Apellidos</th>
						<th scope="col">Correo</th>
						<th scope="col">Telefono</th>
						<th scope="col">Fecha de nacimiento</th>
						<th scope="col">Curso</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($students as $student) { ?>
						<tr>
							<td><?php echo $student->ID_ESTUDIANTE ?></td>
							<td><?php echo $student->NOMBRES ?></td>
							<td><?php echo $student->APELLIDOS ?></td>
							<td><?php echo $student->CORREO ?></td>
							<td><?php echo $student->TELEFONO ?></td>
							<td><?php echo $student->FECHA_NACIMIENTO ?></td>
							<td><?php echo $student->curso ?></td>
							<td>
								<a href="?controller=note&method=new&id=<?php echo $student->ID_ESTUDIANTE?>" class="btn btn-warning"><i class="far fa-clipboard"></i></a>
								<a href="?controller=note&method=edit&id=<?php echo $student->ID_ESTUDIANTE?>" class="btn btn-info">+</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
<div class="my-5"></div>