<!DOCTYPE html>
<html>
<body>

<h3>TIME AND DATE PHP FUNCTION</h3>

<!-- TIME&DATE PHP FUNCTION -->
<?php
date_default_timezone_set("America/New_York"); //Obtener una zona horaria
echo "the time is " .date("h:i:s")."<br>"; //Hora
echo "today is ".date("Y.m.d")."<br>"; //Fecha
echo "today is ".date("l"); //Dia

?>

<h3>PHP FILE UPLOAD</h3>

<!-- PHP FILE UPLOAD -->
<form action="upload.php" method="post" enctype="multipart/form-data">
	Select image to upload:
	<input type="file" name="fileToUpload" id="fileToUpload"><br>
	<!-- Name: 
	<input type="text" name="name" value="File Name"><br> -->
	Enviar:
	<input type="submit" value="Upload Image" name="submit">
</form>

<footer>
	&copy; 2019 - <?php echo date("Y");?>
</footer>
</body>
</html>
