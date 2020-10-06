<main class="container">
	<section class="col-md-12 text-center">
		<h1>Lista de asignaturas</h1>
		<div class="col-md-12 m-2 d-flex justify-content-between">
			<h2>Asignaturas activas</h2>
		</div>
		<section class="col-md-12">
			<table class="table table-hover table-striped table-borderless">
				<thead class="thead-dark">
					<tr>
						<th>#</th>
						<th>Asignatura</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($asignatures as $asignature) { ?>
						<tr>
							<td><?php echo $asignature->ID_ASIGNATURA ?></td>
							<td><?php echo $asignature->NOMBRE ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
<div class="my-5"></div>