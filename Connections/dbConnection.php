<?php
//DATABASE CONNECTION
$serverName = "localhost";
$userName = "root";
$password = "";
$myDB = "repositorio";

//Create connection
$conn = mysqli_connect($serverName, $userName, $password, $myDB);

if(!$conn) {
	echo "No se ha podido conectar con el servidor" . mysqli_error();
}
?>