<?php

$link = mysqli_connect("localhost", "root", "", "final");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "CREATE TABLE course(
    snum DECIMAL(9,0) ,
    cname VARCHAR(40) ,
    PRIMARY KEY(snum,cname)

)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>