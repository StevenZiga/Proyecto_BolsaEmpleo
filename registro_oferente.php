<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro Oferente - CUC</title>

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
   <header class="masthead bg-oferente text-orange text-center">
      <div class="container">
      <center><div class="img-cuc" id="imagen-cuc">
        
      </div></center>
        <h1 class="text-uppercase mb-0">Registro de Oferente</h1>
        <h2 class="font-weight-light mb-0 text-white">Estás a un paso de empezar con la búsqueda de empleo.<br>Por favor completa la información que se le solicita a continuación.</h2>
      </div>
    </header>

    <?php include 'php/oferente.php';?>
    <!-- principal Grid Section -->
    <section class="principal" id="principal">

    <div class="container contenedor-registro">
      <h2 class="text-center text-uppercase text-secondary mb-0">Datos del Usuario</h2><br><br>
      <center><img class="reg" src="img/otras/equipo.png"></center>
      <div id="accordion" role="tablist" aria-multiselectable="true">

        <form action="registro_oferente.php" method="post">

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
            
            <div class="fila">
              <!-- text -->
              <input class="registro-oferente" type="text" name="fullname" maxlength="30" size="30" required="required" autofocus="autofocus" />
              <label for="nombre" class="propiedad">Nombre Completo</label>
            <!--hidden -->
            <input class="registro-oferente" type="hidden" id="codigo" name="code" value="25" />
            </div>

            <div class="fila">
            <!-- cedula -->
            <input class="registro-oferente" type="text" name="idoferente" maxlength="15" size="30" required="required" autofocus="autofocus" />
            <label for="idoferente" class="propiedad">Cédula</label>
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
              <label for="email" class="propiedad">Email</label>
            </div>
            <!-- tel -->
            <div class="fila">
              <input class="registro-oferente" type="tel" name="phonenumber" maxlength="8" size="11" pattern="[0-9]{8}" required="required" />
              <label for="telefono" class="propiedad">Teléfono</label>
            </div>
            <!-- date -->
            <div class="fila">
              <input class="registro-oferente" type="date" name="birthdate" />
              <label for="fecha" class="propiedad">Fecha de nacimiento</label>
            </div>

            <div class="fila">
              <!-- nacionalidad -->
              <input class="registro-oferente" type="text" name="nationality" maxlength="30" size="30" required="required" autofocus="autofocus" />
              <label for="nombre" class="propiedad">Nacionalidad</label>
              <!--hidden -->
              <input class="registro-oferente" type="hidden" id="codigo" name="code" value="25" />
            </div>
            
            <div class="fila">
              <!-- Residencia -->
              <input class="registro-oferente" type="text" name="placelive" maxlength="30" size="30" required="required" autofocus="autofocus" />
              <label for="nombre" class="propiedad">Lugar de residencia</label>
              <!--hidden -->
              <input class="registro-oferente" type="hidden" id="codigo" name="code" value="25" />
            </div>

            <!-- radio -->
            <div class="fila">
              <div class="accounttype">
                <input type="radio" value="Hombre" id="radioOne" name="genero" checked/>
                <label for="radioOne" class="radio" chec>Hombre</label>
                <input type="radio" value="Mujer" id="radioTwo" name="genero" />
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
              <option value="Primaria">Primaria</option>
              <option value="Secundaria">Secundaria</option>
              <option value="Diplomado">Diplomado</option>
              <option value="Bachillerato">Bachillerato</option>
              <option value="Licenciatura">Licenciatura</option>
              <option value="Master">Master</option>
            </select>
            <label for="estudios" class="propiedad">Nivel máximo de estudios</label>
          </div>

          <!-- grid -->
          <div align="center" style="padding-top: 5%; padding-bottom: 5%;">
            <div align="center" style="padding-top: 5.5%; padding-left: 3%;">    
              <div class="ccc">
                <label for="year" class="propiedad">Año</label>
                <input class="registro-oferente" type="text" name="year" id="year" autofocus="autofocus" />           
              </div>
              <div class="ccc">
                <label for="titulo" class="propiedad">Titulo</label>
                <input class="registro-oferente" type="text" name="titulo" id="titulo" autofocus="autofocus" />
              </div>
              <div class="ccc">
                <label for="insti" class="propiedad">Institución</label>
                <input class="registro-oferente" type="text" name="insti" id="insti" autofocus="autofocus" /> 
              </div>          
            </div>

            <div align="center" style="padding-top: 3%; padding-left: 5%; padding-bottom: 3%">
              <button class="registro-oferente" name="add" onclick="addHtmlTableRow();">Agregar</button>
            </div>

            <table id="table" cellspacing="10" cellpadding="5" class="conte">
                  <tr>
                      <th><h1>Año</h1></th>
                      <th><h1>Titulo</h1></th>
                      <th><h1>Institución</h1></th>
                  </tr>
              </table>
          </div>

          <script>
            var rIndex,
            table = document.getElementById("table");

            function addHtmlTableRow(){
              //if(!checkEmptyInput()){
                var newRow = table.insertRow(table.length),
                cell1 = newRow.insertCell(0),
                cell2 = newRow.insertCell(1),
                cell3 = newRow.insertCell(2),
                year = document.getElementById("year").value,
                title = document.getElementById("titulo").value,
                institution = document.getElementById("insti").value;
            
                cell1.innerHTML = year;
                cell2.innerHTML = title;
                cell3.innerHTML = institution;

                selectedRowToInput();
              //}
            }

           // display selected row data into input text
            function selectedRowToInput(){                
                for(var i = 1; i < table.rows.length; i++){
                    table.rows[i].onclick = function(){
                      // get the seected row index
                      rIndex = this.rowIndex;
                      document.getElementById("year").value = this.cells[0].innerHTML;
                      document.getElementById("titulo").value = this.cells[1].innerHTML;
                      document.getElementById("insti").value = this.cells[2].innerHTML;
                    };
                }
            }
            selectedRowToInput();
          </script>

          <!-- radio -->
          <div class="fila">
            <div class="accounttype">
              <input type="radio" value="Si" id="estOne" name="estudia" checked/>
              <label for="estOne" class="radio" chec>Sí</label>
              <input type="radio" value="No" id="estTwo" name="estudia" />
              <label for="estTwo" class="radio">No</label>
            </div>
            <label for="estudio" class="propiedad">Estudia actualmente</label>
          </div>   

          <!-- select multiple -->
           <div>
            <label for="idiomas" class="propiedad">Idiomas</label>
            <div class="accounttype" align="center">
              <input type="checkbox" id="languagesOne" name="languages[]" value="Espanol">
              <label for="languagesOne" class="radio">Español</label>
              <input type="checkbox" id="languagesTwo" name="languages[]" value="Ingles">
              <label for="languagesTwo" class="radio">Inglés</label>
              <input type="checkbox" id="languagesThree" name="languages[]" value="Frances">
              <label for="languagesThree" class="radio">Francés</label>
              <input type="checkbox" id="languagesFour" name="languages[]" value="Aleman">
              <label for="languagesFour" class="radio">Alemán</label>
              <input type="checkbox" id="languagesFive" name="languages[]" value="Italiano">
              <label for="languagesFive" class="radio">Italiano</label>
              <input type="checkbox" id="languagesSix" name="languages[]" value="Mandarin">
              <label for="languagesSix" class="radio">Mandarin</label>
            </div>
          </div> 

          <!-- radio -->
          <div class="fila">
            <div class="accounttype">
              <input type="radio" value="Si" id="infoOne" name="herramienta" checked/>
              <label for="infoOne" class="radio" chec>Sí</label>
              <input type="radio" value="No" id="infoTwo" name="herramienta" />
              <label for="infoTwo" class="radio">No</label>
            </div>
            <label for="herramienta" class="propiedad">Maneja herramientas informáticas</label>
          </div> 

          <!-- range -->
          <div class="fila">
            <input type="range" id="conoc" name="nivelcono" min="0" max="100" step="10" value="50" list="valores-cono" onchange="document.querySelector('#cono-output').value = value;">
            <label for="conoc" class="propiedad">Nivel de conocimiento informática</label>
            <p>%</p>
            <output for="conoc" id="cono-output">50</output>
            <datalist id="valores-cono">         
              <option value="10%">10</option>
              <option value="20%">20</option>
              <option value="30%">30</option>
              <option value="40%">40</option>
              <option value="50%">50</option>
              <option value="60%">60</option>
              <option value="70%">70</option>
              <option value="80%">80</option>
              <option value="90%">90</option>
              <option value="100%">100</option>
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
              <input type="radio" value="Si" id="licOne" name="licencia" checked/>
              <label for="licOne" class="radio" chec>Sí</label>
              <input type="radio" value="No" id="licTwo" name="licencia" />
              <label for="licTwo" class="radio">No</label>
            </div>
            <label for="licencia" class="propiedad">Posee licencia</label>
          </div>   

          <!-- radio -->
          <div class="fila">
            <div class="accounttype">
              <input type="radio" value="Si" id="vehOne" name="vehiculo" checked/>
              <label for="vehOne" class="radio" chec>Sí</label>
              <input type="radio" value="No" id="vehTwo" name="vehiculo" />
              <label for="vehTwo" class="radio">No</label>
            </div>
            <label for="vehiculo" class="propiedad">Posee vehículo</label>
          </div>  

          <!-- select multiple -->
          <div class="fila">
            <select id="horario" name="horario" required="required" >
              <option value="">- Seleccione</option>
              <option value="Diurno">Diurno</option>
              <option value="Nocturno">Nocturno</option>
              <option value="Completo">Completo</option>
              <option value="Parcial">Parcial</option>
              <option value="Todos">Todos</option>
            </select>
            <label for="horario" class="propiedad">Horario preferido</label>
          </div> 

          <!-- range -->
          <div class="fila">
            <input type="range" id="salario" name="earnings" min="200000" max="1000000" step="100000" value="1000" list="valores-salario" onchange="document.querySelector('#salario-output').value = value;">
            <label for="salario" class="propiedad">Salario deseado</label>
            <p>₡</p>
            <output for="salario" id="salario-output">500000</output>
            <datalist id="valores-salario">
              <option value="200000">₡200.000</option>
              <option value="300000">₡300.000</option>
              <option value="400000">₡400.000</option>
              <option value="500000">₡500.000</option>
              <option value="600000">₡600.000</option>
              <option value="700000">₡700.000</option>
              <option value="800000">₡800.000</option>
              <option value="900000">₡900.000</option>
              <option value="1000000">₡1.000.000</option>
            </datalist>
          </div>    

          <!-- radio -->
          <div class="fila">
            <div class="accounttype">
              <input type="radio" value="Si" id="disOne" name="discapacidad" checked/>
              <label for="disOne" class="radio" chec>Sí</label>
              <input type="radio" value="No" id="disTwo" name="discapacidad" />
              <label for="disTwo" class="radio">No</label>
            </div>
            <label for="discapacidad" class="propiedad">Posee alguna discapacidad</label>
          </div>  

              </div>
            </div>
          </div>   
        <br><br>

        
        <div class="fila botonera">
          <label class="registro-oferente" for="curriculum">Subir curriculum</label>     
          <input class="registro-oferente" type="file" id="curriculum" name="curriculum" accept="doc/doc, doc/pdf"/>
        </div>

        <div class="fila botonera">
            <button class="registro-oferente" type="submit" name="register">Registrarse</button>
            <button class="registro-oferente" type="reset">Borrar Campos</button>  
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