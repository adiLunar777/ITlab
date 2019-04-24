<?php
include('Config.php');


$name=$_POST['Name'];
$s=$_POST['Salary'];
$a=$_POST['Address'];

$result=mysqli_query($link,"Select count(*) as Count from employee");

while($row=mysqli_fetch_array($result))
{	$cnt=$row['Count'];
	echo $cnt;
	$sql ="insert into employee(ID,Name,Salary,Address) values ($cnt+1,'$name',$s,'$a')";
	if(mysqli_query($link,$sql))
	echo "Record inserted successfully";
	else
	echo "Error Occurred";
}
mysqli_close($link);
?>
