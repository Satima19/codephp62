<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'dbname';

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($mysql->connect_errno) {
    printf ("Connect failed: %s\n", $mysql->connect_error);
    exit();
}else{
    echo 'success';    
}