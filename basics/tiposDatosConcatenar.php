<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // TIPOS VARIABLES
    // En PHP no es necesario declarar el tipo de Datos
    $dia = 4; // Tipo INT
    $salario = 2000000.50; // Tipo DOUBLE
    $nombre = "Sebastian"; // Tipo STRING
    $estado = true; // Tipo BOOLEAN

    // Impresión de Vbles
    echo "<br>Vble entero: $dia";
    echo "<br>Vble tipo double: ".$salario;
    echo "<br>Vble tipo string: ".$nombre;
    echo "<br>Vble tipo boolean: ".$estado;
    echo "<hr>";

    echo "{$nombre} gana \$$salario"; // Interpolación y escape de caracteres 
    echo "<br>";
    $texto = sprintf("Hoy es %d",$dia);
    echo $texto;
    $peras = 3;
    $manzanas = 5;
    $mangos = 4;
    $precioFrutas = 25500.30;
    $texto = sprintf("Soy %s y tengo %d peras, %d manzanas, %d mangos y costaron $%.2f", $nombre, $peras, $manzanas, $mangos, $precioFrutas);
    echo "<br>".$texto;

    // Uso de Heredoc
    echo "<hr>";
    $titulo = "Programa de formación";
    $texto = "Analisis y desarrollo de software";
    $html = <<<HTML
        <div class="card">
            <h2>$titulo</h2>
            <p>$texto</p>
        </div>
    HTML;
    echo $html;

    /****************/
    // Generar un numero aleatorio entre 10 y 15 y mostrar ese numero en texto
    echo "<hr>";
    $numAleatorio = rand(10, 15);
    $numerosVector = ["Diez","Once", "Doce", "Trece", "Catorce", "Quince"];
    $numeroDado = $numerosVector[$numAleatorio-10];
    echo "<br>El numero aleatorio en texto es: ".$numeroDado;
    ?>
</body>

</html>