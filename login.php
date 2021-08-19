<?php require_once('Connections/dbConnection.php');?>
<?php
$userError = "";
//VALIDATION
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $_POST["txtusuario"];
	$pass = $_POST["txtpassword"];
	//$name = "Moy";
	//$pass = "micontra";

	$query = mysqli_query($conn, "SELECT * FROM users WHERE user = '".$name."' and password = '".$pass."'");
	$nr = mysqli_num_rows($query);

	if($nr == 1){
		session_start();
		$_SESSION['user'] = $name;
		if(isset($_SESSION['user'])){
			echo "Bienvenido bitch: " .$name;
			header("Location: index.php");
		}
	}elseif ($nr == 0) {
		//header("Location: login.php");
		$userError = "* Unauthorized User";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
	<title>Login</title>
</head>
<body>
<center>
<h1>LoginTest</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<span class="error"><?php echo $userError;?></span>
	Usuario:<br>
	<input type="text" name="txtusuario" placeholder="Ingresa tu usuario" /><br><br>
	Password:<br>
	<input type="password" name="txtpassword" placeholder="Ingresa tu contraseña" /><br><br>
	<input type="submit" Value="Ingresar" />
</form>
</center>
</body>
</html>