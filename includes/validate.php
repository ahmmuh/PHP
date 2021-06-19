<!-- <?php
$name = $email = $tel = "";


if(isset($_POST['submit'])){
    if(empty($_POST["name"])){
        $name =" The name is required";
    }
    else{
        $email = validator($_POST["email"]);
    }
        if(empty($_POST["email"])){
        $email =" The email is required";
    }
    else{
        $email = validator($_POST["email"]);
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


//database connection_aborted
<?php
$servername ="localhost";
$username = "root";
$dbname = "users";
$password ="password";
$conn = new mysqli($servername,$username,$dbname,$password);
if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
}
echo "Connection successfully";
$name  = $email = $pass = $tel = "";


$sql = "INSERT INTO user_table (name, email, pass,tel)
VALUES ('Ahmed Mukhtar', 'mukhtar1100@hotmail.com',123456,0734754392)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?> -->