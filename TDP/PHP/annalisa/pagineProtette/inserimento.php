<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserimento</title>
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
      
      $nomeEvento = $_POST['nomeEvento'];
      $numeroPersone = $_POST['numeroPersone'];  


      $eventoPresente = false;
      foreach ($_SESSION['prenotazioni'] as &$prenotazione) {
          if ($prenotazione['nomeEvento'] === $nomeEvento){
              $prenotazione['numeroPersone'] += $numeroPersone;
              $eventoPresente = true;
          }
      }

      if (!$eventoPresente) {
          $prenotazione = [
              'nomeEvento' => $nomeEvento,
              'numeroPersone' => $numeroPersone
          ];

          $_SESSION['prenotazioni'][] = $prenotazione;
      }
      echo "<br>Prenotazione Inserita!";
      echo "<br>Inserisci un altra prenotazione: <a href='inserimento.html'>Inserisci</a>"; 
    }else{
      echo "Non sei loggato! Perfavore accedi qui: <a href=../login.html>Accedi</a>";
    }
    
    ?>
</body>
</html>
