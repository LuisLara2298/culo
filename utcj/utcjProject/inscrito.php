<!DOCTYPE html>
<html>
<head>
    <title>UTCJ | Inicio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/main.css"/>
</head>
<body>

<div class="container-fluid text-center top-container">
    <img src="static/images/LogoUTCJ.png">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>You are enrolled in:</h1>

            <p>Course ID: {{ data.id }}</p>
            <p>Course Title: {{ data.title }}</p>
            <p>Course Term: {{ data.term }}</p>

        </div>
    </div>
    <div class="container-fluid text-center bottom-container">
        <footer>
            <p>Copyright &copy;2019-2020. Universidad Técnologica de Cd. Juárez</p>
        </footer>
    </div>
    </div>
    </body>
    </html>