<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 5</h1>

<?php
    header ("Content-type: text/html;charset=\"utf-8\"");

    for ($i=1;$i<=10;$i++)
    {
        echo "<p>$i</p>";
    }
    echo "<p>Finaliza ciclo for</p>";

    for ($i=10;$i>=0;$i--)
    {
        echo "<p>$i</p>";
    }
    echo "<p>Finaliza ciclo for</p>";

    $familia = array("Maria", "Ana", "José", "Pedro");

    for ($i=0;$i<=sizeof($familia);$i++)
    {
        echo "<h2>$familia[$i] numero de elemento $i </h2>";
        echo "<br>";
    }

    $familia = 0;

    while($familia <=3) {
        echo "<br><br>";
        echo "Numero de elemento: $familia <br><br>";
        $familia++; 
    }

    $familia = array("Maria", "Ana", "José", "Pedro");

    foreach ($familia as $fam) {
        echo "<br><br>";
        echo $fam;
        echo "<br><br>";
    }

?>

</body>
</html>