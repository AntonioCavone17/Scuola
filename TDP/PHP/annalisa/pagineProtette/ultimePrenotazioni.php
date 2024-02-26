<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultime 5 Prenotazioni</title>
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
      background-color: #ff9933;
      color: white;
    }
    </style>
<body>
    <div class="topnav">
        <a class="active" href="../login.html">Login</a>
        <a href="inserimento.html">Inserisci Prenotazione
        </a>
        <a href="ultimePrenotazioni.php">Ultime Prenotazioni</a>
        <a href="riepilogoPrenotazioni.php">Riepilogo Prenotazioni</a>
        <a href="logout.php">LogOut</a>
      </div>
      <?php
        session_start();
        if($_SESSION["logged"]){
            $prenotazioni = array_slice($_SESSION['prenotazioni'], -5);
        
        
            echo "<h1>Ultime 5 prenotazioni</h1>";
            echo "<table border='1'>";
            echo "<tr><th>Nome Evento</th><th>Numero Persone</th></tr>";
            foreach ($prenotazioni as $prenotazione) {
              echo "<tr>";
              echo "<td>",$prenotazione['nomeEvento'],"</td>";
              echo "<td>",$prenotazione['numeroPersone'],"</td>";
              echo "</tr>";
            };
        }else{
          echo "Non sei loggato! Perfavore accedi qui: <a href=../login.html>Accedi</a>";
        }
        
      ?>
</body>
</html>