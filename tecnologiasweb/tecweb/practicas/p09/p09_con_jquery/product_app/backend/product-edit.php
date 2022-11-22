<?php
    include_once __DIR__.'/database.php';

    // SE OBTIENE LA INFORMACIÓN DEL PRODUCTO ENVIADA POR EL CLIENTE
    $producto = file_get_contents('php://input');
    $data = array(
        'status'  => 'error',
        'message' => 'La consulta falló'
    );
    if(!empty($producto)) {
        // SE TRANSFORMA EL STRING DEL JASON A OBJETO
        $jsonOBJ = json_decode($producto);

        $idobj = $jsonOBJ->id;
        $nombreobj = $jsonOBJ->nombre;
        $precioobj = $jsonOBJ->precio;
        $unidadesobj = $jsonOBJ->unidades;
        $modeloobj = $jsonOBJ->modelo;
        $marcaobj = $jsonOBJ->marca;
        $detallesobj = $jsonOBJ->detalles;
        $imagenobj = $jsonOBJ->imagen;

        // SE ASUME QUE LOS DATOS YA FUERON VALIDADOS ANTES DE ENVIARSE
        $sql = "UPDATE productos SET nombre='{$nombreobj}', precio='{$precioobj}', unidades='{$unidadesobj}', modelo='{$modeloobj}', marca='{$marcaobj}', detalles='{$detallesobj}', imagen='{$imagenobj}' WHERE id = '{$idobj}'";
	    $result = $conexion->query($sql);
        
        if ( $conexion->query($sql) ) {
            $data['status'] =  "success";
            $data['message'] =  "Producto modificado";
		} else {
            $data['message'] = "ERROR: No se ejecuto $sql. " . mysqli_error($conexion);
        }
        // Cierra la conexion
        $conexion->close();
    }


    // SE HACE LA CONVERSIÓN DE ARRAY A JSON
    echo json_encode($data, JSON_PRETTY_PRINT);
?>