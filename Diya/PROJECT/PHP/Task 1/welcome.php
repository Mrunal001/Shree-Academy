<html>
<head>
	<link rel="stylesheet" type="text/css" href="allcss.css">
</head>
<body id="homebody">
	<div id="homeid1">
		
		<?php
			$name=$_GET['x'];
			$id=$_GET['y'];
			/*$con= new mysqli("localhost", "root", "", "dixi");
			$sel="select name from stud where";
			$selrs=$con->query($sel);
			$row=$selrs->fetch_assoc();
			$sid= $row['name'];
			echo $sid;*/
		?>
		<p>Welcome  <?php  echo $name;?></p>
		<br>
		<?php echo "<a href=myprofile.php?x=".$id.">MyProfile</a>"; ?>
		<br>
		<a href="showall.php">ShowAll</a><br>
		<a href="search.html">Search</a>
	</div>


<?php


?>
</body>
</html>