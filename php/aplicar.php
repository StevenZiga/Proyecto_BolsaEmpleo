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

  if (isset($_POST["save"])){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      $puesto = $_POST['puesto'];
      $empresa = $_POST['empresa'];
      $sql = "INSERT INTO Solicitudes (correoOferente, nomEmpresa, puesto) VALUES ('$varuser','$empresa','$puesto')";        
      $rspubli = mysql_query($sql, $con) or die(mysql_error());
      $result = mysqli_query($con,$sql);

      echo "<div class='alert alert-success'>
              <strong>Se aplico al puesto correctamente!</strong><p>Su información ha sido guardada exitosamente!</p>
            </div>";
    }else{
      echo "<div class='alert alert-danger'>
              <strong>Error al aplicar!</strong> <p>Asegurese de haber iniciado sesión!</p>
            </div>";
    }
  }else{
    echo "<div class='alert alert-info'>
            <strong>Aplica!</strong> <p>Dale click al puesto al deseas aplicar y presiona el boton 'Aplicar'!</p>
          </div>";
  }
?>