<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center my-5">Editar notas</h1>
	</div>
	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container bg-warning">
				<h4 class="m-auto">
					Editar notas
			    </h4>
			    <p><?php echo $notes[0]->nombres."-".$notes[0]->apellidos?></p>
			</div>
			<div class=" card-body w-100">
				<form action="?controller=note&method=update" method="POST" class="needs-validation" novalidate>
					<input type="hidden" name="ID_NOTA" value="<?php echo $notes[0]->ID_NOTA?>">
					<input type="hidden" name="ID_DOCENTE" value="<?php echo $_SESSION['user']->ID_DOCENTE ?>">
					<input type="hidden" name="ID_ESTUDIANTE" value="<?php echo $notes[0]->id ?>">
					<div class="form-group">
						<label>Asignatura: <?php echo $notes[0]->asignatura?></label>
						<select name="ID_ASIGNATURA" class="form-control" required>
							<option value="">Seleccione...</option>
							<?php foreach ($asignatures as $asignature) { ?>
                            	<option value="<?php echo $asignature->ID_ASIGNATURA ?>"><?php echo $asignature->NOMBRE ?></option>    
							<?php } ?>
						</select>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<input type="number" name="NOTA1" placeholder="Ingrese primera nota" class="form-control" value="<?php echo $notes[0]->NOTA1 ?>" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<input type="number" name="NOTA2" placeholder="Ingrese segunda nota" class="form-control" value="<?php echo $notes[0]->NOTA2 ?>" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						<input type="number" name="NOTA3" placeholder="Ingrese tercera nota" class="form-control" value="<?php echo $notes[0]->NOTA3 ?>" required>
						<div class="invalid-feedback">Campo vacio.</div>
						<div class="valid-feedback">Valido</div>
					</div>
					<div class="form-group">
						Promedio:
						<h1>
							<?php
                               if (isset($notes)) {
	                               $note1 = $notes[0]->NOTA1;
	                               $note2 = $notes[0]->NOTA2;
	                               $note3 = $notes[0]->NOTA3;
	                               $plus = $note1+$note2+$note3;
	                               $promedy = $plus/3;
	                               echo $promedy;
                               }
						    ?>    	
						</h1>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-warning">Actualizar</button>
					</div>
				</form>	
			</div>
		</div>
	</section>
</main>
<div class="my-5 py-5"></div>