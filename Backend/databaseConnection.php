<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$myDB = "mydb";

//Create connection
$conn = mysqli_connect($serverName, $userName, $password, $myDB);

if(!$conn) {
	echo "No se ha podido conectar con el servidor" . mysql_error();
 }//else{
// 	echo "Hemos conectado al servidor <br>";
// }

//Check connection
if($conn->connect_error){
	die("Connection failed" . mysqli_connect_error());
}

//Create database -----------------------------------------------------
/*$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)){
	echo "Database created successfully";
}else{
	echo "Error!". mysqli_error($conn);
	}
mysqli_close($conn);*/

//sql to create table ---------------------------------------------------
/*$sql = "CREATE TABLE MyGuests(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
	echo "Table MyGuests created succesfully";
}else{
	echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);*/

//sql to insert data in tables -----------------------------------------------
/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Moy', 'Martínez', 'moises.martinez@ulv.edu.mx')
";

if (mysqli_query($conn, $sql)) {
	echo "New record created succesfully";
}else{
	echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);*/

//sql to insert and show id -----------------------------------------------
/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
  $last_id = mysqli_insert_id($conn);
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);**/

//sql to insert multiquery -----------------------------------------------
/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Me', 'Again', 'me.again@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);*/

//php mysql prepared statements --------------------------------------------
// prepare and bind
/*$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "Michael";
$lastname = "Johnes";
$email = "michael@example.com";
$stmt->execute();

$firstname = "Melani";
$lastname = "Trump";
$email = "mtrump@example.com";
$stmt->execute();

$firstname = "Donald";
$lastname = "Shit";
$email = "dshit@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();*/

//php mysql select --------------------------------------------
//we can use a WHERE for filter results (WHERE lastname = 'Doe')
//we can use ORDER BY for order results (ORDER BY lastname)
//we can use a DELETE for delete results (DELETE FROM MyGuests WHERE)
//we can use a UPDATE for update results (UPDATE MyGuests WHERE)

$sql = "SELECT id, firstname, lastname, email 
		FROM MyGuests";
$result = mysqli_query($conn, $sql);

/*$sqlUpdate ="UPDATE MyGuests 
			 SET firstname = 'Monica' 
			 WHERE id = 4";
if (mysqli_query($conn, $sqlUpdate)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}*/

/*$sqlDelete = "DELETE FROM MyGuests WHERE id = 3";
if (mysqli_query($conn, $sqlDelete)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}*/

//showing in a simple view
/*if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}*/

//Using a HTML table
if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td><td>".$row["email"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}


mysqli_close($conn);

?>