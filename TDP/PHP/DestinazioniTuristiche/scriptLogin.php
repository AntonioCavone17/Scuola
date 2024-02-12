<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$loggedUsername = $_SESSION["loggedUsername"];
$loggedPassword = $_SESSION["loggedPassword"];

$_SESSION["logged"] = true;

echo $_SESSION['userid'];
echo "<br>"; 
if($username == $loggedUsername  && $password == $loggedPassword){
    header("Location: pagineProtette/inserimento.html");
}else{
    echo "Credenziali errate! Riprova!";
    echo "<br><a href=login.html>Login</a>";
    echo "<br> Credenziali: ",$_SESSION["loggedUsername"]," | ",$_SESSION["loggedPassword"],"";
}
?>