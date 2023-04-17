<?php
    include_once __DIR__.'/API/Productos.php';

    $busca_nombre = new Productos();
    if( isset($_GET['search']) ) {
        $search = $_GET['search'];
        $busca_nombre->singleByName($search);
    } 
    
    echo $busca_nombre->getResponse();
?>