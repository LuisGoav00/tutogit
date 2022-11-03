<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

    <?php
        //header("Content-Type: application/json; charset=utf-8");
        //$data = aray();

        if(isset($_GET['tope']))
        {
            $tope = $_GET['tope'];
        }
        else
        {
            die('Parámetro "tope" no detectado...');
        }

        if (!empty($tope)) {
            //se hace el obj de conexion
            @$link = new mysqli('localhost', 'root', 'Password12', 'marketzone');

            //comprobar conexion
            if ($link->connect_errno) 
            {
                die('Falló la conexión: '.$link->connect_error.'<br/>');
                //exit();
            }
        }

        //crea una tabla y la guarda en $result
        if ( $result = $link->query("SELECT * FROM productos WHERE unidades <= $tope") ) 
        {
            $conSQL = "SELECT * FROM productos WHERE unidades <= $tope";
            $row = $result->fetch_all(MYSQLI_ASSOC); //arreglo
            $query = mysqli_query($link,$conSQL);
            //libera memoria de $result
            $result->free();
        }

        $link->close();
    ?>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <?php
            echo "<title>Productos con Unidades <= $tope</title>";
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
	<body>
        <script>
            function modificar() {
               
                var rowId = event.target.parentNode.parentNode.id;
          
                var data = document.getElementById(rowId).querySelectorAll(".row-data");

               
                var id = data[0].innerHTML;
                var nombre = data[1].innerHTML;
                var marca = data[2].innerHTML;
                var modelo = data[3].innerHTML;
                var precio = data[4].innerHTML;
                var unidades = data[5].innerHTML;
                var detalles = data[1].innerHTML;
                var imagen = data[1].innerHTML;

                var url = "formulario_productos_v2.php";
                window.open(url+"?id="+id+"&nombre="+nombre+"&marca"+marca+"&modelo="+modelo+"&precio"+precio+"&unidades="+unidades+"&detalles"+detalles+"&imagen"+imagen);

       }
        </script>
        <?php
		    echo "<h3>PRODUCTOS CON MENOS DE $tope UNIDADES</h3>";
        ?>

		<br/>

		<table class="table">
			<thead class="thead-dark">
				<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
		    	<th scope="col">Marca</th>
				<th scope="col">Modelo</th>
				<th scope="col">Precio</th>
				<th scope="col">Unidades</th>
				<th scope="col">Detalles</th>
				<th scope="col">Imagen</th>
                <th scope="col">Modificar unidades</th>
				</tr>
			</thead>
			<tbody>
                <?php foreach ($query as $objeto): ?> 
                <tr id="<?=$objeto['id']?>">
						<th class="row-data"><?= $objeto['id'] ?></th>
						<td class="row-data"><?= $objeto['nombre'] ?></td>
						<td class="row-data"><?= $objeto['marca'] ?></td>
						<td class="row-data"><?= $objeto['modelo'] ?></td>
						<td class="row-data"><?= $objeto['precio'] ?></td>
						<td class="row-data"><?= $objeto['unidades'] ?></td>
						<td class="row-data"><?= utf8_encode($objeto['detalles']) ?></td>
						<td class="row-data"><img src=<?= $objeto['imagen'] ?> widht="100px" height="100px"></td>
                        <td><input type="button" value="Editar Objeto" onClick="modificar()"/></td>
				</tr>
                <?php endforeach; ?>
			</tbody>
		</table>
    </body>
</html>