<?php require_once('Connections/dbConnection.php');?>
<?php
session_start();
 
if(!isset($_SESSION['user'])){
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<body>

<h1>Hi, this is my index</h1>
<h2>This Is my first change</h2>
This is my thirst change  Modificacion
and this is my fourth change

Welcome <?php echo $_SESSION['user'];?><br><br>
<a href="cerrarSesion.php">Cerrar sesión</a>
</body>
</html>


Cambios en la segunda rama oh ci oh ci
Texto añadido desde Git Hub Browser
