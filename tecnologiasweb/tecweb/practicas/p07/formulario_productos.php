<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Producto</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
       
    </head>
	<body> 


  <script type="text/javascript">
      function verificarNombre(nombre) {
        if (nombre.value == '') {
          alert('El campo nombre no debe estar vacío');
        }
        else if (nombre.lenght >= 100) {
          alert('El campo nombre no debe tener más de 100 caracteres');
        }
      }

      function verificarModelo(modelo) {
        if (modelo.value == '') {
          alert('El campo modelo no debe estar vacío');
        }
        else if (nombre.lenght >= 25) {
          alert('El campo modelo debe tener 25 caracteres o menos');
        }
      }

 
      function verificarPrecio(precio) {
        verprecio = parseFloat(precio);
        if (precio.value == '') {
          alert('El campo precio no debe estar vacio');
        }
        else if (verprecio < 99.99) {
          alert('El precio tiene que ser mayor a $99.99');
        }
      }

      function verificarDetalles(detalles) {
        if (detalles.lenght > 250) {
          alert('Los detalles no deben pasar los 250 caracteres');
        }
      }

      function verificarUnidades(unidades) {
        if (isNaN(unidades))
        {
            alert('Las unidades deben ser un número');
        }else if (unidades.value < 0) {
          alert('Debes ingresar unidades igual o mayores a 0');
        }
      }

      function verificarImagen(imagen) {
        if (imagen.value == '') {
          imagen.value = 'img/img.png';
        }
      }
</script>
<h1>Tienda de laptops</h1>
<br>
<h2>Agregar productos</h2>
    <form  action ="#" method = "post" enctype = "multipart/form-data" onsubmit = "return validar();">
        <div class="form-group">
           
        <label>Nombre:</label>
        <input type="text" name="nombre" id="nombre" onblur="verificarNombre(this)" placeholder="nombre">
           <br>
           <label> Marca:</label>
           <select type="text" name ="marca" id = "marca"  placeholder="Marca">
            <option>Samsumg</option>
            <option>Apple</option>
            <option>Huawei</option>
            <option>Alienware</option>
            <option>Xiaomi</option>
            </select> 
           <br>
            <label> Modelo:</label>
            <input type="text" name = "modelo" id = "modelo" onblur="verificarModelo(this)" placeholder="Modelo">
            <br>
            <label> Precio:</label> 
            <input type="text" name = "precio" id = "precio" onblur = "verificarPrecio(this)" placeholder="0.00">
            <br>
            <label> Detalles:</label><br>
            <textarea rows="4" cols="60"  name = "detalles" id = "detalles" onblur = "verificarDetalles(this)" placeholder="Detalles"></textarea>
            <br>
            <label>Unidades:</label>
            <input type="text" name ="unidades" id = "unidades" onblur = "verificarUnidades(this)" placeholder="Numero de unidades">
            <br>
            <label>Imagen:</label>
            <input type="text" name ="imagen" id = "imagen" onblur = "verificarImagen(this)" placeholder="ruta de imagen">
        </div>
        
        <input type ="submit" value = "Registrar"  name = "submit" />
    </form>
	</body>
</html>