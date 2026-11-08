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

    echo "La función addslashes en PHP sirve para devolver una cadena de texto con barras invertidas (\) delante de ciertos caracteres especiales y la funcion añade una barra invertida antes de las comillas simples, dobles, barra invertida o caracter null .";
    echo "<hr>";
    $nombre = "O'Reilly";
    echo addslashes($nombre);
    echo "<hr>";

    /*****************/
    // array_diff

    echo "La función array_diff() en PHP sirve para comparar el primer array con uno o más arrays y devolver los valores que están en el primer array, pero que no se encuentran en ninguno de los demás<br> El array que tendremos sera: inv = manzana, pera ";
    echo "<hr>";
    echo "Y este sera el resultado con la funcion array_diff: <br>";
    $inv = ["manzana", "pera"];
    $vendidos = ["pera"];
    print_r(array_diff($inv, $vendidos));
    echo "<hr>";

    /******************/
    // array_unique
    echo "La función array_unique() en PHP sirve para eliminar los valores duplicados de un array, devolviendo un nuevo array con los elementos únicos, este seria el array: <br> correos = a@t.com, b@t.com, a@t.com";
    echo "<hr>";
    echo "Este seria el resultado utilizando la funcion array_unique:<br>";
    $correos = ["a@t.com", "b@t.com", "a@t.com"];
    print_r(array_unique($correos));
    echo "<hr>";

    /*****************/
    // chmod
    echo "En PHP, la función chmod() sirve para cambiar los permisos de acceso de un archivo o un directorio en el sistema operativo del servidor";
    echo "<hr>";
    if (chmod("archivo.txt", 0644)) {
        echo "Permisos cambiados";
    }
    echo "<hr>";

    /****************/
    // file_get_contents
    echo "La función file_get_contents() en PHP sirve para leer el contenido completo de un archivo o de una URL y devolverlo en forma de una cadena de texto (string)";
    echo "<hr>";
    $txt = file_get_contents("texto.txt");
    if ($txt !== false) {
        echo $txt;
    }
    echo "<hr>";

    /***************/
    // http_response_code

    echo "La función http_response_code() en PHP sirve para obtener el código de estado HTTP actual o para establecer uno nuevo en los encabezados de la respuesta que el servidor envía al navegador o cliente";
    echo "<hr>";
    http_response_code(404);
    echo "Código: " . http_response_code();

    ?>
</body>

</html>