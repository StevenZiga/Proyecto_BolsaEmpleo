<?php 
    /////Conexión con la data//////////
    $hostname = "sql203.epizy.com";
    $database = "epiz_22952208_BD_BolsaEmpleo";
    $username = "epiz_22952208";
    $password = "progra";
    $con = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
    mysql_set_charset ("utf8", $con);
    
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

      if($cedula!="" && $empresa!="" && $password!="" && $email!="" && $phonenumber!="" && $studies!="" && $languages!="" && $provincia!="" && $canton!="" && $distrito!=""){

        mysql_select_db($database, $con);
        $sql = "INSERT INTO RegistroEmpresa (cedula, empresa, password, email, phonenumber, studies, languages, provincia, canton, distrito) VALUES ('$cedula','$empresa', '$password','$email', '$phonenumber','$studies', '$languages','$provincia', '$canton','$distrito')";
        $sqluser = "INSERT INTO users(username, pass) VALUES ('$email','$password')";
        $rspubli = mysql_query($sql, $con) or die(mysql_error());
        $result = mysqli_query($con,$sql);

        $rspubliuser = mysql_query($sqluser, $con) or die(mysql_error());
        $resultuser = mysqli_query($con,$sqluser);      

        echo "<div class='alert alert-success'>
                <strong>Registro completado!</strong><p>Empresa registrada correctamente!</p>
              </div>";
      }else{
        echo "<div class='alert alert-danger'>
                <strong>Error en el registro!</strong> <p>Verifique que todos los campos esten completados!</p>
              </div>";
      }
      }
    ?>