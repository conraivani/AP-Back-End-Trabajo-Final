<?php
session_start();
extract($_REQUEST);
if (!isset($_SESSION['usuario_logueado']))
    header("location:index.php");


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="../lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/estilo.css">


</head>

<body>
    <div class="container-fluid">
        <?php require("menu.php"); ?>
    </div>

    <h1>REVISTA DE MÚSICA</h1>
    <img src="../images/portada1.png" alt="portada revista" height="150px">
    </div>
    <div class="bienvenida">
        <h2>BIENVENIDO A TU PERFIL DE USUARIO</h2>
        <P>Desde aquí podrás editar, borrar y cargar nuevas noticias además de administrar tus usarios</P>
    </div>
    <footer>
        <h1>Servicio de atención al cliente:</h1>
    <form method='POST'>
	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" class="form-control" name='nombre' id="nombre" placeholder="nombre...">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name='email' id="email" placeholder="email...">
	</div>
	<div class="form-group">
		<label for="exampleTextarea">Mensaje</label>
		<textarea class="form-control" name='mensaje' id="mensaje" rows="3"></textarea>
	</div>
	<div class="form-group">
		<input type="checkbox" required> Acepto la política de privacidad.
	</div>
	<button class="btn btn-primary" type="submit">Enviar</button>
</form>
    </footer>
    <script src="../lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>