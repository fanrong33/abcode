<?php
    require 'MySQL.class.php';
    try{
        $mysql = new MySQL('dbname', 'user','password', 'host', '3306');
    }catch(Exception $e){
        // TODO 为失败编程
        die(__LINE__ . ' ' . $e->getMessage());
    }
    $d = $mysql->executeSQL("select * from t_test limit 1");
    var_dump($d);

    $mysql->closeConnection();
