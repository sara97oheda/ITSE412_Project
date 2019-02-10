<?php
//fetch.php;
if(isset($_POST["post"]))
{
  include('connection.php');

 if($_POST["post"] != '')
 {
  $update_query = "UPDATE order SET order_state=1 WHERE order_state=0";
  mysqli_query($connect, $update_query);
 }
 $query = "SELECT * FROM menu ORDER BY id DESC LIMIT 5";
 $result = mysqli_query($connect, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <li>
    <a href="#">
     <strong>'.$row["order_name"].'</strong><br />
     <small><em>'.$row["price"].'</em></small>
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM order WHERE order_state=0";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>
