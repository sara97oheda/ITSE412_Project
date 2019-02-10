<?php
//insert.php
if(isset($_POST["subject"]))
{
 include('connection.php');
 $orde = mysqli_real_escape_string($connect, $_POST["nameCook"]);
 $comment = mysqli_real_escape_string($connect, $_POST["price"]);
 $query = "
 INSERT INTO order
(order_name, price, order_state)
 VALUES ('$subject', '$comment'. 1);
 ";
 mysqli_query($connect, $query);
}
?>