<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultime 3 Recensioni</title>
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

        $recensioni = array_slice($_SESSION['recensioni'], -3);
        
        
        echo "<h1>Ultime 3 recensioni</h1>";
        echo "<table border='1'>";
        echo "<tr><th>Destinazione</th><th>Valutazione</th></tr>";
        foreach ($recensioni as $recensione) {
            echo "<tr>";
            echo "<td>",$recensione['destinazione'],"</td>";
            echo "<td>",$recensione['valutazione'],"</td>";
            echo "</tr>";
        };
      ?>
</body>
</html>