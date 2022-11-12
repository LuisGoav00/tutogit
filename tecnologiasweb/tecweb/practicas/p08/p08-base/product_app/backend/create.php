<?php
    include_once __DIR__.'/database.php';

    // SE OBTIENE LA INFORMACIÓN DEL PRODUCTO ENVIADA POR EL CLIENTE
    $producto = file_get_contents('php://input');
    if(!empty($producto)) {
        // SE TRANSFORMA EL STRING DEL JASON A OBJETO
        $jsonOBJ = json_decode($producto, true);

        $nombreobj = $jsonOBJ["nombre"];
        $marcaobj = $jsonOBJ["marca"];
        $modeloobj = $jsonOBJ["modelo"];
        $precioobj = $jsonOBJ["precio"];
        $detallesobj = $jsonOBJ["detalles"];
        $unidadesobj = $jsonOBJ["unidades"];
        $imagenobj = $jsonOBJ["imagen"];

        $consultaObjs = $conexion->query("SELECT * FROM productos WHERE nombre='{$nombreobj}' AND eliminado=0");
        if ($consultaObjs->num_rows != 0) {
            echo "PRODUCTO EXISTENTE";
        }
        else {
            if ( $result = $conexion->query("INSERT INTO productos VALUES (NULL, '{$nombreobj}', '{$marcaobj}', '{$modeloobj}', '{$precioobj}', '{$detallesobj}', '{$unidadesobj}', '{$imagenobj}', '0')") ) {
                echo "PRODUCTO INSERTADO CORRECTAMENTE ";
            }
            else {
                die('Query Error: '.mysqli_error($conexion));
                echo "PRODUCTO NO INSERTADO";
            }
        }
        $conexion->close();
    }
?>