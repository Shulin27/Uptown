<?php

require'db.php';
$na=$_GET['name'];
$ci=$_GET['city'];
$lo=$_GET['location'];
$pr=$_GET['price'];
$st=$_GET['storeys'];
$pl=$_GET['plotarea'];
$ye=$_GET['year'];
$be=$_GET['bed'];
$ba=$_GET['bath'];
$ki=$_GET['kitchen'];
$an=$_GET['agentname'];
$ao=$_GET['agentno'];
$de=$_GET['description'];

$query="INSERT INTO details (Name,City,Location,Price,Storeys,Plot_area,Year,Bed,Bath,Kitchen,Agent_name,Agent_no,Description) VALUES ('$na','$ci','$lo',$pr,$st,$pl,$ye,$be,$ba,$ki,'$an','$ao','$de')";
$run=mysqli_query($conn,$query); 
if($run)
{
echo "<a href='index.html'>Click Here to return to Home Page</a>";
}

?>