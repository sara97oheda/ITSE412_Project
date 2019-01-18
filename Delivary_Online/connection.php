<?php 

	$connect = mysqli_connect("127.0.0.1", "root", "", "deliveryrest");
		mysqli_set_charset($connect, "utf8");


		if (mysqli_connect_error()) {
			die("can not connect to database, Faild: ".mysqli_connect_error());
		}

?>