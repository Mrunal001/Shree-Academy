<?php

$nm=$_GET['snm'];
$add=$_GET['sadd'];
//$gen=$_GET['r1'];
$qua=$_GET['qua'];
$id=$_GET['id'];
$pass=$_GET['pwd'];

if(isset($_GET["r1"]))
{
	$gen=$_GET["r1"];
}
$con= new mysqli("localhost", "root", "", "dixi");

$sel="select sid, password from stud where sid='$id' and password='$pass'";
$selrs=$con->query($sel);
	
	$row=$selrs->fetch_assoc();
	$sid= $row['sid'];
	//$pwd=$row['password'];
	
if($id==$sid)	
{
	header("Location:signuphtml.php?x=1");
	//echo "Id already exsist";
}
else
{
	$sql="insert into stud values('$nm', '$add', '$gen', '$qua', '$id', '$pass')";
	$rs=$con->query($sql);

	if($rs>0)
	{
		header("Location:login.html");
	}
	else
	{
		echo "not inserted..";
	}
}
?>