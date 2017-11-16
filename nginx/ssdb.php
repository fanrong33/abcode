<?php
    // ssdb.php?onlysetx=1
    require 'SSDB.class.php';
    try{
        $host = '';
        $ssdb = new SimpleSSDB($host, '8888', 5000); // 不同节点对应不同节点的SSDB
        $ssdb->auth('');
    }catch(Exception $e){
        // TODO 为失败编程
        die(__LINE__ . ' ' . $e->getMessage());
    }

    $ssdb->setx('name', 'fanrong33', 60);
    if($_GET['onlysetx']){

    }else{
        $d = $ssdb->get('name');
    }
    echo($d);

    $ssdb->close();

