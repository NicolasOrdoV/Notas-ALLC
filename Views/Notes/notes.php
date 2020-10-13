<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center my-5">Notas</h1>
	</div>
	<section class="row mt-3">
		<div class="card w-100 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información de los cursos existentes 
				</h2>
			</div>
			<div class=" card-body w-100">
				<div class="form-group row">
					<?php foreach ($courses as $course) { ?>
						<div class="col-3">
							<a href="?controller=note&method=list&course=<?php echo $course->CURSO?>" class="btn btn-success my-1">Curso: <?php echo $course->CURSO?></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
</main>
<div class="my-5 py-5"></div>