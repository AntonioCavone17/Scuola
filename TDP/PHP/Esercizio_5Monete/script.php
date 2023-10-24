<?php
    $centesimi = $_POST["centesimi"];
    
    $eur2 = 0;
    $eur1 = 0;
    $cent50 = 0;
    $cent20 = 0;
    $cent10 = 0;
    $cent5 = 0;
    $cent2 = 0;
    $cent1 = 0;


    while($centesimi != 0){
        if($centesimi >= 200){
            $centesimi -= 200;
            $eur2 += 1;
        }
        if($centesimi >= 100){
            $centesimi -= 100;
            $eur1 += 1;
        }
        if($centesimi >= 50){
            $centesimi -= 50;
            $cent50 += 1;
        }
        if($centesimi >= 20){
            $centesimi -= 20;
            $cent20 += 1;
        }
        if($centesimi >= 10){
            $centesimi -= 10;
            $cent10 += 1;
        }
        if($centesimi >= 5){
            $centesimi -= 5;
            $cent5 += 1;
        }
        if($centesimi >= 2){
            $centesimi -= 2;
            $cent2 += 1;
        }
        if($centesimi >= 1){
            $centesimi -= 1;
            $cent1 += 1;
        }
    }

    echo "
        Monete da 2 euro: ",$eur2,"<br>
        Monete da 1 euro: ",$eur1,"<br>
        Monete da 50 centesimi: ",$cent50,"<br>
        Monete da 20 centesimi: ",$cent20,"<br>
        Monete da 10 centesimi: ",$cent10,"<br>
        Monete da 5 centesimi: ",$cent5,"<br>
        Monete da 2 centesimi: ",$cent2,"<br>
        Monete da 1 centesimo: ",$cent1,"<br>
    ";

    for ($i = 0; $i < $eur2; $i++) {
        echo"<img src='images/2euro.png' width='100' height='100'>";
    }

    for ($i = 0; $i < $eur1; $i++) {
        echo "<img src='images/1euro.png' width='90' height='90'>";
    }

    for ($i = 0; $i < $cent50; $i++) {
        echo "<img src='images/50cent.png' width='80' height='80'>";
    }

    for ($i = 0; $i < $cent20; $i++) {
        echo "<img src='images/20cent.png' width='70' height='70'>";
    }

    for ($i = 0; $i < $cent10; $i++) {
        echo "<img src='images/10cent.png' width='60' height='60'>";
    }

    for ($i = 0; $i < $cent5; $i++) {
        echo "<img src='images/5cent.png' width='50' height='50'>";
    }

    for ($i = 0; $i < $cent2; $i++) {
        echo "<img src='images/2cent.png' width='40' height='40'>";
    }

    for ($i = 0; $i < $cent1; $i++) {
        echo "<img src='images/1cent.png' width='30' height='30'>";
    }   
?>