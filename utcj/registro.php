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
            <li class="nav-item"><a href="http://utcj.onlinewebshop.net/registro.php" class="nav-link active ">Registro</a></li>
            <li class="nav-item"><a href="http://utcj.onlinewebshop.net/login.php" class="nav-link ">Iniciar Sesión</a></li>
            <li class="nav-item"><a href="shoppingcar.php" class="nav-link ">Shopping Car</a></li>
        </ul>
    </nav>
    <hr style="clear:both">
</header>
    <h2>Registro</h2>

    <div class="container">
        <form name="register" action="register.php" method="get">
            <label for="username"><b>Usuario</b></label>
            <input type="text" placeholder="Ingresar Usuario" name="username" required>
            <br>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <br>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br class="clear">
            <input class="btn-submit" type="submit" name="submit">
        </form>
    </div>

</body>
</html>