<?php
include('./connection.php');

$id= $_GET['thisID'];
$query= mysqli_query($connection, "DELETE FROM users WHERE id='$id'");
if($query){
    echo "<h2>Data deleted successfully</h2>";
    echo "<br/>";
    echo "<a href='./display.php'> <h2>view data</h2> </a>";
}else{
    echo "<h2>Data not deleted</h2>";
    echo "<br/>";
    echo "<a href='./display.php'> <h2>view data</h2> </a>";
}
?>