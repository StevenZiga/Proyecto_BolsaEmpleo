<!-- Navigation 
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

-->

<?php
  session_start();
  //error_reporting(0);
  $varsesion = "";
  $varsesion = $_SESSION['user'];


?>
  <nav class="navbar navbar-expand-lg bg-secondary fixed-menu text-uppercase" id="mainNav">
    <div class="bolsaempleo">
        <h4>Bolsa de Empleo</h4>
    </div>
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
              <?php if($varsesion == null || $varsesion == ''): ?>
                  <li><a href="inicio_sesion.php">Ingresar</a></li>
              <? endif ?>
              <?php if($varsesion != null || $varsesion != ''): ?>
                  <li><a href="#">Mi Cuenta<span class="arrow-down"></span></a>
                    <ul class="dropdown">
                      <li><a href="editar_perfil.php">Editar Perfil</a></li>
                      <li><a href="cerrar_sesion.php">Salir</a></li>
                    </ul>
                  </li>
              <?php endif ?>      
             
            </ul>
          </div>
          <div class="nav-bg-fostrap">
            <div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
            <a href="#" class="title-mobile">Bolsa de Empleo</a>
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

    <!--
      <li class="nav-item mx-0 mx-lg-1">
        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="registro_puestos.html">Puesto Nuevo</a>
      </li>
      -->