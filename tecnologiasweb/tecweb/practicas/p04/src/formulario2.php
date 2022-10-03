<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN” “http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Formulario Autos</title>
            </head>
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
        <body>
        <h1>RESPUESTA</h1>

            <?php
            $matricula = $_POST["matricula"];
        //tipos (sedan|hachback|camioneta)
            $datos = array(

                'UBN6338' => array('Auto' => array('marca' => "HONDA",
                'modelo' => 2020, 'tipo' => "camioneta"), 'Propietario' => array(
                'nombre' => "Alfonzo Esparza",
                'ciudad' => "Puebla, pue.", 
                'direccion' => "C.U, Jardines de San Manuel")),
                
                'UBN6339' => array('Auto' => array('marca' => "MAZDA",
                'modelo' => 2019, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Ma. Del Consuelo Molina", 
                'ciudad' => "Puebla, pue.",
                'direccion' => "97 oriente")),
            
                'FHI4681' => array('Auto' => array('marca' => "NISSAN",
                'modelo' => 2018, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Pedro Perez", 
                'ciudad' => "Cancun, Quintana Roo.",
                'direccion' => "8 Poniente")),
            
                'FHI4682' => array('Auto' => array('marca' => "KIA",
                'modelo' => 2021, 'tipo' => "camioneta"), 'Propietario' => array(
                'nombre' => "Uriel Olivera", 
                'ciudad' => "Cancun, Quintana Roo",
                'direccion' => "16 de septiembre")),
            
                'AWO5102' => array('Auto' => array('marca' => "TESLA",
                'modelo' => 2020, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Roberto Avendaño",
                'ciudad' => "Puebla, pue.", 
                'direccion' => "Benito Juarez")),
            
                'AWO5103' => array('Auto' => array('marca' => "VERSA",
                'modelo' => 2015, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Ruben Espinoza",
                'ciudad' => "Guadalajara, Jalisco.", 
                'direccion' => "Avenida Reforma")),
            
                'POE25487' => array('Auto' => array('marca' => "CHEVROLET",
                'modelo' => 2020, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Rubi Rodriguez",
                'ciudad' => "Puebla, pue.", 
                'direccion' => "65 oriente")),
                
                'MDK5689' => array('Auto' => array('marca' => "NISSAN",
                'modelo' => 2022, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Maria Perez",
                'ciudad' => "Tlaxcala, tlax.", 
                'direccion' => "Benito Juarez #50")),
                
                'LFK6589' => array('Auto' => array('marca' => "AUDI",
                'modelo' => 2022, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Maximo Anica",
                'ciudad' => "Tlaxcala, tlax.", 
                'direccion' => "Francisco I. Madero #43")),

                'KIE5569' => array('Auto' => array('marca' => "CHEVROLET",
                'modelo' => 2019, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Javier Hernandez",
                'ciudad' => "Tlaxcala, tlax.", 
                'direccion' => "Ignacio Zaragoza #53")),

                'UJF3652' => array('Auto' => array('marca' => "CHEVROLET",
                'modelo' => 2016, 'tipo' => "camioneta"), 'Propietario' => array(
                'nombre' => "Carlos Baez",
                'ciudad' => "Puebla, pue.", 
                'direccion' => "10 oriente")),

                'RTD1548' => array('Auto' => array('marca' => "SUSUKI",
                'modelo' => 2022, 'tipo' => "camioneta"), 'Propietario' => array(
                'nombre' => "Rodrigo Meza",
                'ciudad' => "Puebla, pue.", 
                'direccion' => "Miguel Hidalgo #3")),

                'RWW3658' => array('Auto' => array('marca' => "AUDI",
                'modelo' => 2017, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "David Roldan",
                'ciudad' => "Tlaxcala, tlax.", 
                'direccion' => "Adolfo Lopez Mateos #23")),

                'FEI8755' => array('Auto' => array('marca' => "NISSAN",
                'modelo' => 2020, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Juan Palacios",
                'ciudad' => "Puebla, pue.", 
                'direccion' => "6 Poniente")),

                'GEE5489' => array('Auto' => array('marca' => "VERSA",
                'modelo' => 2018, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Daniel Pedroza",
                'ciudad' => "Culiacan, Sinaloa.", 
                'direccion' => "Las quintas")),
            );  
             
            print_r($datos);
            echo "<br><br>";
            echo "Datos del auto con matricula <strong>$matricula</strong><br>";
            echo "-----------------------------------------------<br>";
            foreach($datos[$matricula] as $mat => $dat)
            {
                echo "<strong>$mat </strong><br>";
                foreach($dat as $contenido)
                {
                    print_r($contenido);
                    echo "<br>";
                    
                }
                echo "<br>";
            }
            echo "<br>Datos de todos los autos registrados...<br>";
            echo "-----------------------------------------------<br>";

            foreach($datos as $mat => $dat)
            {
                echo "<strong>$mat </strong><br>";
                foreach($dat as $contenido)
                {
                    foreach($contenido as $mostrar)
                    {
                    print_r($mostrar);
                    echo "<br>";
                    }
                }
                echo "<br>";
            }
                echo '<br><br>';
   
            ?>

        </body>
</html>