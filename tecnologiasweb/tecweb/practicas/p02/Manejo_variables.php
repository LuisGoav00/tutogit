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


?>


</body>
</html>