<html>
<head>
	<link rel="stylesheet" type="text/css" href="allcss.css">
</head>
<body id="homebody">
	<div id="homeid1">
		<h1>Your Profile</h1>
	<?php 
		$id=$_GET['x'];
		$con= new mysqli("localhost", "root", "", "dixi");
		$sql="select * from stud where sid='$id'";
		$rs=$con->query($sql);
		$row=$rs->fetch_assoc();
	
	?>
			<form action="show_profile.php" >
				<input type="text" name="t1" value=<?php echo $row['sid']; ?> hidden=hidden>
			<table id="myprofiletb">
				<tr>
					<td id="myprofiletb">Name:</td>
					<td id="myprofiletb"><?php echo $row['name']; ?></td>
				</tr>
				<tr>
					<td id="myprofiletb">Address:</td>
					<td id="myprofiletb"><?php echo $row['address']; ?></td>
				</tr>
				<tr>
					<td id="myprofiletb">Gender:</td>
					<td id="myprofiletb"><?php echo $row['gender']; ?></td>
				</tr>
				<tr>
					<td id="myprofiletb">Qualification:</td>
					<td id="myprofiletb"><?php echo $row['qualification']; ?></td>
				</tr>
				<tr>
					<td id="myprofiletb">Sid:</td>
					<td id="myprofiletb"><?php echo $row['sid']; ?></td>
				</tr>
				<tr>
					<td id="myprofiletb">Password:</td>
					<td id="myprofiletb"><?php echo $row['password']; ?></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Update"></td>
				</tr></font>
			</table>
	</div>
</body>
</html>