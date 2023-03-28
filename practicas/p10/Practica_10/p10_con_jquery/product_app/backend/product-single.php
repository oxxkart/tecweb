<?php   

include_once __DIR__ . '/database.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $conexion->set_charset("utf8");
    $sql = "SELECT * from productos WHERE id = {$id}";

    $result = $conexion->query($sql);

    $JSON = array();
    while($row = mysqli_fetch_array($result)) {
        $JSON[] = array(
            'nombre' => $row['nombre'],
            'precio' => $row['precio'],
            'unidades' => $row['unidades'],
            'modelo' => $row['modelo'],
            'marca' => $row['marca'],
            'detalles' => $row['detalles'],
            'imagen' => $row['imagen'],
            'id' => $row['id']
        );
    }

    $jsonstring = json_encode($JSON[0]);
    echo $jsonstring;
}
?>