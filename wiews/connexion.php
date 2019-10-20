<?php


$con = mysqli_connect("localhost", "root", "wade", "rendezvous_medicale");  
if(!$con)  
{  
     echo 'Database Connection Error ' . mysqli_connect_error($con);  
}  
$query = "SELECT * FROM secretaire";  
$result = mysqli_query($con ,$query );  
while($row = mysqli_fetch_assoc($result))  
{  
     $user= $row['user_secretaire'];
     $pass= $row['password_secretaire'];

}  




 ?> 