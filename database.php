<?php

    $dsn = "mysql:host=localhost;dbname=ozarktechwebdev_Ayden";
    $username = "ozarktechwebdev_ayden";
    $password = "Poketoken11";

    try{
    $db = new PDO($dsn, $username, $password);
        // echo("connected from db.php");
    } catch (PDOException $e)
    {
        $error_message = $e->getMessage();
        echo("<p>Error message: $error_message");
    }

?>