<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd" &gt; <html>

<head>
    <title>Practica 3</title>
</head>

<body>
    <h2>Inciso 1</h2>
    <p>Determina cual de las siguientes variables son validas y explica por que:</p>
    <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>
    <?php
        $_myvar = 'hola';
        echo '$_myvar es correcta <br><br>';
        
        $_7var = 11;
        echo '$_7var es correcta <br><br>' ;
       
        //myvar = 3.141516;
        echo 'myvar es incorrecta <br><br>';
        
        $myvar = 123456789;
        echo '$myvar es correcta <br><br>';

        $var7 = 3.254789;
        echo '$var7 es correcta <br><br>';

        $_element1 = 'Practica 3';
        echo '$_element1 es correcta <br><br>';

        //$house*5 = 'Practica 3';
        echo '$house*5 es incorrecta <br><br>';

        //house*5 = 'Practica 3';
        echo '$house*5 es incorrecta <br><br>';
    ?>
    <h2>Inciso 2</h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
    <p> $a = “ManejadorSQL”;
        $b = 'MySQL’;
        $c = &$a;
    </p>
    <p> a. Ahora muestra el contenido de cada variable</p>
    <?php

        $a = "ManejadorSQL";
        echo $a;
        echo "<br><br>";
        var_dump($a);
        print_r($a);

        echo "<br><br>";
        
        $b = 'MySQL’';
        echo $b;
        echo "<br><br>";
        var_dump($b);
        print_r($b);

        echo "<br><br>";

        $c = &$a;
        echo $c;
        echo "<br><br>";
        var_dump($c);
        print_r($c);
    ?>

<p> b. Agrega al código actual las siguientes asignaciones:</p>
    <?php

        $a = "PHP server";
        echo $a;
        echo "<br><br>";
        var_dump($a);
        print_r($a);

        echo "<br><br>";

        $b = &$a;
        echo $b;
        echo "<br><br>";
        var_dump($b);
        print_r($b);
    ?>

<p> c. Agrega al código actual las siguientes asignaciones:</p>
    <?php

        $a = "ManejadorSQL";  //este muestra el mismo numero de caracteres que el inciso a.
        echo $a;
        echo "<br><br>";
        var_dump($a);
        print_r($a);

        echo "<br><br>";

        $b = "MySQL"; //aqui hubo una disminuyo el numero de caracteres o cadena
        echo $b;
        echo "<br><br>";
        var_dump($b);
        print_r($b);
    ?>
<p> d. Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de
asignaciones</p>
<p>$a = "ManejadorSQL";  //este muestra el mismo numero de caracteres que el inciso a.
        echo $a;
        echo "<br><br>";
        var_dump($a);
        print_r($a);

        echo "<br><br>";

        $b = "MySQL"; //aqui hubo una disminuyo el numero de caracteres o cadena
        echo $b;
        echo "<br><br>";
        var_dump($b);
        print_r($b);</p>

        



</body>

</html>