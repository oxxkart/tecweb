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
        require_once __DIR__ . '/Mascota.php'; 

        $per1 = new Mascota; 
        $per1-> setNombre('Lucas');
        $per1-> setEdad('9'); 
        $per1-> setRaza('Chihuahua');
        $per1-> setPeso('1.5'); 
        $per1->mostrar();

        $per2 = new Mascota; 
        $per2-> setNombre('Chocolate');
        $per2-> setEdad('10'); 
        $per2-> setRaza('Frech poodle');
        $per2-> setPeso('5.5'); 
        $per2->mostrar();

        $per4 = new Mascota; 
        $per4-> setNombre('Yoyo');
        $per4-> setEdad('14'); 
        $per4-> setRaza('French poodle');
        $per4-> setPeso('4.5'); 
        $per4->mostrar();

        $per3 = new Mascota; 
        $per3-> setNombre('Chilu');
        $per3-> setEdad('5'); 
        $per3-> setRaza('Schnauzer');
        $per3-> setPeso('5.5'); 
        $per3->mostrar();

        
    ?>

</body>
</html>