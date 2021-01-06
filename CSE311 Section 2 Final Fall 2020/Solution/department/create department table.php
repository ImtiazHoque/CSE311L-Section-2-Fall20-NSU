<?php

$link = mysqli_connect("localhost", "root", "", "final");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "CREATE TABLE department(
    fid DECIMAL(9,0) NOT NULL PRIMARY KEY ,
    fname VARCHAR(30),
    deptid DECIMAL(2,0)
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>