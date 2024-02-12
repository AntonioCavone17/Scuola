<?php
$username = $_POST["username"];
$password = $_POST["password"];

session_start();

$_SESSION['loggedUsername'] = $username;  
$_SESSION['loggedPassword'] = $password;
$userid = session_id();
$_SESSION['userid'] = $userid;


$target = "login.html";
$linkName = "loginSuccessful";

echo $_SESSION['userid'];
echo "<br>";
echo "Bravo, ti sei registrato! Accedi qui: <a href='login.html'>Accedi</a>";
?>