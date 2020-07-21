<?php

$link=mysqli_connect('localhost','root','','Homework2');
if ($link ==false)
{
    die("Error:Could not connect." .mysqli_connect_error());

}
$sql="CREATE TABLE Locations(
    Location_id int(4) PRIMARY KEY NOT NULL,
    Street_Address VARCHAR(40),
    Postal_Code VARCHAR(12),
    City VARCHAR(30) NOT NULL,
    State_Province VARCHAR(25),
    Country_ID VARCHAR(2)
    )";
    if (mysqli_query($link,$sql)) {
        echo "Table Created";
    }
    else {
        echo "Error: Could not able to create table." .mysqli_error($link);
    }
    mysqli_close($link)

    ?>