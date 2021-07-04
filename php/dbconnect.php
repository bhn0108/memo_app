<?php
    //DB接続
    try {
        $db = new PDO('mysql:dbname=mydb;host:localhost:3306;charset=utf8', 'root', 'root');
    } catch(PDOException $e) {
        echo 'DB接続エラー：'. $e->getMessage();
        exit();
    }

?>