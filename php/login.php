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

      echo $user;
      echo "<br>";
      echo $passw;

      $sql = "SELECT * FROM users WHERE username = '$user' AND pass = '$passw'";
      
      $result = mysql_query($con, $sql);
      $count = mysql_num_rows($result); 
      echo $result;
      echo $sql;
      echo "<br>";
      echo $count;
      if($count == 1){
        echo $user;
      echo "<br>";
      echo $passw;
          while($row = mysql_fetch_array($result)) {
              $name = $row['username'];
              $p= $row['pass'];
            }
            echo $name;
            echo $p;
       echo "<div class='alert alert-success'>
        <strong>¡Bienvenido! </strong><p>$name</p>
       </div>";
      }else{
          echo "<div class='alert alert-danger'>
            <strong>¡Error!</strong> <p>El usuario o la contraseña son incorrectas.</p>
          </div>";
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