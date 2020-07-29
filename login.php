<?php
/*gfgh*/
require'db.php';
$mail=$_GET['email'];
$password=$_GET['pass'];
$query="SELECT Password FROM sigup WHERE Email_id='$mail'";
$run_query=mysqli_query($conn,$query); 
while($res=mysqli_fetch_assoc($run_query))
{
	if($password == $res['Password'])
	{
       echo "You have Logged In successfully<br>";
       echo "<a href='index.html'>Click Here to return to Home Page</a><br>";
       echo "<a href='entry.html'>Click Here if you wish to SELL YOUR OWN PROPERTY on our website</a>";

	}
}
?>