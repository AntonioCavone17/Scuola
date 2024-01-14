<?php
$username = $_POST["username"];
$password = $_POST["password"];
$remember = isset($_POST["remember"]) ? true : false;

if($remember){
    $time = 86400;
}else {
    $time = 0;
}

//----------------------|Cookie|------------------------------

$value = "$username|$password";

setcookie("User", $value, time()+$time);


if(!isset($_COOKIE["User"])) {
    echo "Il Cookie User non e' ancora settato";
  } else {
    echo "Il Cookie User e' settato!<br>";
    echo "Cookie: ",($_COOKIE["User"]),"<br>";
}

$credenzialiCookie = $_COOKIE['User'];
$credenzialiArray = explode('|', $credenzialiCookie);

$usernameCookie = $credenzialiArray[0];
$passwordCookie = $credenzialiArray[1];

if($username == $usernameCookie && $password == $passwordCookie){
    echo "Credenziali corrette! Ti stiamo reindirizzando nella pagina riservata!";
    header("Location: PaginaRiservata.php");
    exit();
}else{
    echo "Le credenziali inserite sono errate!";
}
?>
