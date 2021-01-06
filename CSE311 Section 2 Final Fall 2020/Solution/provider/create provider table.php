<?php

$link = mysqli_connect("localhost", "root", "", "final");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "CREATE TABLE provider(
    sid int(9) NOT NULL PRIMARY KEY ,
    sname VARCHAR(30),
    address VARCHAR(40)
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>
