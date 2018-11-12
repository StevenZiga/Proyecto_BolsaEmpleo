<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inicio de Sesión - CUC</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/estilo.min.css" rel="stylesheet">
    <link rel="icon" href="img/logos/logo-cuc-title.ico">
  </head>

  <body id="page-top">
   
    <div id="sticky"></div>

    <!-- Header -->
    <header class="masthead bg-inicio-sesion text-green text-center">
      <div class="container">
        <div class="img-cuc" id="imagen-cuc">
        
        </div>
        <h1 class="text-uppercase mb-0">Inicio de Sesión</h1>
        <h2 class="font-weight-light mb-0">¡Bienvenido de nuevo!</h2><br>
      </div>
    </header>
    <!-- principal Grid Section -->
    <section class="principal" id="principal">
      <div>
        <h2 class="text-center text-uppercase text-secondary mb-0">Credenciales</h2>
        <hr class="star-dark mb-5">
        <?php include 'php/login.php';?>
        <center><img src="img/otras/id.png"></center><br>
      </div>

      <div class="testbox">
        <h1 class="log-in">Acceso</h1>

         <form action="inicio_sesion.php" method="post">
            <label class="log-in" id="icon" for="us"><img src="img/otras/sobre.png"></label>
            <input class="log-in" type="text" name="username" placeholder="Email" required/>
            <label class="log-in" id="icon" for="pas"><img src="img/otras/escudo.png"></label>
            <input class="log-in" type="password" name="password" placeholder="Contraseña" required/>
            <button type="submit" class="registro-oferente" name="acceder">Acceder</button>
            <div class="registrologin-in">
                <p>¿No te has registrado aún?</p>
                <a href="http://bjbprueba.epizy.com/prueba/index.html#btn_ayuda">Registrate</a>
            </div>
        </form>
      </div>
    </section>  

    <div id="foot"></div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#sticky").load("jq/sticky_menu.php");
    ;
    $("#foot").load("jq/footer.html");
    ;
});
</script>