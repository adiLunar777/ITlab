<?php
include ('Config.php');
$sql="SELECT * FROM employee ";
if($res = mysqli_query($link,$sql))
{
	if(mysqli_num_rows($res)>0)
	{		
		echo "<table border=3 bgcolor='#ff8533'>";
		echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Name</th>";
	  	echo "<th>Salary</th>";
		echo "<th>Address</th>";
		echo "</tr>";
	

	while ($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<th>".$row['ID']."</th>";
		echo "<th>".$row['Name']."</th>";
	  	echo "<th>".$row['Salary']."</th>";
		echo "<th>".$row['Address']."</th>";
		echo "</tr>";
	}
		echo "</table>";
	}
	
	else
	{
		echo "No matching records are found";
	}
	
}
else
{
	echo "ERROR: Couldn't execute $sql".mysqli_error($link);
}

