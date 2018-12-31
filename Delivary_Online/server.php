<?php
	session_start();
	$username = '';
	$email = '';
	$city = '';
	$errors = array();
	//connect to database

    $DB_host = "localhost";
    $DB_user = "root";
    $DB_pass = "";
    $DB_name = "deliveryrest";
//$db=mysqli_connect('localhost','root','','deliveryrest');
    $DB_con = new  PDO('mysql:host='.$DB_host.';dbname='.$DB_name, $DB_user, $DB_pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	//if regiseter button is clicked 'regiseter name for button'
	if(isset($_POST['register'])){
		
		$username= mysql_real_escape_string($_POST['username']);
		$password1= mysqم_real_escape_string($_POST['password1']);
		$re_password= mysql_real_escape_string($_POST['password2']);
		$email= mysql_real_escape_string($_POST['email']);
        $city= mysql_real_escape_string($_POST['city']);
		
		//ensure that fields not empty
		 if(empty($username)){
			 array_push($errors,"username is required");	 
		 }
		 if(empty($city)){
			 array_push($errors,"password is required");	 
		 }
		 if(empty($email)){
			 array_push($errors,"email is required");	 
		 }
		 if($password1 != $re_password){
			 array_push($errors,"the two password do not math");
		 }
		 // if there are no error ,save to database
		 if(count($errors) == 0){
			 $password = md5($password1);
			 $sql = "INSERT INTO users(username,city,password,Email,typeA) VALUES('$username','$city','$password','$email','user')";
			 mysqli_query($DB_con,$sql);
			 $_SESSION['username'] = $username;
			 $_SESSION['success'] = "You are now logged in";
			 header('location: index.php');
		 }
		}
		
		//log user in form login
		if(isset($_POST['login'])){
		$username= mysql_real_escape_string($_POST['username']);
		$password= mysql_real_escape_string($_POST['password']);
		
		//ensure that fields not empty
		 if(empty($username)){
			 array_push($errors,"username is required");	 
		 }
		 if(empty($password)){
			 array_push($errors,"password is required");	 
		 }
		 
		 if(count($errors) == 0){
			$password  = md5(password);
            $query = "select * from users where username = '$username' and password = '$password'";
			$result = mysqli_query($DB_con,$query);
			if(mysqli_num_rows($result) == 1){
			$_SESSION['username'] = $username;
			 $_SESSION['success'] = "You are now logged in";
			 header('location: index.php');
			}else{
				array_push($errors , "worng username  password combination");
			 header('location: index.php');
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