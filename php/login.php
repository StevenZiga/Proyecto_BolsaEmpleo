<?php 
  /////Conexión con la data//////////
  $hostname = "sql203.epizy.com";
  $database = "epiz_22952208_BD_BolsaEmpleo";
  $username = "epiz_22952208";
  $password = "progra";
  $con = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);  

  if(isset($_POST['acceder'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($con,$_POST['username']); 
    $password = mysqli_real_escape_string($con,$_POST['password']); 

    mysql_select_db($database, $con);
    $sql = "SELECT username FROM users WHERE username = '$username' and pass = '$password'";
    $result = mysql_query($con,$sql);

    $row = mysql_fetch_array($result);

    if($row['username']==$username && $row['pass']==$password){
      echo "<p>BIENVENIDO ".$row['username']."!</p>";
    }else{
      echo "ERROR AL INICIAR SESION!";
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