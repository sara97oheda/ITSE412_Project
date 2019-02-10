<?php


$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "deliveryrest";
//$db=mysqli_connect('localhost','root','','deliveryrest');
$DB_con = mysqli_connect("127.0.0.1", "root", "", "deliveryrest");
mysqli_set_charset($DB_con, "utf8");

//if regiseter button is clicked 'regiseter name for button'
if(isset($_POST['register'])){

    $username= mysqli_real_escape_string($DB_con,$_POST['username']);
    $password= mysqli_real_escape_string($DB_con,$_POST['password']);
    $email= mysqli_real_escape_string($DB_con,$_POST['email']);


    //ensure that fields not empty
    if(empty($username)){
        array_push($errors,"username is required");
    }

    if(empty($email)){
        array_push($errors,"email is required");
    }

    // if there are no error ,save to database
    if(count($errors) == 0){
        $password = md5($password);
        $sql = "INSERT INTO users(username,password,Email,typeWork) VALUES('$username','$password','$email',1)";
        mysqli_query($DB_con,$sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}
?>