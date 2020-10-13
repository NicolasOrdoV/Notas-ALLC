<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Notas ALLC</title>
	<link rel="stylesheet" href="Assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="Assets/css/jquery.dataTables.min.css">
	<link rel="icon" href="Assets/img/escudo.jpg">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	    <a class="navbar-brand" href="index.php">
	    	<img src="Assets/img/escudo.jpg" width="39">
	    </a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
		    <ul class="navbar-nav">
		        <li class="nav-item active">
		        	<a class="nav-link text-white" href="index.php">Inicio</a>
		        </li>
		        <?php if ($_SESSION['user']->ID_PERFIL == 3) { ?>
		        	<li class="nav-item active">
			        	<a class="nav-link text-success" href="?controller=teacher">Docentes</a>
			        </li>
		        <?php } ?>
		        <?php if ($_SESSION['user']->ID_PERFIL == 2 || $_SESSION['user']->ID_PERFIL == 3) { ?>
		        	<li class="nav-item active">
		        		<a class="nav-link text-white" href="?controller=student">Estudiantes</a>
		            </li>
		        <?php } ?>
		        <li class="nav-item active">
		        	<a class="nav-link text-success" href="?controller=note">Notas</a>
		        </li>
		        <li class="nav-item active">
		        	<a class="nav-link text-white" href="?controller=profile">Perfiles</a>
		        </li>
		        <li class="nav-item active">
		        	<a class="nav-link text-success" href="?controller=asignature">Asignaturas vigentes</a>
		        </li>
		        <li class="nav-item active">
		        	<a class="nav-link text-danger" href="?controller=course">Cursos vigentes</a>
		        </li>
		        <li class="nav-item submenu dropdown">
		        	<a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false" href="?controller=asignature"><?php echo $_SESSION['user']->NOMBRES ?></a>
		        	<ul class="dropdown-menu">
		        		<li class="nav-item active">
		        			<a class="nav-link text-dark" href="?controller=teacher&method=myProfile">Mi perfil</a>
		        		</li>
		        		<li class="nav-item active">
				        	<a class="nav-link text-primary" href="?controller=login&method=logout">Cerra sesión</a>
				        </li>
		        	</ul>
		        </li>
		    </ul>
	    </div>
	</nav>
</body>
</html>