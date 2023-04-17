<?php
    include_once __DIR__.'/API/Productos.php';
    
    //Se crea un objeto de la clase
    $lista_productos = new Productos('marketzone');
    $lista_productos->list();
    echo $lista_productos->getResponse();
    
?>