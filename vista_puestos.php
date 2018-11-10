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

    <!-- Navigation -->
      <nav class="navbar navbar-expand-lg bg-secondary fixed-menu text-uppercase" id="mainNav">
        <div id="menu">
          <div class="menu-container">
            <nav>
              <div class="nav-fostrap">
                <ul>
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="vista_puestos.php">Ver puestos</a></li>
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
        <h1 class="text-uppercase mb-0">Vista de puestos</h1>
        <h2 class="font-weight-light mb-0">Busca el puesto que más te guste.</h2>
      </div>
    </header>

    <!-- Búsqueda de puesto -->
    <section class="select-puesto" id="empresa">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Filtrar busqueda</h2>
        <hr class="star-dark mb-5">
        <center>
          <div class="container-vista-puesto">
                <span class="icon-vista-puesto"><i class="fa fa-search"></i></span>
                <input type="search" id="search" placeholder="Buscar..." />
          </div>
          <div class="puesto">
              <h5 for="genero" class="propiedad">Tiempo:</h5>
              <input type="radio" value="None" id="radioOne" name="account" checked/>
              <label for="radioOne" class="radio" chec>Completo</label>
              <input type="radio" value="None" id="radioTwo" name="account" />
              <label for="radioTwo" class="radio">Parcial</label>            
          </div>
        </center>
      </div>
    </section>

    <section class="principal bg-terciary text-white mb-0" id="principal puestos-disponibles">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Puestos</h2>
        <hr class="star-dark">
        <div class="row">
          <?php 
            /////Conexión con la data//////////
            $hostname = "sql203.epizy.com";
            $database = "epiz_22952208_BD_BolsaEmpleo";
            $username = "epiz_22952208";
            $password = "progra";
            $con = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
            mysql_set_charset ("utf8", $con); 

            mysql_select_db($database, $con);
            $sql = "SELECT puesto, duracion, ubicacion, descripcion FROM Puestos";
            $rspubli = mysql_query($sql, $con) or die(mysql_error());
            $i = 1;
              while($row = mysql_fetch_assoc($rspubli)) {

                echo "<div class='col-md-6 col-lg-4'>
                      <a class='principal-item d-block mx-auto' href='#principal-modal-".$i."'>
                        <div class='principal-item-caption d-flex position-absolute h-442 w-400'>
                          <div class='principal-item-caption-content my-auto w-100 text-center text-white'>
                            <i class='fas fa-search-plus fa-3x'></i>
                          </div>
                        </div>
                           <table id='table-puestos'>
                              <tr>
                                <th id='head-puestos' height='75'>Nombre del puesto: ".$row["puesto"]." </th>
                              </tr>
                              <tbody id='body-puestos'>
                                <tr>
                                  <td height='50'>Duración: ".$row["duracion"]."</td>
                                </tr>
                                <tr>
                                 <td height='50'>Ubicación: ".$row["ubicacion"]."</td>
                                </tr>
                              </tbody>
                            <tfoot id='foot-puestos'>
                              <tr>
                                <td height='100'>Descripción: ".$row["descripcion"]."</td>
                              </tr>
                            </tfoot>
                          </table>
                      </a>
                    </div>
                    <div class='col-md-3 col-lg-4'></div>";
                    $i++;
          }
        ?>
          </div>           
        </div>    
      </div>

    </section>    

    <?php 
            /////Conexión con la data//////////
            $hostname = "sql203.epizy.com";
            $database = "epiz_22952208_BD_BolsaEmpleo";
            $username = "epiz_22952208";
            $password = "progra";
            $con = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 

            mysql_select_db($database, $con);
            $sql = "SELECT puesto, duracion, ubicacion, descripcion, imagen FROM Puestos";
            $rspubli = mysql_query($sql, $con) or die(mysql_error());
            $i = 1;
              while($row = mysql_fetch_assoc($rspubli)) {

                echo "<div class='principal-modal mfp-hide' id='principal-modal-".$i."'>
                      <div class='principal-modal-dialog bg-white'>
                        <a class='close-button d-none d-md-block principal-modal-dismiss' href='#'>
                          <i class='fa fa-3x fa-times'></i>
                        </a>
                        <div class='container text-center'>
                          <div class='row'>
                            <div class='col-lg-8 mx-auto'>
                              <h2 class='text-secondary text-uppercase mb-0'>".$row["puesto"]."</h2>
                              <img class='img-fluid img-margin mb-5' src=".$row["imagen"]." alt=''>
                              <p class='mb-5'>".$row["descripcion"]."</p>
                              <a class='btn btn-primary btn-lg rounded-pill principal-modal-dismiss img-margin' href='#'>
                                <i class='fa fa-close'></i>
                                Cerrar Puesto</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>";
                    $i++;
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