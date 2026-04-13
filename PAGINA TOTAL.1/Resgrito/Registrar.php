  <?php

  $Server="localhost";
  $Usuario="root";
  $Pass="";
  $Base_de_datos="pablo";

  $Conexiones = mysqli_connect($Server, $Usuario, $Pass, $Base_de_datos);


if (isset($_POST['Listo'])) {
      
  $Nombres=$_POST["Nombre"];
  $Emails=$_POST["Email"];
  $Passwords=$_POST["Contrasena"];
  $Dates=$_POST["Fecha"];

  $InserDatos = "INSERT INTO registrar (`UserID`,`Nombre`,`Correo`,`Password`,`Fecha`) VALUES (NULL,'$Nombres','$Emails','$Passwords','$Dates')";
  $Ejecutar = mysqli_query($Conexiones,$InserDatos);

      header("Location: http://localhost/PAGINA%20TOTAL/Resgrito/IniciarSe.php");
    exit();

  }

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Registrar</title>
      <link rel="stylesheet" href="Registrar.css">
      <link rel="shortcut icon" href="/IMG/logo.png" type="image/x-icon">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="hoja de estilo" integridad="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" origen cruzado="anónimo">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integridad="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" origen cruzado="anónimo"></script>

  </head>

  <body>

  <div class="Forma">   
    <DIV class="yin">
      <h3 class="logo" >Kiaüot</h3>
      <P>La ropa no te cubre — te revela.</P>
      <P>Vístete como la versión de ti que aún no has conocido.</P>
    </DIV>

  <form action="Registrar.php" method="POST" >
      <Div class="label">

          <h2>Registrar</h2>  
          <div class="Inputs">

          
            <input name="Nombre" required type="text"  placeholder="Name" >
            <label ></label>
          
            <input name="Email" required type="email"  placeholder="Name@example.com">
            <label ></label>

            <input name="Contrasena" required type="password"  placeholder="Password">
            <label ></label>

            <input name="Fecha" required type="date"  placeholder="DD/MM/AAAA">
            <label ></label>
      
            <Button class ="Listo" name = "Listo" type = "submit">
            LISTO
            </Button>
    

          </div> 
      </Div>
  </form>             
      
  


  

  </body>
  </html> 
  

  
