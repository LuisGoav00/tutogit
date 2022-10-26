<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
    <?php
      
       if(isset($_POST['submit']))
       {
           $submit = $_POST['submit'];
       }
       else
       {
         //  die('Parámetro "submit" no detectado...');
       }
       if (!empty($submit))
       {
           /** SE CREA EL OBJETO DE CONEXION */
           @$link = new mysqli('localhost', 'root', 'Password12', 'marketzone');	
           
           /** comprobar la conexión */
           if ($link->connect_errno) 
           {
               die('Falló la conexión: '.$link->connect_error.'<br/>');
                   /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
           }   
           
       }
      
       ?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Producto</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
        <?php
 


        if (isset($_POST['submit']))
        {
            $nombre = $_POST['nombre'];    
            $marca = $_POST['marca'];    
            $modelo = $_POST['modelo'];    
            $precio = $_POST['precio'];    
            $detalles = $_POST['detalles'];    
            $unidades = $_POST['unidades'];    
            $imagen=$_FILES['imagen']['name'];
            $temporal=$_FILES['imagen']['tmp_name'];
                

            if(empty($nombre))
            {
               echo "<p>Agrega el nombre</p>" ;    
            } else {
                if(is_numeric($nombre))
                {
                    echo "Agrega un nombre válido";
                    $comprobacion = false;
                }else {
                    $comprobacion = true;
                }
            }
            if(empty($marca))
            {
               echo "<p>Agrega el marca</p>" ;
               $comprobacion2 = false;    
            }else {
                if(is_numeric($marca))
                {
                    echo "Agrega una marca válido";
                    $comprobacion2 = false;
                }else {
                    $comprobacion2 = true;
                }
            }
            if(empty($modelo))
            {
               echo "<p>Agrega el modelo</p>" ;
               $comprobacion3 = false;    
            }else {
                if(is_numeric($modelo))
                {
                    echo "Agrega un modelo válido";
                    $comprobacion3 = false;
                }else {
                    $comprobacion3 = true;
                }
            }
            if(empty($precio))
            {
               echo "<p>Agrega el precio</p>" ;
               $comprobacion4 = false;    
            }else {
                if(!is_numeric($precio))
                {
                    echo "El precio debe ser un número con decimales";
                    $comprobacion4 = false;
                }
                else {
                    $comprobacion4 = true;
                }
            }
            if(empty($detalles))
            {
               echo "<p>Agrega los detalles</p>" ; 
               $comprobacion5 = false;   
            }else {
                $comprobacion5 = true;
            }
            if(empty($unidades))
            {
                echo "<p>Agrega agrega las unidades</p>" ;    
                $comprobacion6 = false;
            }else {
                if(!is_numeric($unidades))
                {
                    echo "Las unidades deben ser un número";
                    $comprobacion6 = false;
                }else {
                    $comprobacion6 = true;
                }
            }
            if(empty($imagen))
            {
               echo "<p>Agrega la imagen</p>" ;
               $comprobacion7 = false;    
            }else {
                $comprobacion7 = true;
            }
            if($comprobacion == true && $comprobacion2 == true && $comprobacion3 == true && $comprobacion4 == true && $comprobacion5 == true && $comprobacion6 == true && $comprobacion7 == true)
            {
                $carpeta='img';
                $ruta=$carpeta.'/'.$imagen;
                move_uploaded_file($temporal,$carpeta.'/'.$imagen);
                $eliminado = 0;
                $query = "INSERT INTO productos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$ruta}','{$eliminado}')";
                if( $link->query($query) ){
            echo "<h1>Datos insertados correctamente</h1><br>";
            echo "<h2>Resumen de datos...</h2><br>";
            echo "id: $link->insert_id <br>";
            echo "Nombre del producto: $nombre <br>";
            echo "Marca: $marca <br>";
            echo "Modelo: $modelo <br>";
            echo "Precio: $precio <br>";
            echo "Detalles: $detalles <br>";
            echo "Unidades: $unidades <br>";
            echo "Imagen: $imagen <br>";
            echo "Eliminado: $eliminado <br>";
                }
                else{
                    echo "El producto no ha sido insertado";
                }
                $link->close();
            }
        }
      
        ?>
	</body>
</html>