<?php 
    /////Conexión con la data//////////
    session_start();

    $varusuario = $_SESSION["user"];

    $hostname = "sql203.epizy.com";
    $database = "epiz_22952208_BD_BolsaEmpleo";
    $username = "epiz_22952208";
    $password = "progra";
    $con = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
    mysql_set_charset ("utf8", $con);
    
    if(isset($_POST['actualizar'])){
      $fullname = $_POST['fullname'];
      $cedofe = $_POST['idoferente'];
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
      //$curriculum = $_POST['curriculum'];

      if($fullname!="" && $cedofe!="" && $email!="" && $phonenumber!="" && $birthdate!="" && $nationality!="" && $age!="" && $placelive!="" && $genero!="" && $studies!="" && $estudia!="" && $languages!="" && $herramienta!="" && $nivelcono!="" && $licencia!="" && $vehiculo!="" && $horario!="" && $earnings!="" && $discapacidad!=""){
        mysql_select_db($database, $con);
        $sql = "UPDATE RegistroOferente SET fullname='$fullname' ,cedula='$cedofe' ,email='$email', phonenumber='$phonenumber' ,birthdate='$birthdate' , nationality='$nationality' ,age='$age' ,placelive='$placelive' ,genero='$genero' ,studies='$studies' ,estudia='$estudia' ,languages='$languages' ,herramienta='$herramienta' ,nivelcono='$nivelcono' ,licencia='$licencia' ,vehiculo='$vehiculo' ,horario='$horario' ,earnings='$earnings' ,discapacidad='$discapacidad' WHERE email='$varusuario'";

        $rspubli = mysql_query($sql, $con) or die(mysql_error());
        $result = mysqli_query($con,$sql);


        $mensaje='¡Actualización de perfil completada!';
        echo "<SCRIPT> alert('$mensaje'); </SCRIPT>";

        header("Refresh:0");

        echo "<div class='alert alert-success'>
                <strong>¡Actualización de perfil completada!</strong><p>Su información ha sido actualizada exitosamente.</p>
              </div>";
      }else{
        //echo "<div class='alert alert-danger'>
        //        <strong>¡Hubo un error con la actualización de sus datos!</strong><p>Verifique que todos los campos estén completados.</p>
        //      </div>";
        //header("Location: http://bjbprueba.epizy.com/prueba/editar_perfil.php");
        header("Refresh:0");

        $mensaje='¡Hubo un error con la actualización de sus datos!';
        echo "<SCRIPT> alert('$mensaje'); </SCRIPT>";
      }
      }
  ?>