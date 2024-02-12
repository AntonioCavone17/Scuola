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
      background-color: #04AA6D;
      color: white;
    }
    </style>
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
    echo $_SESSION['userid'];

    $destinazione = $_POST['destinazione'];
    $valutazione = $_POST['valutazione'];  


    $recensione = [
        'destinazione' => $_POST['destinazione'],
        'valutazione' => $_POST['valutazione']
    ];

    $_SESSION['recensioni'][] = $recensione;

    echo "<br>Recensione Inserita!";
    echo "<br>Inserisci un altra recensione: <a href='inserimento.html'>Inserisci</a>"
    ?>
</body>
</html>
