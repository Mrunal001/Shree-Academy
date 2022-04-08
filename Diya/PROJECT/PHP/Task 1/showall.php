<html>
<head>
	<link rel="stylesheet" type="text/css" href="allcss.css">
</head>
<body id="homebody">
	<div id="homeid1">
		<?php
			$con= new mysqli("localhost", "root", "", "dixi");
			$sel="select * from stud";
			$rs=$con->query($sel);
					
			echo "<table border=1>";
			echo "<tr><th>Name</th><th>Address</th><th>Gender</th><th>Qualiffication</th><th>Sid</th><th>Password</th><th>Update</th><th>Delete</th></tr>";
			for (;$row=$rs->fetch_assoc();)
			{
				//$row = $rs->fetch_assoc();
				echo "<tr>";
				echo "<td>". $row['name']. "</td>";
				echo "<td>". $row['address']. "</td>";
				echo "<td>". $row['gender']. "</td>";
				echo "<td>". $row['qualification']. "</td>";
				echo "<td><a href=''>". $row['sid']. "</a></td>";
				echo "<td>". $row['password']. "</td>";
				echo "<td><a href='myprofile.php?x=".$row['sid']." '>Update</a></td>";
				?>
				
				<td><a href="deleterecord.php?x=<?php echo $row['sid']?>" onclick="return confirm('are you sure')">Delete</a></td>
				<?php
				echo "</tr>";
			}
			echo "</table>";
		?>		
	</div>
</body>
</html>