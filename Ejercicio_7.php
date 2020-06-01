<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>

    <form>
        <h2>Números Primos<h2>
        <h3>Escribe el numero:</h3>
        <input name="numeroprimo" type="text" placeholder="Escribe el numero">
        <input type="submit" value="Calcular">
    </form>

<?php
    $numero=$_GET['numeroprimo'];
    $np=3;
    $primo=$numero%2!=0  ||  $numero==2;
    while($primo && $np<$numero){
        $primo=($numero%$np) !=0;
        $np=$np+2;
    }
    if($primo) {
        echo "<br><br>El numero $numero es primo <br><br>";
    }
    else {
        echo "<br><br>El numero $numero no es primo <br><br>";
    }

    #Variable numerico
    $numeroprimo = $np;
    echo "<br><br>El numero ingresado es numerico: $numeroprimo<br>";
    var_dump($numeroprimo);
    echo "<br><br>";
?>

</body>
</html>