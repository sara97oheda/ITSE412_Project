
<?php 

    include('connection.php');

	if (isset($_POST['submit'])) {
	
		$query = "INSERT INTO `reseverse`( `userName`, `dateOf`, `time_res`, `phoneNumber`, `sizeOfTable`, `email`)
		 VALUES ('".$_POST['name']."','".$_POST['date']."','".$_POST['timeof']."','".$_POST['phone']."','".$_POST['pepole']
		 ."','".$_POST['email']."')";

		$result = mysqli_query($connect, $query);
	
	header('location: index.php');
}
	?>

