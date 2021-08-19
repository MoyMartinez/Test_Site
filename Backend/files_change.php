<?php require_once('../Connections/dbConnection.php'); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	mysqli_select_db($conn, $myDB);
	//DELETE FILE SECTION------------------------------------------------------
	$SQL = "SELECT titulo, tipo 
			FROM files 
			WHERE modulo = 'section1'";
	$selectSQL = mysqli_query($conn, $SQL);
	$fileSQL = mysqli_fetch_assoc($selectSQL);
	$file = $fileSQL["titulo"].$fileSQL["tipo"];
	$fileLocation = 'uploads/';
	$fileLocation = $fileLocation.$file;
	unlink($fileLocation);
	//-------------------------------------------------------------------------
	$titulo = $_POST["titulo"];
	$section = $_POST["section"];
	#Code for upload file
	$uploads_dir = 'uploads/';
	$tipo=substr($_FILES['file']['name'], strrpos($_FILES['file']['name'],'.'));
	$valor=$titulo.$tipo;
	move_uploaded_file($_FILES['file']['tmp_name'], $uploads_dir.$valor);
	#Up to here
	$insertSQL = "UPDATE `files` 
				  SET `titulo` = '$titulo', `tipo` = '$tipo', `modulo` = '$section' 
  				  WHERE `modulo` = 'section1'";
  	if (mysqli_query($conn, $insertSQL)){
  		header("Location: files_change.php");
  	}else{
  		echo "Error adding record: " . mysqli_error($conn);
  	}
}
mysqli_select_db($conn, $myDB);
$query_qFile = "SELECT * FROM files 
				WHERE modulo = 'section1'";
$qFile = mysqli_query($conn, $query_qFile) or die(mysqli_error());
$row_qFile = mysqli_fetch_assoc($qFile);
$totalRows_qFile = mysqli_num_rows($qFile);
?>

<!DOCTYPE html>
<html>
<body>
<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="box-body">
		<!-- Envío de Sección -->
		<input type="hidden" name="section" value="section1">
                  
		<!-- Petición del Título -->
		<label for="titulo">Título</label>
		<input type="text" name="titulo" id="titulo" accesskey="t" tabindex="1" placeholder="Ingresa un título" class="form-control" style="width: 20%"/>

		<!-- Solicitud de Archivo -->
		<br>
		<input type="file" id="file" name="file" />

	</div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-default pull-left" name="enviar" id="enviar" value="Enviar" tabindex="3" >Guardar</button>
		<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
	</div>
</form>

<img class="img-responsive pad" src="uploads\<?php echo $row_qFile['titulo']?><?php echo $row_qFile['tipo'];?>" alt="<?php echo $row_qFile['titulo']?><?php echo $row_qFile['tipo'];?>">
</body>
</html>