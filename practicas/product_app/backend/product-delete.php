<?php
    include_once __DIR__.'/API/Productos.php';
    
    $eliminar = new Productos();
    if( isset($_POST['id'])){ //checa que se resiva
        $id = $_POST['id']; // se asigna 
        $eliminar->delete($id); // el objeto creado pasa por parametro la variable a la funcion 
    }
    echo $eliminar->getResponse(); //se manda a response ya que es quien recive todo
?>