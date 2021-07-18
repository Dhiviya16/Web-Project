<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "", "register");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE servicepro(
    name VARCHAR (70) NOT NULL PRIMARY KEY,
    email VARCHAR (70) NOT NULL,
    contact VARCHAR(20) NOT NULL,
    service VARCHAR (50) NOT NULL,
    summary VARCHAR (255) NOT NULL   
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>