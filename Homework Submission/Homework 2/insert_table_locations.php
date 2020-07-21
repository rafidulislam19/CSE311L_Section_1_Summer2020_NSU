<?php

$link = mysqli_connect('localhost','root','','Homework2');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "INSERT INTO Locations(Location_id,Street_Address,Postal_Code,City,State_Province,Country_ID)VALUES
    
    (1400,'2014 Jabberwocky Rd','26192','Southlake','Texas','US'),
    (1500,'2011 Interiors Blvd','99236','South San Francisco','California','US'),
    (1700,'2004 Charade Rd','98199','Seattle','Washington','US'),
    (1800,'460 Bloor St. W.','ON M5S 1X8','Toronto','Ontario','CA'),
    (2500,'Magdalen Centre-The Oxford Sc. Park','OX9 9ZB','OXford','Oxford','UK')";
    
if (mysqli_query($link,$sql))
{
 echo "VALUES INSERTED";
}
 else
 {
   echo "Error : Could not able to create Table." .mysqli_error($link);
 }
 mysqli_close($link)

?>