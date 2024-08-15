<?php
include("./connection.php");
echo "<link rel='stylesheet' type='text/css' href='style.css'>";

$query= mysqli_query($connection, "SELECT * FROM users") or die(mysqli_error($connection)) ;
echo $query;
echo "<table>
<tr>
<th>NO</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Username</th>
</tr>";
while($row = mysqli_fetch_assoc($query)){
    echo "
    <tr>
    <td>".$row['id']."</td>
    <td>".$row['FirstName']."</td>
    <td>".$row['LastName']."</td>
    <td>".$row['email']."</td>
    <td>".$row['telephone']."</td>
    <td>".$row['Username']."</td>
    <td><a href='./edit-user.php?thisID=".$row["id"]."'>Update</a></td>
    <td><a href='./userdelete.php?thisID=".$rows["id"]."'>Delete</a></td>
    </tr>
    ";
}
echo "</table>";


?>

