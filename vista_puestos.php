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

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a href="index.html"> <img src="img/logos/logo_cuc_menu.png"></a>
        <a class="navbar-brand js-scroll-trigger" href="index.html">Bolsa de empleo</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html">Inicio</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="vista_puestos.html">Ver puestos</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="ayuda.html">Ayuda</a>
            </li> 
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Registro</a>
                <ul class="sub-nav-list">
                  <li class="sub-nav-item mx-0 mx-lg-1">
                    <a class="sub-nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="registro_empresa.html">Empleadores</a>
                  </li>
                  <li class="sub-nav-item mx-0 mx-lg-1">
                    <a class="sub-nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="registro_oferente.html">Oferentes</a>
                 </li>
                </ul>
            </li> 
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Mi Cuenta</a>
                <ul class="sub-nav-list">
                  <li class="sub-nav-item mx-0 mx-lg-1">
                    <a class="sub-nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="editar_perfil.html">Editar Perfil</a>
                  </li>
                  <li class="sub-nav-item mx-0 mx-lg-1">
                    <a class="sub-nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Salir</a>
                 </li>
                </ul>
            </li>         
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="inicio_sesion.html">Ingresar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
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

<!------------------------------------------------------------------------------------->
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

    <!--PUESTO 1-->
    <div class="principal-modal mfp-hide" id="principal-modal-1">
      <div class="principal-modal-dialog bg-white">
        <a class="close-button d-none d-md-block principal-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Contador</h2>
              <img class="img-fluid img-margin mb-5" src="img/jobs/contador.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill principal-modal-dismiss img-margin" href="#">
                <i class="fa fa-close"></i>
                Cerrar Puesto</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--PUESTO 2-->
    <div class="principal-modal mfp-hide" id="principal-modal-2">
      <div class="principal-modal-dialog bg-white">
        <a class="close-button d-none d-md-block principal-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Administrador de Empresas</h2>
              <img class="img-fluid img-margin mb-5" src="img/jobs/empresa.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill principal-modal-dismiss img-margin" href="#">
                <i class="fa fa-close"></i>
                Cerrar Puesto</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--PUESTO 3-->
    <div class="principal-modal mfp-hide" id="principal-modal-3">
      <div class="principal-modal-dialog bg-white">
        <a class="close-button d-none d-md-block principal-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Asistente Administrativo</h2>
              <img class="img-fluid img-margin mb-5" src="img/jobs/support.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill principal-modal-dismiss img-margin" href="#">
                <i class="fa fa-close"></i>
                Cerrar Puesto</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--PUESTO 4-->
    <div class="principal-modal mfp-hide" id="principal-modal-4">
      <div class="principal-modal-dialog bg-white">
        <a class="close-button d-none d-md-block principal-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Programador en C++</h2>
              <img class="img-fluid img-margin mb-5" src="img/jobs/codificacion.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill principal-modal-dismiss img-margin" href="#">
                <i class="fa fa-close"></i>
                Cerrar Puesto</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Administración y Programación de Sitios Web</h4>     
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Grupo 02</h4>
            <p class="lead mb-0">Jose Manuel Altamirano<br>Brayan Brenes<br>Steven Zúñiga</p>
          </div><br><br>
          <div class="col-md-4">
            <img class="img-fluid" src="img/logos/logo_cuc_footer.png" alt="">
          </div>
        </div>
      </div>
    </footer>
    
    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; JBS 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

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
