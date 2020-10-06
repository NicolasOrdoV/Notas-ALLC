<main class="container">
	<section class="col-md-12 text-center">
		<h1>Lista de perfiles</h1>
		<div class="col-md-12 m-2 d-flex justify-content-between">
			<h2>Perfiles en el aplicativo</h2>
		</div>
		<section class="col-md-12">
			<table class="table table-hover table-striped table-borderless" id="myTable">
				<thead class="thead-dark">
					<tr>
						<th>#</th>
						<th>Perfil</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($profiles as $profile) { ?>
						<tr>
							<td><?php echo $profile->ID_PERFIL ?></td>
							<td><?php echo $profile->NOMBRE ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
<div class="my-5 py-5"></div>