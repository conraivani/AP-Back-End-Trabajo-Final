<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./CSS/estilo.css">
    <title>Menu</title>
</head>

<body>
    <nav class="nav">

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="noticias.php">Editar noticias</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="usuarios.php">Editar Usuarios</a>
        </li>


        <li class="nav-item">
            <?php
            print("<a class='nav-link disabled'>" . $_SESSION['nombre'] . " " . $_SESSION['apellido'] . "</a>");
            ?>
        </li>
        <li>
            <a class="nav-link" href="logout.php">Salir</a>
        </li>
        <li><a href="https://www.linkedin.com/in/conra-ivani-092847289/" target="_blank"><img src="../images/li.png"
                alt="icono de linkedin" width="50px"></a>&nbsp;&nbsp;
</li><a href="https://github.com/conraivani" target="_blank"><img src="../images/gh.png" alt="icono de github" width="50px">
        </a><br>
        <li>
</li>
    </nav>
</body>

</html>