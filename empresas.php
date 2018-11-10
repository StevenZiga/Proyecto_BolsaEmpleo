<?php 
      $hostname = "sql203.epizy.com";
      $database = "epiz_22952208_BD_BolsaEmpleo";
      $username = "epiz_22952208";
      $password = "progra";
   
      mysql_connect($hostname, $username, $password);
      mysql_select_db($database);
      $output = '';
      
      if(isset($_POST['search'])){
        $searchq = $_POST['search'];
        $searchq =  preg_replace("#[^0-9a-z]#i","",$searchq);

        $query = mysql_query("SELECT * FROM RegistroEmpresa WHERE empresa LIKE '%$searchq%'") or die(mysql_error());
        $count = mysql_num_rows($query);

          if($count == 0){
              $output = 'No se ha encontrado ningun resultado';
          }else{
             
              while($row = mysql_fetch_array($query)) {
              $name = $row['empresa'];

              $output.='<div>'.$name.'</div>';
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
    <div id="sticky"></div>

    
    <!-- Header -->
    <header class="masthead bg_vistaPuestos text-orange text-center">
      <div class="container">
      <center><div class="img-cuc" id="imagen-cuc">
        
      </div></center>
        <h1 class="text-uppercase mb-0">Empresas</h1>
        <h2 class="font-weight-light mb-0">Listado de las empresas registradas.</h2>
      </div>
    </header>

    
    <form action="empresas.php" method="post">
      <input type="text" name="search" placeholder="Palabra Clave...">
      <input type="submit" value=">>" name="buscar">
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