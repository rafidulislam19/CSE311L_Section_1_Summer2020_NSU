<?php

$link=mysqli_connect('localhost','root','','Homework2');
if ($link ==false)
{
    die("Error:Could not connect." .mysqli_connect_error());

}
$sql="CREATE TABLE Departments(
    Department_id int(6),
    Department_Name VARCHAR(20),
    Manager_id int(6),
    Location_id int(6)
    )";
    if (mysqli_query($link,$sql)) {
        echo "Table Created";
    }
    else {
        echo "Error: Could not able to create table." .mysqli_error($link);
    }
    mysqli_close($link)

    ?>