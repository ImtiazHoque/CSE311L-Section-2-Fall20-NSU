<?php

$mysqli_connection = new mySQLi("Localhost", "root","","final");

if($mysqli_connection->connect_error){

    echo"Not connected error". $mysqli_connection->connect_error;
}

else{

    echo"Connected";
}

?>