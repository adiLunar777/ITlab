<?php
include ('Config.php');
$sql="Update employee set Name = 'Nicholas Fury' where ID = 8";

if(mysqli_query($link,$sql))
{	echo "Record Successfully Inserted</br>";
}
else 
{
	echo "Error Updating database</br>".mysqli_error($link);
}
