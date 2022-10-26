<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Producto</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
    </head>
	<body>

    <form  action ="set_producto_v2.php" method = "post" enctype = "multipart/form-data">
        <div class="form-group">
            
           <label> Nombre:</label> 
           <input type="text" name = "nombre" placeholder="Nombre">
           <br>
           <label> Marca:</label>
           <input type="text" name ="marca" placeholder="Marca">
            <br>
            <label> Modelo:</label>
            <input type="text" name = "modelo" placeholder="Modelo">
            <br>
            <label> Precio:</label> 
            <input type="text" name = "precio" placeholder="0.00">
            <br>
            <label> Detalles:</label><br>
            <textarea rows="4" cols="60"  name = "detalles" placeholder="Detalles"></textarea>
            <br>
            <label>Unidades:</label>
            <input type="text" name ="unidades" placeholder="Numero de unidades">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Inserta la imagen</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name = "imagen">
        </div>
        <input type ="submit" value = "Registrar" name = "submit">
        <?php
        include("set_producto_v2.php");
        
        ?>
    </form>
    
	</body>
</html>