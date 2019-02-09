<?php

define('DB_SERVER', 'localhost'); // server eke detais
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ourcom');
 
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// connection eka check krnawa 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>  