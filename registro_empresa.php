<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro Empresa - CUC</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

    <div id="sticky"></div>
      
    <!-- Header -->
    <header class="masthead bg-empleador text-green text-center">
      <div class="container">
        <center><div class="img-cuc" id="imagen-cuc">
        
        </div></center>
        <h1 class="text-uppercase mb-0">Registro de empresas</h1>
        <h2 class="font-weight-light mb-0">Se recibe con una cálida bienvenida a las nuevas empresas.</h2>
      </div>
    </header>

    <?php include 'php/empresa.php';?>
    <!-- Datos iniciales -->
    <section class="empresa" id="empresa">

    <form action="registro_empresa.php" method="post">
    <div class="container contenedor-registro">
      <h2 class="text-center text-uppercase text-secondary mb-0">Datos de la Empresa</h2><br><br>
      <center><img class="reg" src="img/otras/equipo.png"></center>
      <div id="accordion" role="tablist" aria-multiselectable="true">

                                    <!-- PARTE DESPLEGABLE 1-->                            
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h3 class="text-center text-uppercase text-secondary mb-0">Datos Generales</h3><br><br>
              </a>
            </h5>
          </div>

          <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-block">    
              <!--<form class="registro-oferente" method="POST" id="formulario">-->
        <!-- Lista de campos -->
            <!-- text -->
          <div class="fila">
            <input class="registro-oferente" type="ced" name="cedula" maxlength="9" size="11" pattern="[0-9]{9}" />
            <label for="cedula" class="propiedad">Cédula Jurídica</label>
          </div> 
          <div class="fila">
            <input class="registro-oferente" type="nombre" name="empresa" maxlength="30" size="30" required="required" autofocus="autofocus" />
            <label for="nombre" class="propiedad">Nombre Empresa</label>            
            <!--hidden -->
            <input class="registro-oferente" type="hidden" id="codigo" name="code" value="25" />
          </div>
          <!-- password -->
          <div class="fila">
            <input class="registro-oferente" type="password" name="password" size="30" required="required" />
            <label for="password" class="propiedad">Contraseña</label>
          </div>
          <!-- email -->
          <div class="fila">
            <input class="registro-oferente" type="email" name="email" maxlength="30" size="30" required="required" />
            <label for="email" class="propiedad">Email del contacto</label>
          </div>
          <!-- tel -->
          <div class="fila">
            <input class="registro-oferente" type="tel" name="phonenumber" maxlength="9" size="11" pattern="[0-9]{8}" required="required" />
            <label for="telefono" class="propiedad">Teléfono del contacto</label>
          </div>  
          <!-- select combo -->
          <div class="fila">
            <select id="estudios" name="studies" required="required">
              <option value="">- Seleccione -</option>
              <option value="Primaria">Primaria</option>
              <option value="Secundaria">Secundaria</option>
              <option value="Diplomado">Diplomado</option>
              <option value="Bachillerato">Bachillerato</option>
              <option value="Licenciatura">Licenciatura</option>
              <option value="Master">Master</option>
            </select>
            <label for="estudios" class="propiedad">Nivel mínimo de estudios por buscar</label>
          </div>
          <!-- select multiple -->
          <div class="fila">
            <select id="idiomas" name="languages" size="4" multiple="multiple" required="required" >
              <option value="">- Seleccione</option>
              <option value="Español">Español</option>
              <option value="Ingles">Inglés</option>
              <option value="Frances">Francés</option>
              <option value="Aleman">Alemán</option>
            </select>
            <label for="idiomas" class="propiedad">Idiomas necesarios</label>
          </div>
            </div>
          </div>
        </div>
               

                                        <!-- PARTE DESPLEGABLE 2-->
        <br>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h3 class="text-center text-uppercase text-secondary mb-0">Ubicación</h3><br><br>
                </a>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-block">         
                          <!-- select combo -->
                  <div class="fila">
                    <select id="provincia" name="provincia" required="required">
                      <option value="">- Seleccione -</option>
                      <option value="Cartago">Cartago</option>
                      <option value="San Jose">San Jose</option>
                      <option value="Alajuela">Alajuela</option>
                      <option value="Heredia">Heredia</option>
                      <option value="Limon">Limón</option>
                      <option value="Guanacaste">Guanacaste</option>
                      <option value="Puntarenas">Puntarenas</option>
                    </select>
                    <label for="provincia" class="propiedad">Provincia</label>
                  </div>
                  <!-- canton -->
                  <div class="fila">
                    <input class="registro-oferente" type="nombre" name="canton" size="11" />
                    <label for="canton" class="propiedad">Cantón</label>
                  </div>  
                  <!-- distrito -->
                  <div class="fila">
                    <input class="registro-oferente" type="nombre" name="distrito" size="11" />
                    <label for="distrito" class="propiedad">Distrito</label>
                  </div>                 
              </div>
            </div>
          </div>
      </div>  

      <div class="fila botonera">
        <button class="registro-oferente" type="submit" name="register">Registrarse</button>
        <button class="registro-oferente" type="reset">Borrar Campos</button>  
      </div>
    </div>
    </form>
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
    $("#sticky").load("jq/sticky_menu.html");
    ;
    $("#foot").load("jq/footer.html");
    ;
});
</script>