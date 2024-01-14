<?php
$nome =$_POST["nome"];
$cognome = $_POST["cognome"];
$value = "$cognome $nome";

setcookie("Utente", $value, time()+86400);

echo "Cookie: ",($_COOKIE["Utente"]),"";
?>