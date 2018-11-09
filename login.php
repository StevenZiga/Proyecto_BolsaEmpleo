<?php 
  $cookie_name = "loggedin";
  /////Conexión con la data//////////
  $hostname = "sql203.epizy.com";
  $database = "epiz_22952208_BD_BolsaEmpleo";
  $username = "epiz_22952208";
  $password = "progra"; 

  $con = mysql_connect($hostname, $username, $password, $database);

  if(isset($_POST['acceder'])){

      $user = $_POST['username'];
      $passw = $_POST['password'];

      $sql = "SELECT * FROM users WHERE username = '$user' AND pass = '$passw';";
      
      $result = mysql_query($con, $sql);
      $count = mysql_num_rows($result); 

      if($count == 1){
        $cookie_value = $user;
        setcookie($cookie_name, $cookie_value, time() + (180), "/");
        header("location:personal.php");
      }else{
        echo "Username or password is incorrect!";
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