<?php
    //建立mysql連線
    $servername = "us-cdbr-iron-east-02.cleardb.net";
    $username = "b36537a81fe787";
    $password = "f84bddf8";
    $dbname= "heroku_fc31d1b7f569183";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>