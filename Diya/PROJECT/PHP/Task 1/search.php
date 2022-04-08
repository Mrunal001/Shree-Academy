<?php
$tx=$_GET['t1'];

$con = new mysqli("localhost", "root", "", "dixi");
$sql= "select * from stud";
$rs=$con->query($sql);

echo "<table border=1>";
				echo "<tr><th>Name</th><th>Address</th><th>Gender</th><th>Qualification</th><th>Sid</th></tr>";
for (;$row=$rs->fetch_assoc();)
{
	if(isset($_GET["r1"]))
	{
		$r=$_GET["r1"];
		if($r=="name")
		{
			if($tx==$row['name'])
			{			
				echo "<tr>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['address']."</td>";
				echo "<td>".$row['gender']."</td>";
				echo "<td>".$row['qualification']."</td>";
				echo "<td>".$row['sid']."</td>";
				echo "</tr>";
			}
		}
		if($r=="address")
		{
			if($tx==$row['address'])
			{
				echo "<tr>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['address']."</td>";
				echo "<td>".$row['gender']."</td>";
				echo "<td>".$row['qualification']."</td>";
				echo "<td>".$row['sid']."</td>";
				echo "</tr>";
			}
		}
	}
}

echo "</table>";


?>