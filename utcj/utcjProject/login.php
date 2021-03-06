<!DOCTYPE html>
<html>
<head>
    <title>UTCJ | Inciar Sesión</title>
    <link rel="shortcut icon" href="static/images/favicon.ico" type="image/vnd.microsoft.icon" id="favicon" />
    <link rel="stylesheet" href="static/css/propios.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/bootstrap.css">
</head>
<body>

<div class="container-fluid text-center top-container">
    <img src="static/images/LogoUTCJ.png">
</div>
<header>
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="http://utcj.onlinewebshop.net/index.php" class="nav-link">Inicio</a></li>
            <li class="nav-item"><a href="http://utcj.onlinewebshop.net/cursos.php" class="nav-link ">Clases</a></li>
            <li class="nav-item"><a href="http://utcj.onlinewebshop.net/registro.php" class="nav-link ">Registro</a></li>
            <li class="nav-item"><a href="http://utcj.onlinewebshop.net/login.php" class="nav-link active">Iniciar Sesión</a></li>
            <li class="nav-item"><a href="shoppingcar.php" class="nav-link ">Shopping Car</a></li>
        </ul>
    </nav>
    <hr style="clear:both">
</header>
<div class="container">



    <h1>Inicio de Sesión</h1>

    <div class="row">

        <div class="col-md-6 offset-md-3,overflow-auto">

            <form name="login" action="login.php" method="get">

                <input type="text" placeholder="Usuario" name="username" required>
                <br>

                <input type="password" placeholder="Contraseña" name="password" required>
                <br class="clear">
                <input class="btn-submit" type="submit" name="submit" value="Enviar">
            </form>

        </div>
    </div>

</div>
<div class="container-fluid text-center bottom-container">
    <footer>
        <p>Copyright &copy;2019-2020. Universidad Técnologica de Cd. Juárez.</p>
    </footer>
</div>
</body>
</html>