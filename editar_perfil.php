<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Actualización de Oferente - CUC</title>

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

<?php
  session_start();

  $varuser = $_SESSION["user"];

  $hostname = "sql203.epizy.com";
  $database = "epiz_22952208_BD_BolsaEmpleo";
  $username = "epiz_22952208";
  $password = "progra"; 

  $con = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
  mysql_set_charset ("utf8", $con); 

  mysql_select_db($database, $con);
  $sql = "SELECT * FROM RegistroOferente WHERE email ='$varuser'";
  $result = mysql_query($sql, $con) or die(mysql_error());
  $row = mysql_fetch_assoc($result);
  $rowsarray = mysql_fetch_array($result);
  
?>
    
    <!-- Header -->
    <header class="masthead bg-editar text-orange text-center">
      <div class="container">
      <center><div class="img-cuc" id="imagen-cuc">
        
      </div></center>
        <h1 class="text-uppercase mb-0 text-primary">Actualizar Oferente</h1>
        <h2 class="font-weight-light mb-0 text-white">Verifica o cambia tu información</h2><br>
      </div>
    </header>

    <!-- principal Grid Section -->
    <?php include 'php/actualizar_perfil.php';?>
    <section class="principal" id="principal">

    <div class="container contenedor-registro">
      <h2 class="text-center text-uppercase text-secondary mb-0">Datos del Usuario</h2><br><br>
      <center><img class="reg" src="img/otras/equipo.png"></center>
      <div id="accordion" role="tablist" aria-multiselectable="true">

        <form action="editar_perfil.php" method="post" enctype="multipart/form-data">
              <!-- PARTE DESPLEGABLE 1-->                            
          <div class="card">
            <div class="card-header" role="tab" id="headingOne">
              <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h3 class="text-center text-uppercase text-secondary mb-0">Datos Personales</h3><br><br>
                </a>
              </h5>
            </div>
      
            <!-- Lista de campos -->
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-block">
                
                <div class="fila">
                  <!-- text -->
                  <input class="registro-oferente" type="text" id="nombre" name="fullname" value="<?php echo utf8_encode($row['fullname']); ?>" maxlength="30" size="30" required="required" autofocus="autofocus" />
                  <label for="nombre" class="propiedad">Nombre Completo</label>
                  <!--hidden -->
                  <input class="registro-oferente" type="hidden" id="codigo" name="code" value="25" />
                </div>

                <div class="fila">
                  <!-- cedula -->
                  <input class="registro-oferente" type="text" name="idoferente" value="<?php echo utf8_encode($row['cedula']); ?>" maxlength="15" size="30" required="required" autofocus="autofocus" />
                  <label for="idoferente" class="propiedad">Cédula</label>
                  <!--hidden -->
                  <input class="registro-oferente" type="hidden" id="codigo" name="code" value="25" />
                </div>

                <!-- email -->
                <div class="fila">
                  <input class="registro-oferente" type="email" id="email"  name="email" value="<?php echo utf8_encode($row['email']); ?>" maxlength="30" size="30" />
                  <label for="email" class="propiedad">Email</label>
                </div>
                
                <!-- tel -->
                <div class="fila">
                  <input class="registro-oferente" type="tel" id="telefono" name="phonenumber" value="<?php echo utf8_encode($row['phonenumber']); ?>" maxlength="8" size="11" pattern="[0-9]{8}" />
                  <label for="telefono" class="propiedad">Teléfono</label>
                </div>
                
                <!-- date -->
                <div class="fila">
                  <input class="registro-oferente" type="date" id="fecha" name="birthdate" value="<?php echo utf8_encode($row['birthdate']); ?>" />
                  <label for="fecha" class="propiedad">Fecha de nacimiento</label>
                </div>

                <div class="fila">
                  <!-- nacionalidad -->
                  <input class="registro-oferente" type="text" id="nombre" name="nationality" value="<?php echo utf8_encode($row['nationality']); ?>" maxlength="30" size="30" required="required" autofocus="autofocus" />
                  <label for="nombre" class="propiedad">Nacionalidad</label>
                  <!--hidden -->
                  <input class="registro-oferente" type="hidden" id="codigo" name="code" value="25" />
                </div>
                
                <div class="fila">
                  <!-- Residencia -->
                  <input class="registro-oferente" type="text" id="nombre" name="placelive" value="<?php echo utf8_encode($row['placelive']); ?>" maxlength="30" size="30" required="required" autofocus="autofocus" />
                  <label for="nombre" class="propiedad">Lugar de residencia</label>
                  <!--hidden -->
                  <input class="registro-oferente" type="hidden" id="codigo" name="code" value="25" />
                </div>

                <!-- radio -->
                <div class="fila">
                  <div class="accounttype">
                    <input type="radio" value="Hombre" id="radioOne" name="genero" <?php echo ($row['genero']=='Hombre')?'checked':'' ?>>
                    <label for="radioOne" class="radio" chec>Hombre</label>
                    <input type="radio" value="Mujer" id="radioTwo" name="genero" <?php echo ($row['genero']=='Mujer')?'checked':'' ?>>
                    <label for="radioTwo" class="radio">Mujer</label>
                  </div>
                  <label for="genero" class="propiedad">Género</label>
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
                  <h3 class="text-center text-uppercase text-secondary mb-0">Datos Educativos</h3><br><br>
                </a>
              </h5>
            </div>

            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-block">         
                <!-- select combo -->
                <div class="fila">
                  <select id="estudios" name="studies" required="required">
                    <option value="">- Seleccione -</option>
                    <option value="Primaria" <?php if($row['studies']=='Primaria'){ echo "selected"; } ?>>Primaria</option>
                    <option value="Secundaria" <?php if($row['studies']=='Secundaria'){ echo "selected"; } ?>>Secundaria</option>
                    <option value="Diplomado" <?php if($row['studies']=='Diplomado'){ echo "selected"; } ?>>Diplomado</option>
                    <option value="Bachillerato" <?php if($row['studies']=='Bachillerato'){ echo "selected"; } ?>>Bachillerato</option>
                    <option value="Licenciatura" <?php if($row['studies']=='Licenciatura'){ echo "selected"; } ?>>Licenciatura</option>
                    <option value="Master" <?php if($row['studies']=='Master'){ echo "selected"; } ?>>Master</option>
                  </select>
                  <label for="estudios" class="propiedad">Nivel máximo de estudios</label>
                </div>

                <!-- radio -->
                <div class="fila">
                  <div class="accounttype">
                    <input type="radio" value="Si" id="estOne" name="estudia" <?php echo ($row['estudia']=='Si')?'checked':'' ?>>
                    <label for="estOne" class="radio" chec>Sí</label>
                    <input type="radio" value="No" id="estTwo" name="estudia" <?php echo ($row['estudia']=='No')?'checked':'' ?>>
                    <label for="estTwo" class="radio">No</label>
                  </div>
                  <label for="estudio" class="propiedad">Estudia actualmente</label>
                </div>   

                <!-- select multiple -->
                <!-- <div class="fila">
                  <select id="idiomas" name="languages" required="required" >
                    <option value="">- Seleccione</option>
                    <option value="Español" <?php //if($row['languages']!='Ingles' && $row['languages']!='Frances' && $row['languages']!='Aleman'){ echo "selected"; } ?>>Español</option>
                    <option value="Ingles" <?php //if($row['languages']=='Ingles'){ echo "selected"; } ?>>Inglés</option>
                    <option value="Frances" <?php //if($row['languages']=='Frances'){ echo "selected"; } ?>>Francés</option>
                    <option value="Aleman" <?php //if($row['languages']=='Aleman'){ echo "selected"; } ?>>Alemán</option>
                  </select>
                  <label for="idiomas" class="propiedad">Idiomas</label>
                </div>  -->


                <div>
                  <label for="idiomas" class="propiedad">Idiomas</label>
                  <div class="accounttype" align="center">
                  <?php
                    $lan=explode(",",$row['languages']);
                    $i=0;
                    $cont = count($lan);
                    while($i!=6){
                    
                      if($lan[$i]=='Espanol'){
                      ?>
                        <input type="checkbox" id="languagesOne" checked name="languages[]" value="Espanol">
                        <label for="languagesOne" class="radio">Español</label>
                      <?php } 
                      if($i==0 && $lan[$i]!='Espanol'){  ?>
                        <input type="checkbox" id="languagesOne" name="languages[]" value="Espanol">
                        <label for="languagesOne" class="radio">Español</label>
                      <?php } 
                      if($lan[$i]=='Ingles'){  ?>
                        <input type="checkbox" id="languagesTwo" checked name="languages[]" value="Ingles">
                        <label for="languagesTwo" class="radio">Inglés</label>
                      <?php } 
                      if($i==1 && $lan[$i]!='Ingles'){  ?>
                        <input type="checkbox" id="languagesTwo" name="languages[]" value="Ingles">
                        <label for="languagesTwo" class="radio">Inglés</label>
                      <?php } 
                      if($lan[$i]=='Frances'){  ?>
                        <input type="checkbox" id="languagesThree" checked name="languages[]" value="Frances">
                        <label for="languagesThree" class="radio">Francés</label>
                      <?php } 
                      if($i==2 && $lan[$i]!='Frances'){  ?>
                        <input type="checkbox" id="languagesThree" name="languages[]" value="Frances">
                        <label for="languagesThree" class="radio">Francés</label>
                      <?php } 
                      if($lan[$i]=='Aleman'){  ?>
                        <input type="checkbox" id="languagesFour" checked name="languages[]" value="Aleman">
                        <label for="languagesFour" class="radio">Alemán</label>
                      <?php } 
                      if($i==3 && $lan[$i]!='Aleman'){  ?>
                        <input type="checkbox" id="languagesFour" name="languages[]" value="Aleman">
                        <label for="languagesFour" class="radio">Alemán</label>
                      <?php } 
                      if($lan[$i]=='Italiano'){  ?>
                        <input type="checkbox" id="languagesFive" checked name="languages[]" value="Italiano">
                        <label for="languagesFive" class="radio">Italiano</label>
                      <?php } 
                      if($i==4 && $lan[$i]!='Italiano'){  ?>
                        <input type="checkbox" id="languagesFive" name="languages[]" value="Italiano">
                        <label for="languagesFive" class="radio">Italiano</label>
                      <?php } 
                      if($lan[$i]=='Mandarin'){  ?>
                        <input type="checkbox" id="languagesSix" checked name="languages[]" value="Mandarin">
                        <label for="languagesSix" class="radio">Mandarin</label>
                      <?php } 
                      if($i==5 && $lan[$i]!='Mandarin'){  ?>
                        <input type="checkbox" id="languagesSix" name="languages[]" value="Mandarin">
                        <label for="languagesSix" class="radio">Mandarin</label>
                      <?php
                            } 
                      $i++;
                    } 
                  ?>
                  </div>
                </div> 


                <!-- radio -->
                <div class="fila">
                  <div class="accounttype">
                    <input type="radio" value="Si" id="infoOne" name="herramienta" <?php echo ($row['herramienta']=='Si')?'checked':'' ?>>
                    <label for="infoOne" class="radio" chec>Sí</label>
                    <input type="radio" value="No" id="infoTwo" name="herramienta" <?php echo ($row['herramienta']=='No')?'checked':'' ?>>
                    <label for="infoTwo" class="radio">No</label>
                  </div>
                  <label for="herramienta" class="propiedad">Maneja herramientas informáticas</label>
                </div> 

                <!-- range -->
                <div class="fila">
                  <input type="range" id="conoc" name="nivelcono" min="0" max="100" step="10" value="<?php echo utf8_encode($row['nivelcono']); ?>" list="valores-cono" onchange="document.querySelector('#cono-output').value = value;">
                  <label for="conoc" class="propiedad">Nivel de conocimiento informática</label>
                  <p>%</p>
                  <output for="conoc" id="cono-output"><?php echo utf8_encode($row['nivelcono']); ?></output>
                  <datalist id="valores-cono">         
                    <option>10</option>
                    <option>20</option>
                    <option>30</option>
                    <option>40</option>
                    <option>50</option>
                    <option>60</option>
                    <option>70</option>
                    <option>80</option>
                    <option>90</option>
                    <option>100</option>
                  </datalist>
                </div>  
              </div>
            </div>
          </div>

                                          <!-- PARTE DESPLEGABLE 3-->
          <br>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h3 class="text-center text-uppercase text-secondary mb-0">Datos Laborales</h3><br><br> 
                </a>
              </h5>
            </div>

            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="card-block">                                        

                <!-- radio -->
                <div class="fila">
                  <div class="accounttype">
                    <input type="radio" value="Si" id="licOne" name="licencia" <?php echo ($row['licencia']=='Si')?'checked':'' ?>>
                    <label for="licOne" class="radio" chec>Sí</label>
                    <input type="radio" value="No" id="licTwo" name="licencia" <?php echo ($row['licencia']=='No')?'checked':'' ?>>
                    <label for="licTwo" class="radio">No</label>
                  </div>
                  <label for="licencia" class="propiedad">Posee licencia</label>
                </div>   

                <!-- radio -->
                <div class="fila">
                  <div class="accounttype">
                    <input type="radio" value="Si" id="vehOne" name="vehiculo" <?php echo ($row['vehiculo']=='Si')?'checked':'' ?>>
                    <label for="vehOne" class="radio" chec>Sí</label>
                    <input type="radio" value="No" id="vehTwo" name="vehiculo" <?php echo ($row['vehiculo']=='No')?'checked':'' ?>>
                    <label for="vehTwo" class="radio">No</label>
                  </div>
                  <label for="vehiculo" class="propiedad">Posee vehículo</label>
                </div>  

                <!-- select multiple -->
                <div class="fila">
                  <select id="idiomas" name="horario" required="required" >
                    <option value="">- Seleccione</option>
                    <option value="Diurno" <?php if($row['horario']=='Diurno'){ echo "selected"; } ?>>Diurno</option>
                    <option value="Nocturno" <?php if($row['horario']=='Nocturno'){ echo "selected"; } ?>>Nocturno</option>
                    <option value="Completo" <?php if($row['horario']=='Completo'){ echo "selected"; } ?>>Completo</option>
                    <option value="Parcial" <?php if($row['horario']=='Parcial'){ echo "selected"; } ?>>Parcial</option>
                    <option value="Todos" <?php if($row['horario']=='Todos'){ echo "selected"; } ?>>Todos</option>
                  </select>
                  <label for="horario" class="propiedad">Horario preferido</label>
                </div> 

                <!-- range -->
                <div class="fila">
                  <input type="range" id="salario" name="earnings" min="200000" max="1000000" step="100000" value="<?php echo utf8_encode($row['earnings']); ?>" list="valores-salario" onchange="document.querySelector('#salario-output').value = value;">
                  <label for="salario" class="propiedad">Salario deseado</label>
                  <p>₡</p>
                  <output for="salario" id="salario-output"><?php echo utf8_encode($row['earnings']); ?></output>
                  <datalist id="valores-salario">
                    <option>₡200.000</option>
                    <option>₡300.000</option>
                    <option>₡400.000</option>
                    <option>₡500.000</option>
                    <option>₡600.000</option>
                    <option>₡700.000</option>
                    <option>₡800.000</option>
                    <option>₡900.000</option>
                    <option>₡1.000.000</option>
                  </datalist>
                </div>    

                <!-- radio -->
                <div class="fila">
                  <div class="accounttype">
                    <input type="radio" value="Si" id="disOne" name="discapacidad" <?php echo ($row['discapacidad']=='Si')?'checked':'' ?>>
                    <label for="disOne" class="radio" chec>Sí</label>
                    <input type="radio" value="No" id="disTwo" name="discapacidad" <?php echo ($row['discapacidad']=='No')?'checked':'' ?>>
                    <label for="disTwo" class="radio">No</label>
                  </div>
                  <label for="discapacidad" class="propiedad">Posee alguna discapacidad</label>
                </div>  

              </div>
            </div>
          </div>   
              <br><br>
          <div class="fila botonera">
            <label class="registro-oferente" for="curriculum">Cambiar el curriculum</label>     
            <input class="registro-oferente" value="<?php echo utf8_encode($row['curriculum']); ?>" type="file" id="curriculum" name="curriculum" accept="doc/doc, doc/pdf"/>
          </div>

          <div class="fila botonera">
            <button class="registro-oferente" type="submit" name="actualizar">Actualizar</button>
            <button class="registro-oferente" type="reset">Descartar</button>  
          </div>
        </form>
      </div>
        
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