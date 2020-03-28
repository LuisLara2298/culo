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
            <li class="nav-item"><a href="http://utcj.onlinewebshop.net/index.php" class="nav-link active">Inicio</a></li>
            <li class="nav-item"><a href="http://utcj.onlinewebshop.net/cursos.php" class="nav-link ">Clases</a></li>
            <li class="nav-item"><a href="http://utcj.onlinewebshop.net/registro.php" class="nav-link ">Registro</a></li>
            <li class="nav-item"><a href="http://utcj.onlinewebshop.net/login.php" class="nav-link ">Iniciar Sesión</a></li>
            <li class="nav-item"><a href="shoppingcar.php" class="nav-link ">Shopping Car</a></li>
        </ul>
    </nav>
    <hr style="clear:both">
</header>
<div class="container">

<div class="row">
    <div class="col-md-12 text-center">
        <h1>Bienvenidos a la Universidad Técnologica de Cd. Juárez</h1>




        <p>Eres usuario registrado? <a href="{{url_for('login') }}">Iniciar Sesión</a></p>


    </div>
</div>


</div>
</body>
</html>
