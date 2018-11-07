<?php 
    /////Conexión con la data//////////
    $hostname = "sql203.epizy.com";
    $database = "epiz_22952208_BD_BolsaEmpleo";
    $username = "epiz_22952208";
    $password = "progra";
    $con = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
    
    if(isset($_POST['register'])){
      $cedula = $_POST['cedula'];
      $empresa = $_POST['empresa'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $phonenumber = $_POST['phonenumber'];
      $studies = $_POST['studies'];
      $languages = $_POST['languages'];
      $provincia = $_POST['provincia'];
      $canton = $_POST['canton'];
      $distrito = $_POST['distrito'];

      mysql_select_db($database, $con);
      $sql = "INSERT INTO RegistroEmpresa (cedula, empresa, password, email, phonenumber, studies, languages, provincia, canton, distrito) VALUES ('$cedula','$empresa', '$password','$email', '$phonenumber','$studies', '$languages','$provincia', '$canton','$distrito')";
      $rspubli = mysql_query($sql, $con) or die(mysql_error());
      $result = mysqli_query($con,$sql);

      $message = 'Empresa registrada correctamente!';

      echo "<SCRIPT> alert('$message'); </SCRIPT>";
    }
  ?>