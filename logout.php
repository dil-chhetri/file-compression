<?php 
session_start();
if(isset($_SESSION['auth'])){
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
  
}
header('location: index.php');
?>