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

    $username= mysql_real_escape_string( $_POST['username']);
    $password= mysql_real_escape_string($_POST['password']);
    $email= mysql_real_escape_string($_POST['email']);
    $type= mysql_real_escape_string($_POST['type']);




    // if there are no error ,save to database


        $sql = "INSERT INTO `users`(username, `passWord`, `Email`, `typeWork`, `state`) VALUES ($username ',' $password ',' $email ',' $type ','1' )_";
        mysqli_query($DB_con,$sql);

    header('location: orders.php');
}
?>