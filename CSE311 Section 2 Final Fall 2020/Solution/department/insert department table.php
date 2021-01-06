<?php



$link = mysqli_connect("localhost", "root", "", "final");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "INSERT INTO department (fid, fname, deptid) VALUES
(90873519,'Elizabeth',11),
(142519864,'Ivana Teach',20),
(242518965,'James Smith',68),
(248965255,'Barbara Wilson',12),
(254099823,'Patricia Jones',68),
(287321212,'Michael Milier',12),
(489221823,'Richard Jacksom',33),
(489456522,'Linda Davis',20),
(548977562,'Ulysses Tech',20)";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>