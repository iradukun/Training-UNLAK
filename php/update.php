<?php
include('./connection.php');

$user_id= $_POST["user_id"];
$firstName= $_POST["firstName"];
$lastName= $_POST["lastName"];
$email= $_POST["email"];
$telephone= $_POST["telephone"];
$gender= $_POST["gender"];
$nationality=$_POST["nationality"];
$username=$_POST["username"];

$query= "UPDATE users SET firstName='$firstName' ,
lastName='$lastName', gender='$gender',telephone='$telephone',
nationality='$nationality', username='$username' WHERE id='$user_id'";

$result= mysqli_query($connnection,$query);

if($result){
echo "<h1>Data updated successfully</h1>";
echo "<br/>";
echo "<a href='./display.php'> <h2>view data</h2> </a>";
// header("Location: ./display.php");
}else{
echo "<h1>Data not updated</h1>". mysqli_error();
echo "<br/>";
echo "<a href='./edituser.php'> <h2>Back</h2> </a>";
// header("Location: ./display.php");
}




?>