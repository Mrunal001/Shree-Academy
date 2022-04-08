<?php
$nm=$_GET['name'];
$add=$_GET['address'];
$gen=$_GET['r1'];
$que=$_GET['que'];
$id=$_GET['id'];

$con= new mysqli("localhost", "root", "", "dixi");

$up="update stud set name='$nm', address='$add', gender='$gen', qualification='$que' where sid='$id'";
$rs=$con->query($up);

	
if($rs>0)
{
	//echo "Record Updated....";
	header("location:myprofile.php?x=$id");
}
//$row=$selrs->fetch_assoc();

?>