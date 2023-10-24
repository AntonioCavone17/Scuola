<?php

$ax = $_POST["ax"];
$bx = $_POST["bx"];
$c = $_POST["c"];

echo "<B>Equazione: </B> $ax X<sup>2</sup> + $bx X +    $c = 0<br><br>";

function calcoloDelta($ax, $bx, $c){

    $bSquared = pow($bx,2);

    return $bSquared-4*($ax*$c);

}

$delta = calcoloDelta($ax, $bx, $c);

if ($delta < 0){
    echo "L'equazione non ammette soluzioni reali";
}else if ($delta > 0){
    echo "L'equazione ammette soluzioni reali e distinte";
    echo sqrt($delta);   
}else if ($delta == 0){
    echo "L'equazione ammette soluzioni reali che sono uguali";
    echo sqrt($delta);
}

?>