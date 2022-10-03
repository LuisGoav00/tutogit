<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN” “http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Formulario</title>
            <style type="text/css">
                body {margin: 20px; 
                background-color: #C4DF9B;
                font-family: Verdana, Helvetica, sans-serif;
                font-size: 90%;}
                h1 {color: #005825;
                border-bottom: 1px solid #005825;}
                h2 {font-size: 1.2em;
                color: #4A0048;}
            </style>
            </head>
        <body>
        <h1>RESPUESTA</h1>
        <br><br>
          <?php
          $edad = $_POST["edad"];
          $sexo = $_POST["sexo"];
          if($edad >= 18 && $edad <= 35 && $sexo == "Femenino")
          {
            echo "Usted esta en el rango de edad y es de genero femenino";
          }else
          {
            echo "Usted no esta en el rango de edad o no es de genero femenino";
          }
          ?>
                
        </body>
</html> 