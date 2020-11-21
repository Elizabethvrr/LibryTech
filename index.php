<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Librytech</title>
    <link rel="stylesheet" href="./styles.css">

</head>

<body class="fondo2">
    <form action="validar.php" method="post" class="form-box animated fadeInUp">
        <h1 class="form-title">Inicia Sesión</h1>
        <input type="text" placeholder="Usuario" name="usuario" required>
        <input type="password" placeholder="Contraseña" name="contraseña" required>
        <button type="submit" value="Ingresar" name="ingresar">
            ingresar
        </button>
    </form>
</body>

</html>