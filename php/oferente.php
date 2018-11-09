<?php 
    /////Conexión con la data//////////
    $hostname = "sql203.epizy.com";
    $database = "epiz_22952208_BD_BolsaEmpleo";
    $username = "epiz_22952208";
    $password = "progra";
    $con = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
    
    if(isset($_POST['register'])){
      $fullname = $_POST['fullname'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $phonenumber = $_POST['phonenumber'];
      $birthdate = $_POST['birthdate'];
      $nationality = $_POST['nationality'];
      $age = $_POST['age'];
      $placelive = $_POST['placelive'];
      $genero = $_POST['genero'];
      $studies = $_POST['studies'];
      $estudia = $_POST['estudia'];
      $languages = $_POST['languages'];
      $herramienta = $_POST['herramienta'];
      $nivelcono = $_POST['nivelcono'];
      $licencia = $_POST['licencia'];
      $vehiculo = $_POST['vehiculo'];
      $horario = $_POST['horario'];
      $earnings = $_POST['earnings'];
      $discapacidad = $_POST['discapacidad'];
      $curriculum = $_POST['curriculum'];

      if($fullname!="" && $password!="" && $email!="" && $phonenumber!="" && $birthdate!="" && $nationality!="" && $age!="" && $placelive!="" && $genero!="" && $studies!="" && $estudia!="" && $languages!="" && $herramienta!="" && $nivelcono!="" && $licencia!="" && $vehiculo!="" && $horario!="" && $earnings!="" && $discapacidad!="" && $curriculum!=""){
        mysql_select_db($database, $con);
        $sql = "INSERT INTO RegistroOferente (fullname, password, email, phonenumber, birthdate, nationality, age, placelive, genero, studies, estudia, languages, herramienta, nivelcono, licencia, vehiculo, horario, earnings,discapacidad, curriculum) VALUES ('$fullname','$password', '$email','$phonenumber', '$birthdate','$nationality', '$age','$placelive', '$genero','$studies', '$estudia','$languages', '$herramienta','$nivelcono', '$licencia','$vehiculo', '$horario','$earnings','$discapacidad','$curriculum')";
        $sqluser = "INSERT INTO users(username, pass) VALUES ('$email','$password')";
        $rspubli = mysql_query($sql, $con) or die(mysql_error());
        $result = mysqli_query($con,$sql);

        $rspubliuser = mysql_query($sqluser, $con) or die(mysql_error());
        $resultuser = mysqli_query($con,$sqluser);  

        echo "<div class='alert alert-success'>
                <strong>Registro completado!</strong><p>Su información ha sido guardada exitosamente!</p>
              </div>";
      }else{
        echo "<div class='alert alert-danger'>
                <strong>Error en el registro!</strong> <p>Verifique que todos los campos estén completados!</p>
              </div>";
      }
      }
  ?>