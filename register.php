<!DOCTYPE HTML>

  <link rel="stylesheet" href="style.css" style="font-family:Arial">
  <meta charset="utf-8">
<html>
<head>
<title>New User</title>
</head>
<body>

  <div class="topnav">
    <a href="home.php">Home</a>
    <a href="#contact">Contact</a>
    <a href="login.php">User login</a>
    <a class="active" href="register.php">New Account</a>
    <a href="#about">About</a>
  </div>

<h1>Registration</h1>
<p>Please insert the following information</p>

    <form name = "nombre_form" action = "conexion.php" method = "post">
        <h4>Nomina</h4>
        <input type="text" name="nomina"></input>
        <h4>Nombre</h4>
        <input type="text" name="nombre"></input>
        <h4>Puesto</h4>
        <input type="text" name="puesto"></input>
        <h4>Horario</h4>
        <input type="text" name="horario"></input>
        <h4>Salario</h4>
        <input type="text" name="salario"></input>
        <h4>Sucursal</h4>
        <input type="text" name="sucursal"></input>

        <input type ="submit" name="Envia" value="Enviar Lolis"></input>

    </form>


<?php
// Show all information, defaults to INFO_ALL
//phpinfo();

// Show just the module information.
// phpinfo(8) yields identical results.
//phpinfo(INFO_MODULES);

?>
</body>
</html>
