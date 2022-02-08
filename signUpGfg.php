<?php
include("connect.php");
// Get the user id
$inputRefler = $_REQUEST['reflerCode'];


if ($inputRefler !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($conn, "SELECT Fname
	 FROM login WHERE Id='$inputRefler'");

	$row = mysqli_fetch_array($query);

	// Get the  name
	$reflerName = $row["Fname"];
	$reflerName1 = $row["Fname"];

}

// Store it in a array
$result = array("$reflerName","$reflerName1");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>