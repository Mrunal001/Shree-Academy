<?php

$id=$_GET['id'];
$pwd=$_GET['pwd'];

$con= new mysqli("localhost", "root", "", "dixi");
$sql="select * from stud where sid='$id' and password='$pwd'";
$rs=$con->query($sql);
$row=$rs->fetch_assoc();
	
	$sid=$row['sid'];
	$pwd=$row['password'];
	
if($sid=="" && $pwd=="")
{
	echo "No Record found..";
}
else
{
	header("Location:welcome.php?x=".$row['name']."&y=".$id);
}
?>