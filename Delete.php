<?php
include ('Config.php');
$sql="delete from employee where ID = 8";

if(mysqli_query($link,$sql))
{	echo "Successful deletion</br>";
}
else 
{
	echo "Error Deleting from database</br>".mysqli_error($link);
}
?>
