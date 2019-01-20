<?php
    	$connect = mysqli_connect("localhost","root","","deliveryrest");
        $sql = "DELETE FROM USERS WHERE id = '".$_POST["id"]."'";
        if(mysqli_query($connect,$sql)){
            echo 'Data Deleted';
        }
?>