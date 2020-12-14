<html>

<head>
    <title>ArticDev Shop</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/appweb/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php require_once "../inc/initialconfig.php";?>
<?php include "header.php" ?>

<form method="post" action="/appweb/mod/registroLogica.php" id="formRegistro">
    <label for="nickname">Nickname</label>
    <input id="nickname" required name="nombUsuar" type="text">
    <label for="correo" >Correo</label>
    <input id="correo"  required name="emailReg" type="email">
    <label for="nombre">Nombre Completo</label>
    <input id="nombre" type="text" required name="nombCompReg">
    <label for="contras">Contraseña</label>
    <input id="contras" required name="contrasReg" type="password">
    <label for="contrasVer">Ingrese nuevamente su contraseña</label>
    <input id="contrasVer" required type="password">
    <p id="avisos">Soy el apartado de avisos</p>

    <button type="button" id="botonRegist">Registrar</button>
</form>



<?php include "footer.php";?>
<script src="/appweb/js/registro.js"></script>
<script src="https://kit.fontawesome.com/791abd0481.js" crossorigin="anonymous"></script>
</body>

</html>