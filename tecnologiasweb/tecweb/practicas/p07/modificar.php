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
 


 $id = $_GET['id'];
 $nombre = $_GET['nombre'];
 $marca  = $_GET['marca'];
 $modelo = $_GET['modelo'];
 $precio = $_GET['precio'];
 $detalles = $_GET['detalles'];
 $unidades = $_GET['unidades'];
 $imagen = $_GET['imagen'];
 $eliminar = $_GET['eliminar'];
 
 /** SE CREA EL OBJETO DE CONEXION */
 $link = new mysqli('localhost', 'root', 'Password12', 'marketzone');	
 
 /** comprobar la conexión */
 if ($link===false) 
 {
     die("ERROR: No pudo conectarse con la DB. " . mysqli_connect_error());
 }
 
 $query = "UPDATE productos SET nombre='{$nombre}', marca='{$marca}', modelo='{$modelo}', precio={$precio}, detalles='{$detalles}', unidades={$unidades}, imagen='{$imagen}', eliminado='{$eliminar}' WHERE id='{$id}'";
 if(mysqli_query($link, $query)) 
 {
     echo 'Actualización completada con exito   ';
 }
 else
 {
     echo "ERROR: no se ejecutó $query. " . mysqli_error($link);
 }
 
 mysqli_close($link);
        ?>
	</body>
</html>