<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 4 A - Cavone Antonio</title>
</head>
<body>
    <?php
        $array = array();
        $reverse = array_reverse($array);
        echo "Array: ";
        for($i = 0; $i <= 10; $i++){
            $array[$i] = rand(10,100);
            echo "<B>",$array[$i],"</B>";
            echo " ";
        }
        $reverse = array_reverse($array);
        echo "<br>Array invertito: ";
        foreach ($reverse as $value) {
            echo "<b>", $value, "</b> ";
        }
        //Viene assegnato il valore di reverse a value volta per volta e viene stampato
    ?>
</body>
</html>