<?php
/* MySQL Conexion*/
$link = new mysqli ("localhost", "root", "1597532486", "marketzone");
// Chequea coneccion
if($link === false){
die("ERROR: No pudo conectarse con la DB. " . mysqli_connect_error());
}
// Ejecuta la actualizacion del registro
$sql = "UPDATE productos SET marca='sony' WHERE id=3";
if(mysqli_query($link, $sql)){
echo "Registro actualizado.";
} else {
echo "ERROR: No se ejecuto $sql. " . mysqli_error($link);
}
// Cierra la conexion
mysqli_close($link);
?>