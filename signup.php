<?php
require'db.php';
$na=$_GET['name'];
$pho=$_GET['phone'];
$mail=$_GET['email'];
$pass=$_GET['password'];
$query="INSERT INTO sigup(Name,Phone,Email_id,Password) VALUES ('$na','$pho','$mail','$pass')";
$run=mysqli_query($conn,$query);
if($run)
{
	echo "You have Signed Up successfully!!";
	echo "<a href='index.html'>Click Here to return to Home Page</a>";
}
?>