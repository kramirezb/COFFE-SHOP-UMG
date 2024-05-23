<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu Principal</title>
	<link rel="stylesheet" href="./estilos/estilos.css">
</head>

<body style="background-image: url('./imagenes/fondo1.jpg'); background-size: cover;">
	<nav>
		<ul class="menu-horizontal">
			<li><a href="#">Usuarios</a>
				<ul class="menu-vertical">
					<li><a href="./views/agregarUser.php">Crear Usuarios</a></li>
					<li><a href="./views/formUser.php">Gestion de Usuarios</a></li>
					<li>
						<div class="container">
							<a href="index.php?views=logout" class="btn btn-dark">Cerrar Sesion</a>
						</div>
					</li>
				</ul>
			</li>
			<!--<li>
				<a href="#">Reportes</a>
				<ul class="menu-vertical">
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
				</ul>
			</li>-->
			<li>
				<a href="#">category</a>
				<ul class="menu-vertical">
					<li><a href="sub-category.php">sub categoria</a></li>
					<li><a href="order-details.php">detalle de orden</a></li>
					<li><a href="./views/formAsistencia.php">Asistencia</a></li>
					<li><a href="./views/formnota.php">Notas</a></li>
				</ul>
			</li>
			<li><a href="#">Registros</a>
				<ul class="menu-vertical">
					<li><a href="./views/formalumno.php">Alumnos</a></li>
					<li><a href="./views/formcatedratico.php">Catedraticos</a></li>
					<li><a href="./views/formcurso.php">Cursos</a></li>
					<li><a href="./views/especialidades.php">Especialidades</a></li>
					<li><a href="./views/formgrados.php">Grados</a></li>
					<li><a href="./views/formsalon.php">Salones</a></li>
				</ul>
			</li>

		</ul>
	</nav>

	<section id="html">
		<h2></h2>
		<p></p>
	</section>

</body>

</html>