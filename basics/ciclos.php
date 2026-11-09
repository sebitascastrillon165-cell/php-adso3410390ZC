<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos en PHP</title>
</head>
<body>
    <?php 
    $limite = 50;
    for ($i=0; $i < $limite; $i++) { 
        # Impresión de los numeros del 0 al 50
        echo "Numero: $i<br>";
    }

    // Ciclo While
    $limite = rand(50, 100);
    $inicio = 1;
    echo "<hr>";
    # Impresión de números del 1 al limite aleatorio (entre 50 y 100)
    while ($inicio <= $limite) {
        echo "[WHILE] Número: ".$inicio."<br>";
        $inicio ++;
    }

    // Do While
    $dia = date("d");
    $inicio = rand(10,20);
    # Mostrar los números de un número random (entre 10 y 20) a la fecha actual
    do {
        echo "[DO..WHILE] Número: $inicio";
        $inicio ++;
    } while ($inicio <= $dia);
    echo "<hr>";

    # Mostrar la tabla de multiplicar del 2.
    # Utilizar FOR, WHILE y DO...WHILE
   $numero = 2;
   for ($i=1; $i <= 10 ; $i++) { 
    echo "[FOR] $numero * $i = ".($numero * $i)."<br>";
   }
   echo "<hr>";
   # while
   $inicio = 1;
   while ($inicio <= 10) {
       $tabla = $inicio * 2;
       $inicio++;
       echo "<br>";
       echo "[WHILE] 2 * ".($inicio - 1)." = ".$tabla;
       }
    echo "<hr>";
    # Do..While
    $inicio = 1;
    do {
        $tabla = $inicio * 2;
        $inicio++;
        echo "<br>";
        echo "[DO..WHILE] 2 * ".($inicio - 1). " = ".$tabla;
    } while ($inicio <= 10);
    ?>
</body>
</html>