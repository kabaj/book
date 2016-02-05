<?php


session_start();
require_once (dirname(__FILE__)."/config.php");
require_once (dirname(__FILE__)."/book.php");



$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbBaseName);

if($conn->connect_errno){
    die("Db connection not properly".$conn->connect_error);
}

User::SetConnection($conn);