<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
      ol, ul { 
      list-style-type: none;
      }
    </style>
        <script type="text/javascript">
			function validacion()
			{
				var nombre=document.getElementById('nombre').value;
				var marca=document.getElementById('marca').selectedIndex;
				var modelo=document.getElementById('modelo').value;
				var precio=document.getElementById('precio').value;
				var detalles=document.getElementById('detalles').value;
				var unidades=document.getElementById('unidades').value;
				var imagen=document.getElementById('imagen').value;
				
				if(nombre.length>100 || nombre == "")
				{
					alert('Debe ingresar un nombre correcto');
				}

				if(marca == "" || marca == 0)
				{
					alert('Debe ingresar una marca correcta');
				}

				if(modelo == "" || modelo.length>25)
				{
					alert('Debe ingresar una modelo correcto');
				}

				if(!isNaN(precio) && precio<99.99)
				{
					alert('Debe ingresar un precio mayor a 99.99');
				}

				if(detalles.length>250)
				{
					alert('Los caracteres máximos son 250');
				}

				if(!isNaN(unidades) && unidades<0)
				{
					alert('Debe ingresar un número de unidades mayor a 0');
				}

				if(imagen == "")
				{
					imagen.document.write("img/base.png");
				}	
				
			}
		</script>

    <title>Formulario Producto</title>
</head>
<body>
    <h1>Datos del Producto</h1>

    <form id="miFormulario" action="http://localhost:83/Tecnologiasweb/tecweb/practicas/p08/set_producto_v2.php" method="post">
        <fieldset>
            <legend>Actualizacion del Producto:</legend>
            <ul>
            <li><label for="form-nombre">Nombre:</label> <input type="nombre" name="nombre" id="nombre"></li>
            <li><label for="form-marca">Marca:</label><select name="marca" id="marca"> 
                    <option value="">- Seleccione -</option>
  					<option value="Onkyo">Onkyo</option>
  					<option value="Bose">Bose</option>
  					<option value="Yamaha">Yamaha</option>
					<option value="Marshall">Marshall</option>
					<option value="Sennheiser">Senheiser</option>
                    <option value="JBL">JBL</option>
                    <option value="Sony">Sony</option>
                    </select></li>
            <li><label for="form-modelo">Modelo:</label> <input type="modelo" name="modelo" id="modelo"></li>
            <li><label for="form-precio">Precio:</label> <input type="precio" name="precio" id="precio"></li>
            <li><label for="form-detalles">Detalles:</label><br><textarea name="detalles" rows="4" cols="60" id="detalles" placeholder="No más de 250 caracteres"></textarea></li>
            <li><label for="form-unidades">Unidades:</label> <input type="number" min ="0" name="unidades" id="unidades"></li>
            <li><label for="form-imagen">Imagen:</label> <input type="imagen" name="imagen" id="imagen"></li>
          
            </ul>
        </fieldset>
        <p>
            <input type="submit" value="ENVIAR" onClick="validacion()">
            <input type="reset">
        </p>
    </form>
</body>
</html>