<?php
   session_start();

  if(isset($_SESSION['loggedin']) && !empty($_SESSION['loggedin'])) {
    // echo "<div class='alert alert-info'>
    //         <strong>¡Perfil!</strong><p>Este es el perfil de:".$_SESSION["user"]."</p>
    //       </div>";
    print_r($_SESSION);
    return true;
  }else {
    return false;
  }

  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['loggedin']);
    header("location:inicio_sesion.php");
  }

   // include('config.php');
   // session_start();
   
   // $user_check = $_SESSION['username'];
   
   // $ses_sql = mysql_query($con,"select username from users where username = '$user_check' ");
   
   // $row = mysql_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   // $login_session = $row['username'];
   
   // if(!isset($_SESSION['username'])){
   //    header("location:login.php");
   //    $message = 'BIENVENIDO '.$login_session.'!';

   //    echo "<SCRIPT> alert('$message'); </SCRIPT>";
   //}
?>