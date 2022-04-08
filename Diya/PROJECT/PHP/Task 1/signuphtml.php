<html>
<head>
	<link rel="stylesheet" type="text/css" href="allcss.css">
	<script type="text/javascript">
		function show()
		{
			//var nm=document.getElementById("name").value;
			var nm=document.getElementById("name");
			var add=document.getElementById("add");
			var id=document.getElementById("eid");					
			nm.value="";
			add.value="";
			id.value="";
			pass.value="";
		}
		function check()
		{
			var pass=document.getElementById("pwd").value;
			var rpass=document.getElementById("rpwd").value;
			var s=document.getElementById("d2");
			if(pass==rpass)
			{
				return true;
				//window.location.replace("search.html");
			}
			else
			{		
				s.innerHTML="Password Does not Match";
				return false;
			}	
		}
	</script>
</head>
<body id="homebody">
	<div id="homeid1">
		<form action="signup.php">
		
		Name : <input type="text" name="snm" id="name"  required><br><br>
		Address : <input type="text" name="sadd" id="add" required><br><br>
		Gender : <input type="radio" name="r1" id="gen" value="male">Male
				<input type="radio" name="r1" id="gen" value="female">Female<br><br>
		Qualification : <select name="qua" id="qua">
							<option>-- Select Qualification --</option>
							<option>BCA</option>
							<option>BBA</option>
							<option>MCA</option>
							<option>MBA</option>
						</select><br><br>
		id : <input type="text" name="id" id="eid" required><span name="dd" id="d1">
			<?php
				if(isset($_GET["x"]))
				{
					echo "User Id already exsist";
				}
			?>
		</span><br><br>
		
		Password : <input type="password" name="pwd" id="pwd" required oncontextmenu="return false"><br><span id="d2"></span><br>
		Re-Enter Password : <input type="password" id="rpwd" required oncontextmenu="return false"><br><br>
		<input type="submit" value="Signup" onclick="return check()">&nbsp;&nbsp;<input type="button" name="Cancle" value="Cancle" onclick="return show()">
		</form>	
	</div>
	
</body>
</html>