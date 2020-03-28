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
            <li class="nav-item"><a href="http://utcj.onlinewebshop.net/cursos.php" class="nav-link active ">Clases</a></li>
            <li class="nav-item"><a href="http://utcj.onlinewebshop.net/registro.php" class="nav-link ">Registro</a></li>
            <li class="nav-item"><a href="http://utcj.onlinewebshop.net/login.php" class="nav-link ">Iniciar Sesión</a></li>
            <li class="nav-item"><a href="shoppingcar.php" class="nav-link ">Shopping Car</a></li>
        </ul>
    </nav>
    <hr style="clear:both">
</header>
<body>


<h1>Cursos Disponibles</h1>

<!--  Display the Term and Year here --->
<h3>Termina: Verano 2020 </h3>

<div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Curso ID</th>
            <th scope="col">Máteria</th>
            <th scope="col">Descripción</th>
            <th scope="col">Creditos</th>
            <th scope="col">Finaliza</th>
            <th scope="col">Inscribrse</th>
        </tr>
        </thead>
        <tbody>

        <!-- cursos -->

        <tr>
            <td scope='row'>{{ data["Curso ID"] }}</td>
            <td>{{ data["Materia"] }}</td>
            <td>{{ data["Descripción"] }}</td>
            <td>{{ data["creditos"] }}</td>
            <td>{{ data["termina"] }}</td>
            <td>
                <form action="{{url_for('cursos')}}" method="POST">
                    <input type="hidden" name="courseID" value="{{data['courseID']}}">
                    <input type="hidden" name="title" value="{{data['title']}}">
                    <input type="hidden" name="term" value="{{data['term']}}">
                    <button>Inscribirse</button>
                </form>
            </td>
        </tr>


        </tbody>
    </table>
</div>



</body>
</html>