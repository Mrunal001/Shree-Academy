<html>
<head>
	<link rel="stylesheet" type="text/css" href="allcss.css">
	<script type="text/javascript">
		function show()
		{
			var a=document.getElementById('que');
			var s1=document.getElementById('s1');
			if(a.value==1)
			{
				s1.innerHTML="Please Select Qualification";
				return false;
			}
			else
			{
				s1.innerHTML="";
				return true;
			}
		}		
	</script>
</head>
<body id="homebody">

	<div id="homeid1">
		<form action="update_profile.php">
		<h1>Update Your Profile</h1>
		<?php
			$id=$_GET['t1'];
			//echo $id;
			$con= new mysqli("localhost", "root", "", "dixi");
			$sql="select * from stud where sid='$id'";
			$rs=$con->query($sql);
			$row=$rs->fetch_assoc();
		?>
		<br>
		Name : <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

		Address : <input type="text" name="address" value="<?php echo $row['address'];?>"><br><br>

		Gender : 
			<?php 
				
				if($row['gender']=="female")
				{
			?>
					<input type="radio" checked="true" name="r1" value="female">Female

			<?php
				}
				else
				{
					echo "<input type=radio name=r1 value=female>Female";
				}
			?>

			<?php 
				
				if($row['gender']=="male")
				{
			?>
					<input type="radio" checked="true" name="r1" value="male">Male

			<?php
				}
				else
				{
					echo "<input type=radio name=r1 value=male>Male";
				}
			?>
			<br><br>
			<input type="text" value="<?php echo $row['qualification'];?>" readonly><br><br>
		Qualification : <select name="que" id="que">
							<option value=1>-- Select Qualification --</option>
							<option>BCA</option>
							<option>BBA</option>
							<option>MCA</option>
							<option>MBA</option>
						</select><span id="s1"></span><br><br>

		Sid : <input type="text" name="id" value="<?php echo $row['sid']; ?>" readonly><br><br>

		Password : <input type="text" value="<?php echo $row['password']; ?>" readonly><br><br>

		<input type="submit" value="Update My Profile" onclick="return show()">
		</form>
	</div>
	
</body>
</html>