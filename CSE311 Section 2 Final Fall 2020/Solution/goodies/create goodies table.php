<?php

$link = mysqli_connect("localhost", "root", "", "final");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "CREATE TABLE goodies(
    pid int(9) NOT NULL PRIMARY KEY ,
    pname VARCHAR(40),
    color VARCHAR(15)
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>