<?php
include ('Config.php');
$sql="insert into employee(ID,Name,Salary,Address) values (8,'Optimus Prime',3000,'Provident Wellworth,Doddbalapura')";
$sql1="SELECT * FROM employee ";
$res = mysqli_query($link,$sql1);
if(mysqli_query($link,$sql))
{	echo "Record Successfully Inserted</br>";
}
else 
{
	echo "Error inserting into database</br>".mysqli_error($link);
}
while($row=mysqli_fetch_array($res))
{	$id=$row['ID'];
	$nm=$row['Name'];
	$sal=$row['Salary'];
	$addr=$row['Address'];
	
	echo "</br>ID : ".$id." Name : ".$nm." Salary : ".$sal." Address : ".$addr."<br/>";  
}
mysqli_close($link);
?>
