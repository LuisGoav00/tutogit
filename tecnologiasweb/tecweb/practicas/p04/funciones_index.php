<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
    <style type="text/css">
      ol { 
      list-style-type: none;
      }
    </style>
</head>
<body>
    <div>
        <h3>Ejercicio 1</h3>
        <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7.</p>
        <p>
            R:
            <?php
            $n1 = $_GET["numero"];
            if(( $n1 % 7 )  == 0 && ( $n1 % 5 ) == 0){
            
                echo $n1 . ' es multiplo de 5 y 7';
                
            }else{
            
                echo $n1 . ' no es multiplo de 5 y 7';
            }
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 2</h3>
        <p>
            Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una secuencia compuesta por:
            <br><strong>impar, par, impar</strong>
        </p>
        <p>
            R:
            <?php
            // AQUÍ VA EL CÓDIGO DE SOLUCIÓN
            
                $matriz = [[],[],[]];
                $contador = 0;

                do {
                    global  $matriz;
                    $pos1 = (int)rand(10,100);
                    $pos2 = (int)rand(10,100);
                    $pos3 = (int)rand(10,100);
                    $matriz[0][] = $pos1;
                    $matriz[1][] = $pos2;
                    $matriz[2][] = $pos3;

                    $contador ++;
                }while($pos1 % 2 ==0 ||	 $pos2%2 !=0 || $pos3%2 == 0);

                for($i=0; $i<$contador; $i++){
                foreach($matriz as $lista )
                {
                    echo "$lista[$i],";
                }
                echo '<br>';
                }
                echo '<br>';
                $num = $contador*3;
                echo "$num numeros obtenidos de $contador iteraciones";
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 3</h3>
        <p>Utiliza un ciclo <strong>while</strong> para encontrar el primer número entero obtenido aleatoriamente, pero que además sea múltiplo de un número dado.</p>
        <p>
            R:
            <?php
            // AQUÍ VA EL CÓDIGO DE SOLUCIÓN 3
                $num = $_GET["numero2"];
                echo "El numero ingresado es $num <br>";

                echo "Buscando el primer numero aleatorio que sea multiplo de $num<br>";

                while(is_int($i=rand(10,100)) && $i % $num != 0){
                echo "Numero aleatorio: $i <br>";
                }
                echo "<br>Primer numero mulriplo de $num: $i";
                ?>
                <br>
                <p>Variante usando do while</p>
                <?php
                do{
                    $j = rand(10,100);
                    echo "Numero aleatorio: $j<br>";
                }while(is_int($j) && $j % $num != 0);
                echo "<br>Primer numero mulriplo de $num: $j";
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 4</h3>
        <p>Crear un arreglo cuyos <strong>índices</strong> van de 97 a 122 y cuyos <strong>valores</strong> son las letras de la 'a' a la 'z'. Usa la función <strong>chr(n)</strong> que devuelve el caracter cuyo código ASCII es <strong>n</strong> para poner el valor en cada índice. Es decir:</p>
        <p>
            [97] => a <br>
            [98] => b <br>
            [99] => c <br>
            … <br>
            [122] => z
        </p>
        <p>
            R:
            <?php
            // AQUÍ VA EL CÓDIGO DE SOLUCIÓN
                for(is_int($i = 97); $i <= 122; $i++)
                {
                    $letras = array($i,chr($i));
                    foreach($letras as $numero => $letra)
                    {
                        echo "[$letra]  ";
                    }
                    echo "<br>";
                }
            ?>
        </p>
    </div>
    <div>
        <h3>Ejercicio 5</h3>
        <p>
            Usar las variables <strong>$edad</strong> y <strong>$sexo</strong> en una instrucción if para identificar una persona de sexo "femenino", 
            cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de bienvenida apropiado. Por ejemplo:
        </p>
        <p>
            <em>Bienvenida, usted está en el rango de edad permitido.</em>
        </p>
        <p>
            En caso contrario, deberá devolverse otro mensaje indicando el error.
        </p>
        <ul>
            <li>Los valores para $edad y $sexo se deben obtener por medio de un formulario en HTML.</li>
            <li>Utilizar el la Variable Superglobal $_POST (revisar documentación).</li>
        </ul>
        </p>
        <p>
            R:
            <form id="formulario1" action="./src/formulario1.php" method="post">
            <fieldset>
                <legend>Información Personal</legend>
                <ol>
                <li><label>Edad:</label> <input type="text" name="edad"></li>
                <li><label>Sexo:</label> <select name="sexo">
                    <option >Masculino</option>
                    <option >Femenino</option>
                </select><br></li>
                </ol>
            </fieldset>
            <p>
                <input type="submit" value="¡OK!">
            </p>
            </form>
        </p>
    </div>

    <div>
        <h3>Ejercicio 6</h3>
        <p>
        Crea en código duro un arreglo asociativo que sirva para registrar el parque vehicular de
una ciudad.
        </p>
        <p>
            R:
            <form id="formulario2" action="./src/formulario2.php" method="post">
            <fieldset>
                <ol>
                <li>Matricula: <select name="matricula">
                    <option >UBN6338</option>
                    <option >UBN6339</option>
                    <option >FHI4681</option>
                    <option >FHI4682</option>
                    <option >AWO5102</option>
                    <option >AWO5103</option>
                    <option >POE25487</option>
                    <option >MDK5689</option>
                    <option >LFK6589</option>
                    <option >KIE5569</option>
                    <option >UJF3652</option>
                    <option >RTD1548</option>
                    <option >RWW3658</option>
                    <option >FEI8755</option>
                    <option >GEE5489</option>
                </select><li><br>
                </ol>
            </fieldset>
            <p>
            <input type="submit" value = "Consultar">
            </p>
            </form>
        </p>
    </div>
</body>
</html>