<?php

include '../includes/menu.php';

$email = $password = "";


if(isset($_POST["submit"])){
    if(empty($_POST["email"])){
      echo " The email is required";
    }
    else{
        $email = $_POST["email"];
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "Email must be a valid email";
        }
    }
        if(empty($_POST["password"])){
        $password =" The password is required";
    }
    else{
        $password = validator($_POST["password"]);
    }
        if(empty($_POST["tel"])){
        $tel =" The tel is required";
    }
    else{
        $tel = validator($_POST["tel"]);
    }
    
}


function validator($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<div class="container pt-4">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">



        <div class="form-group">
            <label for="">Name</label>
            <input type="text" email="email" id="email" class="form-control" placeholder="Your email">
            <span class="error"><?php echo $email;?></span>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Your password">
            <span class="error"><?php echo $password;?></span>

        </div>


        <button class="btn btn-secondary" type="submit" name="submit">Login</button>
    </form>
</div>

<?php
include '../includes/footer.php';
?>