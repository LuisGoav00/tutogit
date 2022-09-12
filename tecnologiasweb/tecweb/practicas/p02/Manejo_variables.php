<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Document</title>
</head>
<body>
  
<?php   
/*******************1*********************/
$_myvar = 1;
  $myvar = 2;
 $_7var = 3;
$_element1 = 4;
    echo "*******************1*********************<br><br>";
    echo "las variables _myvar,  myvar, _7var y _element1 son validas \n";
    echo "las demas no son validas debido a que no se puede tener un numero o simbolo en las variables y
    en el caso de las variables que empieza con _ es valida porque empieza con un caracter de subrayado";
    echo "<br>";
    echo "$_myvar,$myvar,$_7var,$_element1 <br>";

    /*******************2*********************/
echo "*******************2*********************<br><br>";
$a = "ManejadorSQL2";
$b = 'MySQL';
$c = &$a;

echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
echo "<br>";

$a = "PHP server";
$b = &$a;
echo "Mostrando contenido de nuevo... <br>";
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
echo "¿Que sucedio?<br>";
echo "Al agregar otro valor a la variable a, modificamos su contenido y
y al referenciar la variable b a la variable a, estamos mostrando el valor
de la variable a y como la variable c ya estaba referenciando a la variable a,
todas las variables muestran el mismo resultado.<br>";
unset($c);
unset($b);
unset($a);


/*******************3*********************/
echo "*******************3*********************<br><br>";
$a = "PHP5";
echo $a;
echo "<br>";

$z[] = &$a;
var_dump($z);
echo "<br><br>";

$b = "5a version de PHP";
echo $b;
echo "<br><br>";

$c = $b*10;
echo $c;
echo "<br><br>";

$a .= $a;
echo $a;
echo "<br>";

$b *= $c;
echo $b;
echo "<br>";

$z[0] = "MySQL";
var_dump($z);
echo "<br>";


/*******************4*********************/
echo "*******************4*********************<br><br>";
function mostrar() {
  echo 'variable $a: ' . $GLOBALS['a'] . "<br>";
  echo 'variable $b: ' . $GLOBALS['b'] . "<br>";
  echo 'variable $c: ' . $GLOBALS['c'] . "<br>";
  echo 'variable $z: ' . $GLOBALS['z'] . "<br>";
  
}
  mostrar();
  echo "<br><br>";
  unset($a);
  unset($b);
  unset($c);
  unset($z);

  /*******************5*********************/
echo "*******************5*********************<br><br>";
$a = "7 personas";
var_dump($a);
echo "<br>";

$b = (integer) $a;
var_dump($b);
echo "<br>";

$a = "9E3";
var_dump($a);
echo "<br>";

$c = (double) $a;
var_dump($c);
echo "<br><br>";


/*******************6*********************/
echo "*******************6*********************<br><br>";
$a = "0";
var_dump($a);
echo "<br>";

$b = "TRUE";
var_dump($b);
echo "<br>";

$c = FALSE;
var_dump($c);
echo "<br>";

$d = ($a OR $b);
var_dump($d);
echo "<br>";

$e = ($a AND $c);
var_dump($e);
echo "<br>";

$f = ($a XOR $b);
var_dump($f);
echo "<br>";

echo "Cambiando la variable c de false a true  <br>";
$c = TRUE;
var_dump($c);

?>


</body>
</html>