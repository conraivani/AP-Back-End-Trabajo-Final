<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link href="lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./admin/CSS/estilo.css">


</head>

<body>
<nav class="nav">
<li>
    <a class="nav-link" href="./admin/index.php">Ingresar</a>
</li>
</nav>
    </div>
    <div class="logo">
        <h1>REVISTA DE MÚSICA</h1>
    <img  src="./images/portada1.png" alt="portada revista" height="150px">
    </div>

    <div class="row">
        <?php
        require("admin/conexion.php");
        $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
            or die("No se puede conectar con el servidor");
        mysqli_select_db($conexion, $base_db)
            or die("No se puede seleccionar la base de datos");
        $instruccion = "select * from noticias  order by fecha desc limit 10";

        $consulta = mysqli_query($conexion, $instruccion) or die("no puedo consultar");

        $nfilas = mysqli_num_rows($consulta);
        for ($i = 0; $i < $nfilas; $i++) {
            $resultado = mysqli_fetch_array($consulta);
            print('
            <div class="col-4">
                <div class="card">
                <img src="imagenes_subidas/' . $resultado['imagen'] . '" class="card-img-top img-portada" alt="' . $resultado['titulo'] . '">
                    <div class="card-body">
                            <h5 class="card-title">' . $resultado['titulo'] . '</h5>
                        <p class="card-text">' . substr($resultado['copete'], 0, 40) . '</p>
                        <a href="ver_noticia.php?id_noticia=' . $resultado['id_noticia'] . '" class="btn btn-primary">Ver noticia</a>
                    </div>
                 </div>
            </div>          
            
            ');
        }
        mysqli_close($conexion);
        ?>
    </div>
    <footer>
        <p> Conrado Ivani </p>
        <a href="https://www.linkedin.com/in/conra-ivani-092847289/" target="_blank"><img src="./images/li.png"
                alt="icono de linkedin"></a>&nbsp;&nbsp;
        <a href="https://github.com/conraivani" target="_blank"><img src="./images/gh.png" alt="icono de github">
        </a><br>
    </footer>
    <script src="lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>