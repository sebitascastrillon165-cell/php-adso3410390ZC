<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // ORD 
    echo "La funcion de ORD() es obtener el valor ASCII (o el valor numérico del primer byte) de una cadena o carácter.";
    echo "<hr>";
    echo "Ejemplo ord(A) devuelve 65 (el código ASCII de la A mayúscula).";
    echo "<hr>";
    $letra = "A";
    echo ord($letra);
    echo "<hr>";

    /*****************/
    // Shuffle

    echo "La funcion shuffle sirve para mezclar o desordenar de forma aleatoria elementos de un array esta a comparacion de las demas utiliza print_r() ya que se suele usar esta funcion junto a shuffle() simplemente para poder ver el resultado de la mezcla en la pantalla, ya que las funciones como echo no pueden mostrar arrays completos por sí solas";
    echo "<hr>";
    echo "El array original sera: cartas = As, Rey, Reina";
    echo "<hr>";
    echo "Y este el resultado el cual puede cambiar varias veces:<br>";
    $cartas = ["As", "Rey", "Reina"];
    shuffle($cartas);
    print_r($cartas);
    echo "<hr>";

    /****************/
    // Sprintf

    echo "La funcion sprintf sirve para generar y devolver una cadena de texto formateada en lugar de imprimirla directamente en la pantalla (a diferencia de printf()).<br>¿Cómo funciona?<br>
    Le pasas una cadena de formato con marcadores de posición (como %s para textos o %d para números) y los valores que quieres que los sustituyan. La función devuelve la cadena resultante para que puedas guardarla en una variable, usarla en otra función o retornarla.";
    echo "<hr>";
    $nombre = "Ana";
    $edad = 25;
    // Devuelve el string formateado y lo guarda en la variable $mensaje
    $mensaje = sprintf("Hola, mi nombre es %s y tengo %d años.", $nombre, $edad);
    echo $mensaje;
    // Resultado en pantalla: Hola, mi nombre es Ana y tengo 25 años
    echo "<hr>";
    $precio = 1250.5;
    echo sprintf("Total: $%.2f", $precio);
    echo "<hr>";
    
    /***************/
    // Addslashes
    
    echo "La función addslashes() en PHP sirve para devolver una cadena de texto con barras invertidas (\) delante de ciertos caracteres especiales y la funcion añade una barra invertida antes de las comillas simples, dobles, barra invertida o caracter null .";
    echo "<hr>";
    $nombre = "O'Reilly";
    echo addslashes($nombre);

    /*****************/
    // array_diff
    ?>
</body>

</html>