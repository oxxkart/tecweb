<!DOCTYPE html>
<html>
    <head>
    <title>Productos mostrados</title>
        <link rel="stylesheet"
              href= "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
              integrity= "sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
              crossorigin="anonymous" />
        <script>
            function show() {
                // se obtiene el id de la fila donde está el botón presinado
                var rowId = event.target.parentNode.parentNode.id;

                // se obtienen los datos de la fila en forma de arreglo
                var data = document.getElementById(rowId).querySelectorAll(".row-data");
                /**
                querySelectorAll() devuelve una lista de elementos (NodeList) que 
                coinciden con el grupo de selectores CSS indicados.
                (ver: https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Selectors)

                En este caso se obtienen todos los datos de la fila con el id encontrado
                y que pertenecen a la clase "row-data".
                */

                var nombre = data[0].innerText;
                var marca = data[1].innerText;
                var modelo = data[2].innerText;
                var precio = data[3].innerText;
                var detalles = data[4].innerText;
                var img = data[5].firstChild.getAttribute('src');

                alert("Nombre: " + nombre + "\nMarca: " + marca + "\nModelo: " + modelo + 
                "\nPrecio: " + precio + "\nDetalles: " + detalles + "\nImg: "+ img);

                send2form(nombre, marca, modelo, precio, detalles, img);
            }
            
        </script>
    </head>
    <style type="text/css">
			body {margin: 20px; 
			background-color: #b07bff;
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1px solid #005825;}
			h2 {font-size: 1.2em;
			color: #4A0048;}
		</style>
    <body>
        <h1>Productos mostrados</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Detalles</th>
                    <th scope="col">Img</th>
                    <th scope="col">Submit</th>
                </tr>

                <tr id="1">
                    <th scope="row">1</th>
                    <td class="row-data">Auriculares inalambricos</td>
                    <td class="row-data">Bose</td>
                    <td class="row-data">B-Pro100</td>
                    <td class="row-data">5300</td>
                    <td class="row-data">Un mejor sonido comienza con un mejor silencio. Es por eso que diseñamos los QuietComfort® Earbuds con la reducción de ruido y el audio de alta fidelidad de primera clase; además, las puntas StayHear™ Max te ofrecen una mayor comodidad. </td>
                    <td class="row-data"><img src="img/bose_audifonos.png" width="50" height="50"></td>
                    <td><input type="button" 
                               value="submit" 
                               onclick="show()" /></td>
                </tr>

                <tr id="2">
                <th scope="row">2</th>
                    <td class="row-data">Altavoces</td>
                    <td class="row-data">Bose</td>
                    <td class="row-data">B-ProAudio1000</td>
                    <td class="row-data">55300</td>
                    <td class="row-data">Un mejor sonido comienza con un mejor silencio. Es por eso que diseñamos los QuietComfort® Earbuds con la reducción de ruido y el audio de alta fidelidad de primera clase; además, las puntas StayHear™ Max te ofrecen una mayor comodidad. </td>
                    <td class="row-data"><img src="img/bose_altavoz.png" width="50" height="50"></td>
                    <td><input type="button" 
                               value="submit" 
                               onclick="show()" /></td>
                </tr>

                <tr id="3">
                    <th scope="row">3</th>
                    <td class="row-data">Auriculares Inalambricos</td>
                    <td class="row-data">JBL</td>
                    <td class="row-data">J-ProAudioX50</td>
                    <td class="row-data">3300</td>
                    <td class="row-data">Un mejor sonido comienza con un mejor silencio. Es por eso que diseñamos los QuietComfort® Earbuds con la reducción de ruido y el audio de alta fidelidad de primera clase; además, las puntas StayHear™ Max te ofrecen una mayor comodidad. </td>
                    <td class="row-data"><img src="img/jbl_audifonos.png" width="50" height="50"></td>
                    <td><input type="button" 
                               value="submit" 
                               onclick="show()" /></td>
                </tr>

                <tr id="4">
                    <th scope="row">4</th>
                    <td class="row-data">Bocina Inalambricas</td>
                    <td class="row-data">JBL</td>
                    <td class="row-data">J-AudioX150</td>
                    <td class="row-data">33000</td>
                    <td class="row-data">Un mejor sonido comienza con un mejor silencio. Es por eso que diseñamos los QuietComfort® Earbuds con la reducción de ruido y el audio de alta fidelidad de primera clase; además, las puntas StayHear™ Max te ofrecen una mayor comodidad. </td>
                    <td class="row-data"><img src="img/jbl_bocina.png" width="50" height="50"></td>
                    <td><input type="button" 
                               value="submit" 
                               onclick="show()" /></td>
                </tr>

                <tr id="5">
                    <th scope="row">5</th>
                    <td class="row-data">Auriculares Inalambricos</td>
                    <td class="row-data">Marshall</td>
                    <td class="row-data">M-masterYX50</td>
                    <td class="row-data">10000</td>
                    <td class="row-data">Un mejor sonido comienza con un mejor silencio. Es por eso que diseñamos los QuietComfort® Earbuds con la reducción de ruido y el audio de alta fidelidad de primera clase; además, las puntas StayHear™ Max te ofrecen una mayor comodidad. </td>
                    <td class="row-data"><img src="img/marshall_audifonos.png" width="50" height="50"></td>
                    <td><input type="button" 
                               value="submit" 
                               onclick="show()" /></td>
                </tr>

                <tr id="6">
                    <th scope="row">6</th>
                    <td class="row-data">Parlantes</td>
                    <td class="row-data">Marshall</td>
                    <td class="row-data">Marshall X50</td>
                    <td class="row-data">25000</td>
                    <td class="row-data">Un mejor sonido comienza con un mejor silencio. Es por eso que diseñamos los QuietComfort® Earbuds con la reducción de ruido y el audio de alta fidelidad de primera clase; además, las puntas StayHear™ Max te ofrecen una mayor comodidad. </td>
                    <td class="row-data"><img src="img/base.png" width="50" height="50"></td>
                    <td><input type="button" 
                               value="submit" 
                               onclick="show()" /></td>
                </tr>

                <tr id="7">
                    <th scope="row">7</th>
                    <td class="row-data">Auriculares Inalambricos</td>
                    <td class="row-data">Onkyo</td>
                    <td class="row-data">OnkyoAudioX50</td>
                    <td class="row-data">8000</td>
                    <td class="row-data">Un mejor sonido comienza con un mejor silencio. Es por eso que diseñamos los QuietComfort® Earbuds con la reducción de ruido y el audio de alta fidelidad de primera clase; además, las puntas StayHear™ Max te ofrecen una mayor comodidad. </td>
                    <td class="row-data"><img src="img/onkyo_audifonos.png" width="50" height="50"></td>
                    <td><input type="button" 
                               value="submit" 
                               onclick="show()" /></td>
                </tr>

                <tr id="8">
                    <th scope="row">8</th>
                    <td class="row-data">Parlantes</td>
                    <td class="row-data">Onkyo</td>
                    <td class="row-data">OnkyoAudioMX50</td>
                    <td class="row-data">50000</td>
                    <td class="row-data">Un mejor sonido comienza con un mejor silencio. Es por eso que diseñamos los QuietComfort® Earbuds con la reducción de ruido y el audio de alta fidelidad de primera clase; además, las puntas StayHear™ Max te ofrecen una mayor comodidad. </td>
                    <td class="row-data"><img src="img/onkyo_parlantes.png" width="50" height="50"></td>
                    <td><input type="button" 
                               value="submit" 
                               onclick="show()" /></td>
                </tr>

                <tr id="9">
                    <th scope="row">9</th>
                    <td class="row-data">Auriculares Inalambricos</td>
                    <td class="row-data">Sennheiser</td>
                    <td class="row-data">Cruizer 100</td>
                    <td class="row-data">2500</td>
                    <td class="row-data">Un mejor sonido comienza con un mejor silencio. Es por eso que diseñamos los QuietComfort® Earbuds con la reducción de ruido y el audio de alta fidelidad de primera clase; además, las puntas StayHear™ Max te ofrecen una mayor comodidad. </td>
                    <td class="row-data"><img src="img/sennheiser_audifonos.png" width="50" height="50"></td>
                    <td><input type="button" 
                               value="submit" 
                               onclick="show()" /></td>
                </tr>

                <tr id="10">
                    <th scope="row">10</th>
                    <td class="row-data">Barra</td>
                    <td class="row-data">Sennheiser</td>
                    <td class="row-data">sennheiser 1450</td>
                    <td class="row-data">18000</td>
                    <td class="row-data">Un mejor sonido comienza con un mejor silencio. Es por eso que diseñamos los QuietComfort® Earbuds con la reducción de ruido y el audio de alta fidelidad de primera clase; además, las puntas StayHear™ Max te ofrecen una mayor comodidad. </td>
                    <td class="row-data"><img src="img/sennheiser_barra.png" width="50" height="50"></td>
                    <td><input type="button" 
                               value="submit" 
                               onclick="show()" /></td>
                </tr>
                
            </tbody>
        </table>
        <script>
            function send2form(nombre, marca, modelo, precio, detalles, img) {     //form) { 
                var urlForm = "http://localhost:83/Tecnologiasweb/tecweb/practicas/p08/formulario_productos_v3.php";
                var propNombre = "nombre="+nombre;
                var propMarca = "marca="+marca;
                var propModelo = "modelo="+modelo;
                var propPrecio = "precio="+precio;
                var propDetalles = "detalles="+detalles;
                var propImg = "img="+img;
                window.open(urlForm+"?"+propNombre+"&"+propMarca+"&"+propModelo+"&"+propPrecio+"&"+propDetalles+"&"+propImg);
            }
        </script>
    </body>
</html>