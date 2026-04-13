<?php

  $Server = "localhost";
  $Usuario = "root";
  $Contraseña = "";
  $Basededatos = "pablo";

  $Conexion = mysqli_connect($Server, $Usuario, $Contraseña, $Basededatos);


if (isset($_POST['Boton_Listo'])) {

$CorreoElectro = $_POST["Correo_electronico"];
$Contraseña_1 = $_POST["Contraseña"];

$insertardatos = "INSERT INTO `iniciar seccion`(`ID`,`Correo`,`Password`) VALUES ( NULL, '$CorreoElectro','$Contraseña_1')";
$Ejecutar = mysqli_query($Conexion,$insertardatos);


   header("Location: http://127.0.0.1:5500/MENU/Menu.HTML");
  exit();

 }

?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kairo — Iniciar Sesión</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@200;300;400;500&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="IniciarSe.css">
</head>
<body>

<div class="wrapper">

  <div class="panel-left">
    <span class="brand-name">Kiaüot</span>
    <span class="brand-tagline">Moda masculina</span>
    <div class="deco-line"></div>
    <p class="brand-quote">El estilo es una forma de decir quién eres sin hablar.</p>
  </div>

  <div class="panel-right">
    <p class="form-eyebrow">Bienvenido de nuevo</p>
    <h1 class="form-title">Iniciar<br>Sesión</h1>

<form action="IniciarSe.php" name="Iniciar_Seccion" method="POST"  >

    <div class="field">
    <input name = "Correo_electronico" required type="email" id="email" placeholder="tu@correo.com" autocomplete="email"/> 
    <label for="email">Correo electrónico</label>
     
    </div>

    <div class="field">
      <input name = "Contraseña" required type="password" id="password" placeholder="••••••••" autocomplete="current-password"/>
      <label for="password">Contraseña</label>
    </div>
 
  <button name="Boton_Listo" type="submit" class="btn-login">
    Iniciar Sesión
</button>
 
</form>


    

    <p class="form-footer">
      ¿No tienes cuenta? <a href="http://localhost/PAGINA%20TOTAL/Resgrito/Registrar.php#">Regístrate aquí</a>
    </p>
  </div>

</div>

</body>
</html>

