<?php 
      $hostname = "sql203.epizy.com";
      $database = "epiz_22952208_BD_BolsaEmpleo";
      $username = "epiz_22952208";
      $password = "progra";
      
      mysql_connect($hostname, $username, $password) or die("Error al conectarse");;

      mysql_select_db($database, $con) or die("Error al conectarse a la BD");;
      
      if(isset($_POST['search'])){
        $searchq = $_POST['search'];
        $searchq =  preg_replace("#[0-9a-z]#i","",$searchq);
        $query = mysql_query("SELECT * RegistroEmpresa WHERE empresa LIKE '%$searchq%", $con) or die(mysql_error());
        $count = mysql_num_rows($query);

          if($count == 0){
            $output = 'No se ha encontrado ningun resultado'
          }else{
            while($row = mysql_fetch_assoc($query)) {
              $name = $row['empresa'];

              $output .= '<div>'.$name. '<div>';
            }
        }
    }

     
  ?>   


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Empresas</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/estilo.min.css" rel="stylesheet">
    <link rel="icon" href="img/logos/logo-cuc-title.ico">

  </head>

  <body id="page-top">

    <!-- Navigation -->
      <nav class="navbar navbar-expand-lg bg-secondary fixed-menu text-uppercase" id="mainNav">
        <div id="menu">
          <div class="menu-container">
            <nav>
              <div class="nav-fostrap">
                <ul>
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="vista_puestos.php">Empresas</a></li>
                  <li><a href="ayuda.html">Ayuda</a></li>
                  <li><a href="#">Registro<span class="arrow-down"></span></a>
                    <ul class="dropdown">
                      <li><a href="registro_empresa.php">Empleadores</a></li>
                      <li><a href="registro_oferente.php">Oferentes</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Mi Cuenta<span class="arrow-down"></span></a>
                    <ul class="dropdown">
                      <li><a href="editar_perfil.html">Editar Perfil</a></li>
                      <li><a  href="#">Salir</a></li>
                    </ul>
                  </li>
                  <li><a href="inicio_sesion.php">Ingresar</a></li>
                </ul>
              </div>
              <div class="nav-bg-fostrap">
                <div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
                <a href="" class="title-mobile">Bolsa de Empleo</a>
              </div>
            </nav>
            <div class='content'>
            </div>
        </div>
        </div>
      </nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript"> 
        $(document).ready(function(){
        $('.navbar-fostrap').click(function(){
          $('.nav-fostrap').toggleClass('visible');
          $('body').toggleClass('cover-bg');
        });
      });
    </script>

    
    <!-- Header -->
    <header class="masthead bg_vistaPuestos text-orange text-center">
      <div class="container">
      <center><div class="img-cuc" id="imagen-cuc">
        
      </div></center>
        <h1 class="text-uppercase mb-0">Empresas</h1>
        <h2 class="font-weight-light mb-0">Listado de las empresas registradas.</h2>
      </div>
    </header>

    
    <form action="index.php" method="post">
      <input type="text" name="search" placeholder="Palabra Clave...">
      <input type="submit" value=">>">
    </form>


    <?php print ("$output");?>

    <!-- Búsqueda de puesto 
    <section class="select-puesto" id="empresa">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Filtrar busqueda</h2>
        <hr class="star-dark mb-5">
        <center>
          <div class="container-vista-puesto">
                <span class="icon-vista-puesto"><i class="fa fa-search"></i></span>
                <input type="search" id="search" placeholder="Buscar..." />
          </div>
        </center>
      </div>
    </section> -->


    <div id="foot"></div>

     <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#sticky").load("jq/sticky_menu.html");
    ;
    $("#foot").load("jq/footer.html");
    ;
});
</script>