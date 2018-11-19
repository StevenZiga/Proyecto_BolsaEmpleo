<?php 
      $hostname = "sql203.epizy.com";
      $database = "epiz_22952208_BD_BolsaEmpleo";
      $username = "epiz_22952208";
      $password = "progra";
   
      $con=mysql_connect($hostname, $username, $password);
      mysql_set_charset ("utf8", $con);
      $cuadros = '';
      $modal = '';
      
      if(isset($_POST['searchcampo'])){
        $searchq = $_POST['searchcampo'];
        $searchq =  preg_replace("#[^0-9a-z]#i","",$searchq);

        mysql_select_db($database,$con);
        $query = mysql_query("SELECT * FROM Puestos WHERE puesto LIKE '%$searchq%'") or die(mysql_error());
        $count = mysql_num_rows($query);
        $i = 1;
          if($count == 0){
              $cuadros = 'No se ha encontrado ningun resultado';
          }else{
             
              while($row = mysql_fetch_array($query)) {

              $cuadros.= '<div class="col-md-6 col-lg-4">
                      <a class="principal-item d-block mx-auto" href="#" data-toggle="modal" data-target="#puesto'.$i.'">
                        <div class="principal-item-caption d-flex position-absolute h-442 w-400">
                          <div class="principal-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fas fa-search-plus fa-3x"></i>
                          </div>
                        </div>
                           <table id="table-puestos">
                              <tr>
                                <th id="head-puestos" height="75">Nombre del puesto: '.$row["puesto"].'</th>
                              </tr>
                              <tbody id="body-puestos">
                                <tr>
                                  <td height="50">Duración: '.$row["duracion"].'</td>
                                </tr>
                                <tr>
                                 <td height="50">Ubicación: '.$row["ubicacion"].'</td>
                                </tr>
                              </tbody>
                            <tfoot id="foot-puestos">
                              <tr>
                                <td height="100">Descripción: '.$row["descripcion"].'</td>
                              </tr>
                            </tfoot>
                          </table>
                      </a>
                    </div>';

              $modal.='<div class="modal fade" id="puesto'.$i.'" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                   <form action="puestos.php" method="POST">
                     <div class="modal-header">                     
                        <strong><h3 class="text-secondary text-orange mb-0">'.$row["puesto"].'</h3></strong>
                        <input type="hidden" readonly="true" name="puesto" value="'.$row["puesto"].'">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body tips">
                        <center><img class="img-fluid img-margin mb-5" src='.$row["imagen"].' alt="">
                        <p class="mb-5"><b>Descripción:</b> '.$row["descripcion"].'</p>
                        <p class="mb-5"><b>Duración:</b> '.$row["duracion"].'</p>
                        <p class="mb-5"><b>Ubicación:</b> '.$row["ubicacion"].'</p>
                        <p class="mb-5" name="empresa"><b>Empresa:</b> '.$row["empresa"].'</p></center>
                        <input readonly="true" type="hidden" name="empresa" value="'.$row["empresa"].'">
                      </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary" type="submit" name="save" id="save">Aplicar</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>';

            $modalcancel.='<div class="modal fade" id="puesto'.$i.'" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                 <form action="vista_puestos.php" method="POST">
                   <div class="modal-header">                     
                      <strong><h3 class="text-secondary text-orange mb-0">'.$row["puesto"].'</h3></strong>
                      <input type="hidden" readonly="true" name="puesto" value="'.$row["puesto"].'">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body tips">
                      <center><img class="img-fluid img-margin mb-5" src='.$row["imagen"].' alt="">
                      <p class="mb-5"><b>Descripción:</b> '.$row["descripcion"].'</p>
                      <p class="mb-5"><b>Duración:</b> '.$row["duracion"].'</p>
                      <p class="mb-5"><b>Ubicación:</b> '.$row["ubicacion"].'</p>
                      <p class="mb-5" name="empresa"><b>Empresa:</b> '.$row["empresa"].'</p></center></center>
                      <input readonly="true" type="hidden" name="empresa" value="'.$row["empresa"].'">
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>';

              $i++;  
          }
        }
    }


    if(isset($_POST['todos'])){
      header("Location: vista_puestos.php");
    }

  ?>  


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ver puestos disponibles</title>

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
  <?php
    session_start();
    //error_reporting(0);
    $varsesion = "";
    $varsesion = $_SESSION['user'];
  ?>
    <!-- Navigation -->
    <div id="sticky"></div>

    
    <!-- Header -->
    <header class="masthead bg_vistaPuestos text-orange text-center">
      <div class="container">
      <center><div class="img-cuc" id="imagen-cuc">
        
      </div></center>
        <h1 class="text-uppercase mb-0">Vista de puestos</h1>
        <h2 class="font-weight-light mb-0 text-white">Busca el puesto que más te guste.</h2>
      </div>
    </header>

    
     <form action="puestos.php" method="post">
      <section class="select-puesto" id="empresa">
        <div class="container">
          <h2 class="text-center text-uppercase text-secondary mb-0">Filtrar busqueda</h2>
          <hr class="star-dark mb-5">
          <center>
            <div class="container-vista-puesto">
                  <p>Ingrese el nombre del puesto a buscar.</p>
                  <input type="text" name="searchcampo" id="searchcampo" placeholder="Buscar..."><br>
                  <input type="submit" class="btn btn-primary" value="Buscar" name="buscar">
                  <input type="submit" class="btn btn-primary" value="Todos" name="todos">
            </div>
          </center>
        </div>
      </section> 
    </form>

    <?php include 'php/aplicar.php';?>

   <section class="principal bg-terciary text-white mb-0" id="principal puestos-disponibles">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Puestos</h2>
        <hr class="star-dark">
        <div class="row">
        <?php print ("$cuadros");?> 

        </div>    
      </div>
    </section>

    <?php if($varsesion == null || $varsesion == ''){
            print ("$modalcancel");
          }else if($varsesion != null || $varsesion != ''){
            print ("$modal");
          } 
    ?> 

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
    $("#sticky").load("jq/sticky_menu.php");
    ;
    $("#foot").load("jq/footer.html");
    ;
});
</script>