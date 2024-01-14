<?php
$nome =$_POST["nome"];
$cognome = $_POST["cognome"];
$value = "$cognome $nome";

setcookie("Utente", $value, time()+86400);

if(!isset($_COOKIE["Utente"])) {
    echo "Il Cookie Utente non è ancora settato";
  } else {
    echo "Il Cookie Utente è settato!<br>";
    echo "Cookie: ",($_COOKIE["Utente"]),"";
  }
?>