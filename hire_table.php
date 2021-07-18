<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "", "service");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE bookings(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    location VARCHAR (100) NOT NULL,
    problem VARCHAR (5000) NOT NULL,
    property CHAR(1) NOT NULL,
    date_time VARCHAR (30) NOT NULL,
    a_datetime VARCHAR(30) NOT NULL   
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>