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
    <img src="static/images/uta-logo-100.png">
</div>
<div class="container">
    {% include "includes/nav.html" %}

    {% block content %}
    {% endblock %}

</div>
    {% include "includes/footer.html" %}
</body>
</html>    