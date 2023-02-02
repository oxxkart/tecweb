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

<p>3. Muestra el contenido de cada variable inmediatamente después de cada asignación,
verificar la evolución del tipo de estas variables (imprime todos los componentes de los
arreglo):

$a = “PHP5”; $z[] = &$a; $b = “5a version de PHP”; $c = $b*10; $a .= $b; $b *= $c; $z[0] = “MySQL”; </p>

<?php 
$a = "PHP5";
    echo $a;
        echo "<br>";
        var_dump($a);
        echo "<br>";
        print_r($a);

        echo "<br><br>";

$z[] = &$a;
    echo $z[0];
    echo "<br>";
    var_dump($z);
    echo "<br>";
    print_r($z);

    echo "<br><br>";
$b = "5a version de PHP";
        echo $b;
        echo "<br>";
        var_dump($b);
        echo "<br>";
        print_r($b);

        echo "<br><br>";
$c = strlen($b)*10;
        echo $c;
        echo "<br>";
        var_dump($c);
        echo "<br>";
        print_r($c);

        echo "<br><br>";
$a .= $b;
    echo $a;
    echo "<br>";
    var_dump($a);
    echo "<br>";
    print_r($a);

    echo "<br><br>";
$b *= $c;
    echo $b;
        echo "<br>";
        var_dump($b);
        echo "<br>";
        print_r($b);

        echo "<br><br>";
$z[0] = "MySQL";
        echo $z[0];
        echo "<br>";
        var_dump($z);
        echo "<br>";
        print_r($z);

        echo "<br><br>";
?>
<p>4. Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
la matriz $GLOBALS o del modificador global de PHP.</p>

<?php
function test() {
    $a = "PHP5";
    echo '$a en el ámbito global: ' . $GLOBALS['a'] . "<br>";
    echo '$a en el ámbito actual: ' . $a . "<br>";
    }
    $a = "Contenido de ejemplo";
    test();
    echo "<br><br>";

function test1 () {
    $a = "PHP5";
	$z = &$a; //aqui no pude realziar con corchetes tuve muchas dudas//
    echo '$z en el ámbito global: ' . $GLOBALS['z'] . "<br>";
    echo '$z en el ámbito actual: ' . $z. "<br>";
    }
    $z= "Contenido de ejemplo";
    test1 ();
    echo "<br><br>";
   
    function test2 () {
        $b = "5a version de PHP";
        echo '$b en el ámbito global: ' . $GLOBALS['b'] . "<br>";
        echo '$b en el ámbito actual: ' . $b. "<br>";
        }
        $b= "Contenido de ejemplo";
        test2 ();
        echo "<br><br>";

     function test3 () {
            $b = "5a version de PHP";
            $c = strlen($b)*10;
            echo '$c en el ámbito global: ' . $GLOBALS['c'] . "<br>";
            echo '$c en el ámbito actual: ' . $c. "<br>";
            }
            $c = "Contenido de ejemplo";
            test3 ();
            echo "<br><br>";
   
            function test4 () {
                $b = "5a version de PHP";
                $a .= $b;
                echo '$a . en el ámbito global: ' . $GLOBALS['a'] . "<br>";
                echo '$a . en el ámbito actual: ' . $a. "<br>";
                }
                $a = "Contenido de ejemplo";
                test4 ();
                echo "<br><br>";

                function test5 () {
                    $c = 170;
                    $b = "5a version de PHP";
                    $b *= $c;
                    echo '$b . en el ámbito global: ' . $GLOBALS['b'] . "<br>";
                    echo '$b . en el ámbito actual: ' . $b. "<br>";
                    }
                    $b = "Contenido de ejemplo";
                    test5 ();
                    echo "<br><br>";

                    function test6 () {
                        $z[0] = "MySQL";
                        echo '$z . en el ámbito global: ' . $GLOBALS['z'] . "<br>";
                        echo '$z . en el ámbito actual: ' . $z[0]. "<br>";
                        }
                        $z = "Contenido de ejemplo";
                        test6 ();
                        echo "<br><br>";

    ?>



</body>

</html>