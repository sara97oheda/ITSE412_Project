<?php
session_start();
$username = '';
$email = '';
$city = '';
$errors = array();


$connect = mysqli_connect("127.0.0.1", "root", "", "deliveryrest");
mysqli_set_charset($connect, "utf8");


if (mysqli_connect_error()) {
    die("can not connect to database, Faild: ".mysqli_connect_error());
}



//log user in form login
if(isset($_POST['login'])){
    $username= mysqli_real_escape_string($connect,$_POST['username']);
    $password= mysqli_real_escape_string($connect,$_POST['password']);

    //ensure that fields not empty
    if(empty($username)){
        array_push($errors,"username is required");
    }
    if(empty($password)){
        array_push($errors,"password is required");
    }

    if(count($errors) == 0){
        $password = md5($password);
        $query = "select * from users where  typeWork = 1 and username = '$username' and password = '$password'";
        $result = mysqli_query($connect,$query);
        if(mysqli_num_rows($result) == true){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');

        }else{
            $query = "select * from users where  typeWork = 2 and username = '$username' and password = '$password'";
            $result = mysqli_query($connect,$query);
            if(mysqli_num_rows($result)  == true){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location:admin/index.php');
                echo $_SESSION['username'];

            }else{
                array_push($errors , "worng username  password combination");

                header('location:404.html');
            }
        }
    }
}


//logout
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:index.php');
}

?>