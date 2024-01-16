<?php
session_start();
$id = session_id();

if (!isset($_SESSION['count']))
   $_SESSION['count'] = 1; 
else 
   $_SESSION['count']++; 
echo "BENVENUTO nella PAGINA - 1 - del SITO<br><br>";
echo "Ciao, questa pagina e' stata vista da te <B>",$_SESSION["count"],"</B> volte<br><br>";
echo "Il tuo codice identificativo in questa sessione e': <B>$id</B>";
?>