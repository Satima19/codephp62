<?php
$dbhost =  'localhost' ;
$dbuser =  'root' ;
$dbpass =  '' ;
$dbname =  'codephp62' ;

$mysqli = new  mysqli($dbhost, $dbuser, $dbpass, $dbname );
if($mysqli->connect_errno){
     print("Connect failed: %s\n ,$mysqli->connect_error ");
     exit();
}
     // echo 'success';
     echo 'after connect database';

?>