<?php
// Initialize the session
$server="localhost";
$username="root";
$password="";
$database="binary";
// $server="sql301.epizy.com";
// $username="epiz_28243813";
// $password="35idntYxrd0ZvM";
// $database="epiz_28243813_binary";
$conn=mysqli_connect($server,$username,$password,$database);
// if(!$conn){
//     die("connection to this data base failed due to".mysqli_connect_error());
// }
// else {
//     echo "sucess";
// }
?>