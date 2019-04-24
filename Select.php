<?php
include ('Config.php');
$sql="SELECT * FROM employee ";
$res = mysqli_query($link,$sql);
while($row=mysqli_fetch_array($res))
{	$id=$row['ID'];
	$nm=$row['Name'];
	$sal=$row['Salary'];
	$addr=$row['Address'];
	
	echo "ID : ".$id." Name : ".$nm." Salary : ".$sal." Address : ".$addr."<br/>";  
}
