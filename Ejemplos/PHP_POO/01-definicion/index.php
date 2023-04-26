<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once __DIR__ . '/Persona.php'; // INSERTA O INCROPORA ARCHIVO COPY PASTE

        $per1 = new Persona; //PALABA RESERVADA NEW,  AL AÑADIR NEW SE VUELVE OBJETO
        $per1-> setNombre('Fulano');
        $per1-> setEdad('15'); //-> ACCESO METODO 
        $per1->mostrar();

        $per2 = new Persona;
        $per2-> setNombre('Mengano'); // inicializar ----set
        $per2-> setEdad('16'); 
        $per2->mostrar();
    ?>

</body>
</html>