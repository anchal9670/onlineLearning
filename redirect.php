<?php
session_start();
if($_SESSION["email"] != true){
    
    header("Location: index.php");
    exit;
}
if(empty($_SESSION['email'])):
    header('Location:index.php');
endif;
?>