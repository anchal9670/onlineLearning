<?php
session_start();
if($_SESSION["adminemail"] != true){
    
    header("Location: index.php");
    exit;
}
if(empty($_SESSION['adminemail'])):
    header('Location:index.php');
endif;
?>