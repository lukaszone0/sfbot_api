<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    session_start();

    require("functions.php");
    require("pattern.php");
    require("response.php");
    require("crypto.php");
    require("socket.php");
    require("user.php");

    $resp = new respose();

    if(!isset($_GET['oko']) or !isset($_GET['oko'])){
        $resp->message = "data is empty";
    }
    else {
        $user = new user();
        $user->init(json_decode($_GET['oko']));
    }
    
    exit(json_encode($resp));
?>