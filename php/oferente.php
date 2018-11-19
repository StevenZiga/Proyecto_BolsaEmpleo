<?php 
    /////Conexión con la data//////////
    $hostname = "sql203.epizy.com";
    $database = "epiz_22952208_BD_BolsaEmpleo";
    $username = "epiz_22952208";
    $password = "progra";
    $con = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
    mysql_set_charset ("utf8", $con);
    
    if(isset($_POST['register'])){
      $fullname = $_POST['fullname'];
      $cedofe = $_POST['idoferente'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $phonenumber = $_POST['phonenumber'];
      $birthdate = $_POST['birthdate'];
      $nationality = $_POST['nationality'];
      //$age = $_POST['age'];
      $placelive = $_POST['placelive'];
      $genero = $_POST['genero'];
      $studies = $_POST['studies'];
      $estudia = $_POST['estudia'];
      $languages = $_POST['languages'];
      $lan=implode(",", $languages);
      $herramienta = $_POST['herramienta'];
      $nivelcono = $_POST['nivelcono'];
      $licencia = $_POST['licencia'];
      $vehiculo = $_POST['vehiculo'];
      $horario = $_POST['horario'];
      $earnings = $_POST['earnings'];
      $discapacidad = $_POST['discapacidad'];
      $curriculum = $_POST['curriculum'];

      $dob = new DateTime($birthdate);
      $now = new DateTime();
      $difference = $now->diff($dob);
      $age=$difference->y;

      if($fullname!="" && $cedofe!="" && $password!="" && $email!="" && $phonenumber!="" && $birthdate!="" && $nationality!="" && $placelive!="" && $genero!="" && $studies!="" && $estudia!="" && $herramienta!="" && $nivelcono!="" && $licencia!="" && $vehiculo!="" && $horario!="" && $earnings!="" && $discapacidad!="" && $curriculum!=""){
        mysql_select_db($database, $con);
        $sql = "INSERT INTO RegistroOferente (fullname,cedula ,password, email, phonenumber, birthdate, nationality, age, placelive, genero, studies, estudia, languages, herramienta, nivelcono, licencia, vehiculo, horario, earnings,discapacidad, curriculum) VALUES ('$fullname','$cedofe' ,'$password', '$email','$phonenumber', '$birthdate','$nationality', '$age','$placelive', '$genero','$studies', '$estudia', '$lan', '$herramienta','$nivelcono', '$licencia','$vehiculo', '$horario','$earnings','$discapacidad','$curriculum')";
        $sqluser = "INSERT INTO users(username, pass) VALUES ('$email','$password')";
        $rspubli = mysql_query($sql, $con) or die(mysql_error());
        $result = mysqli_query($con,$sql);

        $rspubliuser = mysql_query($sqluser, $con) or die(mysql_error());
        $resultuser = mysqli_query($con,$sqluser);  

        echo "<div class='alert alert-success'>
                <strong>¡Registro completado!</strong><p>Su información ha sido guardada exitosamente.</p>
              </div>";
      }else{
        echo "<div class='alert alert-danger'>
                <strong>¡Error en el registro!</strong><p>Verifique que todos los campos estén completados.</p>
              </div>";
      }
      }
  ?>