<?php
	$connect = mysqli_connect("localhost","root","","deliveryrest");
    $sql = "INSERT INTO USERS(username,password,email,typeA)
     VALUES('".$_POST["username"]."','".$_POST["password"]."','".$_POST["Email"]."','".$_POST["level"]."')  ";
    if(mysqli_query($connect,$sql)){
        echo 'Data Inserted';
    }
?>