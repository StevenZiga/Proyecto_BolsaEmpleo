<?php 
  $cookie_name = "loggedin";
  /////Conexión con la data//////////
  $hostname = "sql203.epizy.com";
  $database = "epiz_22952208_BD_BolsaEmpleo";
  $username = "epiz_22952208";
  $password = "progra"; 

  $con = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
  mysql_select_db($database);

  if(isset($_POST['acceder'])){

      $user = $_POST['username'];
      $passw = $_POST['password'];

      $sql = mysql_query("SELECT * FROM users WHERE username = '$user' AND pass = '$passw'") or die (mysql_error());
      $count = mysql_num_rows($sql);

      if($count == 0){
          echo "<div class='alert alert-danger'>
                  <strong>¡Error!</strong> <p>El usuario o la contraseña son incorrectas.</p>

                </div>";
      }else{
       // session_start();
        while($row = mysql_fetch_array($sql)) {
          $name = $row['username'];
          $p= $row['pass'];
       //   $_SESSION["user"]=$row['username'];
        }
       // $_SESSION['loggedin'] = 1;
        echo "<div class='alert alert-success'>
          <strong>¡Bienvenido! </strong><p>".$name."</p>
        </div>";
      //  print_r($_SESSION);
      }
  }
?>

<!--     if(isset($_POST['save'])){
      $user = $_POST['username'];
      $pass = $_POST['password'];
      mysql_select_db($database, $con);
      $sql = "INSERT INTO users (username, pass) VALUES ('$user','$pass')";
      $rspubli = mysql_query($sql, $con) or die(mysql_error());
      $result = mysqli_query($con,$sql);

      $message = 'Información agregada correctamente!';

      echo "<SCRIPT> alert('$message'); </SCRIPT>";
    }
  ?> -->