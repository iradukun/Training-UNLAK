<?php
include_once("./connection.php");
// include("./connection.php");
$firstName= $_POST["firstName"];
$lastName= $_POST["lastName"];
$email= $_POST["email"];
$telephone= $_POST["telephone"];
$gender=$_POST["gender"];
$nationality=$_POST["nationality"];
$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$encrypted_password= md5($password);

// if($password!=$cpassword){
//     echo "Password and Confirm Password do not match";
//     // redirect(base_url);
// };

// Query insertion
$query= mysqli_query($connection, 
"INSERT INTO users(firstName,lastName, telephone, gender, nationality, 
username,email, password) VALUES ('$firstName', '$lastName','$telephone', 
'$gender', '$nationality', '$username', '$email', '$encrypted_password')
");
if($query){
    echo "<h1> Registration is successful</h1>";
    echo "<br/>";
    echo "<a href='./display.php'> <h2>view data</h2> </a>";

    }else{
        echo "Registration failed";
        echo mysqli_error($connection);
        }


?>