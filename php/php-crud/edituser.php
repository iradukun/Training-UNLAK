<?php
include('./connection.php');
//  we're using GET method concept to get data from one file throught the url brwoser
$id= $_GET['thisID'];



$query= mysqli_query($connection, "SELECT * FROM users WHERE id= '$id'");

if($query){
while($row= mysqli_fetch_array($query)){
?>
<div class="container">
<div class="heading">
    <h1> College Apade </h1>
</div>
<div class="form">
<h1 class="header"> Update account</h1>
<form action="update.php" method="POST">
<form action="update.php" method="POST">

<div class="row">
<input type="hidden" name="user_id" value=<?php echo $row["user_id"]; ?>>
<label for="fname"> First Name</label>
<input type="text" name="firstName" id="fname" value=<?php echo $row["firstName"]; ?>>
</div>
<div class="row">
<label for="lname"> Last Name</label>
<input type="text" name="lastName" id="lname" value="<?php echo $row["lastName"];?>">
</div>
<div class="row">
<label for="email"> Email</label>
<input type="text" name="email" id="email" value="<?php echo $row["email"];?>">
</div>
<div class="row">
<label for="tel"> Telephone</label>
<input type="text" name="telephone" id="tel" value="<?php echo $row["telephone"];?>">
</div>
<div class="row">
<label for="gender"> Gender</label>
<?php if($row["gender"]=="Male"){?>
<input type="radio" name="gender" id="male" value="Male" checked><label for="Male"
class="special">Male</label>
<input type="radio" name="gender" id="female" value="Female"><label for="Female"
class="special">Female</label>
<?php } else{?>
<input type="radio" name="gender" id="male" value="Male" checked><label for="Male"
class="special">Male</label>
<input type="radio" name="gender" id="female" value="Female"><label for="Female"
class="special">Female</label>
<?php }?>

</div>
<div class="row">
<label for="nationality"> Nationality</label>
<Select name="nationality" id="nationality">
<option value="Rwanda"> <?php echo $row["nationality"];?></option>
</Select>
</div>
<div class="row">
<label for="username"> User Name</label>
<input type="text" name="username" id="username" value="<?php echo $row["username"];?>">
</div>

<div class="submit">

<input type="submit" name="formsubmit" value="Update">
</div>
</form>
<?php
    }
}
?>
