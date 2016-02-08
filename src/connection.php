<?php


session_start();

require_once(dirname(__FILE__) . "/book.php");



$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbBaseName);
$result=$conn->query($conn);

if($conn->connect_errno){
    die("Db connection not properly".$conn->connect_error);
}

$book1 = new book('jsjsjsjsjsjsjsjsjssjjsjssjjssjjs');

echo($book1);

User::SetConnection($conn);