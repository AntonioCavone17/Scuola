<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo</title>
</head>
<style>
        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        
        .topnav {
          overflow: hidden;
          background-color: #333;
        }
        
        .topnav a {
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        
        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }
        
        .topnav a.active {
          background-color: #04AA6D;
          color: white;
        }
    </style>
</head>
<body>
    <div class="topnav">
        <a class="active" href="../login.html">Login</a>
        <a href="inserimento.html">Inserisci Recensione
        </a>
        <a href="ultime.php">Ultime Recensioni</a>
        <a href="riepilogo.php">Riepilogo Recensioni</a>
        <a href="logout.php">LogOut</a>
      </div>
      <?php
        session_start();

        $recensioni = $_SESSION['recensioni'];
        $numRecensioni = count($recensioni);
        $somma = 0;
        $recensioneMax = 5;
        $recensioneMin = 10;
        $destinazioneMax;
        $destinazioneMin;

        echo "<h1>Tutte le recensioni</h1>";
        echo "<table border='1'>";
        echo "<tr><th>Destinazione</th><th>Valutazione</th></tr>";
        foreach ($recensioni as $recensione) {
            echo "<tr>";
            echo "<td>",$recensione['destinazione'],"</td>";
            echo "<td>",$recensione['valutazione'],"</td>";
            echo "</tr>";
            $somma += $recensione['valutazione'];
            if($recensione['valutazione'] > $recensioneMax){
                $recensioneMax = $recensione['valutazione'];
                $destinazioneMax = $recensione['destinazione'];
            }elseif($recensione['valutazione'] < $recensioneMin){
                $recensioneMin = $recensione['valutazione'];
                $destinazioneMin = $recensione['destinazione'];
            }

            /*if($recensione['valutazione'] < 7){
                $minore7 = [
                    'destinazione' => $recensione['destinazione'],
                    'valutazione' => $recensione['valutazione']
                ];
            
                $_SESSION['inferiore7'][] = $minore7;
            }*/

            $presente = false;
            foreach ($_SESSION['inferiore7'] as $recensionePresente) {
                if ($recensionePresente['destinazione'] === $recensione['destinazione'] && $recensionePresente['valutazione'] === $recensione['valutazione']) {
                $presente = true;
                break;
                }
            }
            if(!$presente && $recensione['valutazione'] < 7) {
                $minore7 = [
                'destinazione' => $recensione['destinazione'],
                'valutazione' => $recensione['valutazione']
            ];
                $_SESSION['inferiore7'][] = $minore7;
            }
        };
        echo "</table>";

        $media = $somma / $numRecensioni;
        echo "<h2>Media Recensioni: $media</h2>";
        echo "Destinazione con valutazione più <B>alta</B>: $destinazioneMax";
        echo "<br>Destinazione con valutazione più <B>bassa</B>: $destinazioneMin";

        
        asort($_SESSION['inferiore7']);
        echo "<h3>Recensioni con valutazione minore di 7</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Destinazione</th><th>Valutazione</th></tr>";
        $arrayMinore7 = $_SESSION['inferiore7'];
        foreach ($arrayMinore7 as $recensione7) {
            echo "<tr>";
            echo "<td>",$recensione7['destinazione'],"</td>";
            echo "<td>",$recensione7['valutazione'],"</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
</body>
</html>