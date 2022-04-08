<?php

$id=$_GET['x'];
$con= new mysqli("localhost", "root", "", "dixi");
$sel="delete from stud where sid='$id'";
$rs=$con->query($sel);

if($rs>0)
{
	//echo "record deleted....";
	header("location:showall.php");
}

?>
