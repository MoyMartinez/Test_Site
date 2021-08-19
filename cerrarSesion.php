<?php
session_start();
session_destroy();
echo "hola bitch";
header('Location: login.php');	
?>