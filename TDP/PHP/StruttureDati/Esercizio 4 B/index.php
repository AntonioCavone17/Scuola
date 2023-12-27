<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 4 B - Cavone Antonio</title>
</head>
<body>
    <?php
        $array = array();
        $arrayPari = array();
        $arrayDispari = array();

        echo "Array: ";
        for ($i = 0; $i < 20; $i++) {
            $numero = rand(1, 100);
            $array[] = $numero;
            echo $numero, " ";
            
            if ($numero % 2 == 0) {
                $array_pari[] = $numero;
            } else {
                $array_dispari[] = $numero;
            }
        }

        echo "<br>";
        echo "Numero di numeri pari: ", count($array_pari), "<br>";
        echo "Numero di numeri dispari: ", count($array_dispari), "<br>";

        echo "Array dei numeri pari: ";
        foreach ($array_pari as $numero) {
            echo $numero, " ";
        }

        echo "<br>";
        echo "Array dei numeri dispari: ";
        foreach ($array_dispari as $numero) {
            echo $numero, " ";
        }
    ?>
</body>
</html>