<?php
    $user = $_POST["username"];
    $pass = $_POST["password"];
    define("USERNAME", "admin");
    define("PASSWORD", "admin");

    controlloLogin($user, $pass);

    function controlloLogin($user, $pass){
        if($user == USERNAME && $pass == PASSWORD){
            echo "Username e password corretti!<br><B>Login effettuato!</B>";
        }else if($user != USERNAME & $pass != PASSWORD){  
            echo "<B>Username o password errati!</B>";  
        }else if($pass != PASSWORD){
            echo "<B>Password errata!</B>";
        }else if($user != USERNAME){
            echo "<B>Username errato!</B>";
        }
    }
?>