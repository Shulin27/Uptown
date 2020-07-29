<?php 
$server="localhost";
$username='root';
$password="";

$conn=new mysqli($server,$username,$password);
if($conn)
{
}
else
{
	echo "Connection Error";
}


$query="CREATE DATABASE property";
$run=mysqli_query($conn,$query);
if($run)
{
	echo "DATABASE created";	
}
$query1="USE property;";

$run1=mysqli_query($conn,$query1); 
?>

