<?php
session_start();

if (!isset($_SESSION['loggedUsername'])){
	$_SESSION['loggedUsername'] = "username";
    $username = "admin";
    }

if (!isset($_SESSION['loggedPassword'])){
    $_SESSION['loggedPassword'] = "password";
    $password = "admin";
    }

if (isset($_POST['submit'])){	
    $username = $_POST['username'];
    $_SESSION['loggedUsername'] = $username;
    $password = $_POST['password'];    
    $_SESSION['loggedPassword'] = $password;
    $userid = session_id();
    $_SESSION['userid'] = $userid;
    }

if($_POST["username"] == $_SESSION["loggedUsername"] && $_POST["password"] == $_SESSION["loggedPassword"]){
    echo "Bravo, ti sei loggato!";
    echo "<br><a href=PagineProtette/menu.php>Premi per continuare</a>";
}else{
    echo "Credenziali errate! Riprova!";
    echo "<br><a href=index.html>Login</a>";
    echo "<br>",$_SESSION["loggedUsername"],"";
    echo "<br>",$_SESSION["loggedPassword"],"";
}

?>