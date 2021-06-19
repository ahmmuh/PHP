<?php
include '../includes/menu.php';
include '../db_connection.php';
$name = $email = $password = $telephone ="";

$errors = array("name"=>"","email"=>"","password"=>"","telephone"=>"");

if(isset($_POST['submit'])){
if(empty($_POST["name"])){
$errors['name'] =  "A name is required <br />";
}
else{
$name = $_POST["name"];


if(!preg_match("/^([a-zA-Z' ]+)$/",$name))
{
$errors['name'] =  "The name must be a letters and spaces";   
}
}

if(empty($_POST["email"])){
$errors['email'] =  "An email is required";   

}
else{
$email = $_POST["email"];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$errors['email'] =  "The email mus be a valid email <br />";   

}
}
if(empty($_POST["password"])){
$errors['password'] =  "The password is required <br />";   

}
else{
$password = $_POST["password"];
if(!preg_match("@[A-Z]@",$password)){
$errors['password'] =  "Password must be upercase <br />";   

}

}
if(empty($_POST["telephone"])){
$errors['telephone'] =  "The tel is required <br />";   

}
else{
$telephone = $_POST["telephone"];
if(!preg_match("@[0-9]@",$telephone)){
$errors['telephone'] =  "Telephone number must be digital <br />";   

}

}

if(array_filter($errors)){
    
}
else {
$sql = "insert into  user_table(name,email,password,telephone) values('$name','$email','$password','$telephone')";
   if(mysqli_query($conn,$sql)){
       header('Location: ../index.php');
   }
   else {
       echo "Query error " . mysqli_error($conn);
   }
}

}
?>

<div class="container mt-4">
    <form method="post" action="register.php">



        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $name?>" class=" form-control"
                placeholder="Your name">
            <span class="error"><?php echo $errors["name"];?></span>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $errors['email'];?>" class="form-control"
                placeholder="Your email">
            <span class="error"><?php echo $errors["email"];?></span>

        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="password" value="<?php echo $errors['password'];?>"
                class="form-control" placeholder="Your password">
            <span class="error"><?php echo $errors["password"];?></span>


        </div>
        <div class="form-group">
            <label for="">Telephone</label>
            <input type="text" name="telephone" id="telephone" value="<?php echo $telephone?>" class="form-control"
                placeholder="telephone">
            <span class="error"><?php echo $errors["telephone"];?></span>


        </div>

        <button class="btn btn-secondary" type="submit" name="submit">Register</button>
    </form>
</div>



<?php
include '../includes/footer.php';
?>