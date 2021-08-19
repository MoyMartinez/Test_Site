<!DOCTYPE html>
<html>
<body>

<h1>I'm learning PHP language</h1>
<h2>Meanwhile using HTML and PHP actually</h2>

<?php
$txt = "PHP";
$color = "red";
$x = 5;
$y = 4;

//This is a single-line comment
echo "I love $txt <br>";
echo "My car is " .$color. " and use a . for concatenar <br>";
#This is also a single-line comment
echo $x + $y;
?>

<!-- <?php //CODIGO COMENTADO 
$x2 = 5;
$x3 = 1;
$y3 = 2;
$x4 = 5;
$y4 = 10;

function myTest(){
    $y2 = 4;

    echo "<p>Variable x inside function is: $y2</p>";
    //This must be 3
    global $x3, $y3;
    $y3 = $y3 + $x3;
    $GLOBALS['x4'] = $GLOBALS['x4'] + $GLOBALS['y4'];

    static $x5 = 0;
    echo $x5;
    $x5++;
}

myTest();
echo $y3;
echo "<br>";
echo $x4;

?> -->

<!-- <?php 

echo "<h2>" .$txt. "</h2>";
print "Text using print <br>";

$entero = 1234;
var_dump($entero); #Funcion devuelve el tipo y valor de los datos

echo "<br>";
$carSet = array("Volvo", "Nissan", "BMW");
var_dump($carSet);

class Car {
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "My car is a " .$this->color. " " .$this->model. "!";
    }
}

$myCar = new Car("black", "Volvo");
echo "<br>";
echo $myCar -> message();
echo "<br>";
// var_dump($myCar);
echo strlen("$entero");#Funcion devuelve la longitud de la cadena
echo str_word_count("Hola, yo soy 3");#Funcion devuelve la cantidad de palabras en una cadena
echo strrev("Holi mundi");#Devuelve texto al reves
echo strpos("Vamos encuentrame prro","prro");#Encuentra posicion de una palabra
echo "<br>";
echo str_replace("mundo", "prro", "hola mundo pervertivo");
?> -->

<!-- PRUEBA DE USO DE FUNCIONES Y PARTE DE USO DE VARIABLE SUPERGLOBAL $_SERVER-->

<!-- <?php
echo "<br>";
$t = date("H");
echo $t;

$m = 5;
$n = 21;

function addition(){
    $GLOBALS['z'] = $GLOBALS['m'] + $GLOBALS['n'];
}
addition();
echo $z;

echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['QUERY_STRING'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?> -->
<!-- ================================================= -->

<!-- PRUEBA DE FORMULARIO USANDO METODO REQUEST Y POST-->
<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form> -->

<!-- <?php
echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname']; //Tambien se puede utilizar el método REQUEST
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?> -->
<!-- ================================================= -->

<!-- PRUEBA DE FORMULARIO-->

<!-- <a href="testGet.php?name=Moises&lastName=Martinez">Test $GET</a>
<form method="post" action="testGet.php">
  Name: <input type="text" name="name">
  Last Name: <input type="text" name="lastName">
  <input type="submit">
</form> -->
<!-- ================================================= -->

</body>
</html>
