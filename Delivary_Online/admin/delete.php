<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 26-Jan-19
 * Time: 5:06 PM
 */
$connect = mysqli_connect("localhost", "root", "", "deliveryrest");
mysqli_set_charset($connect, "utf8");
if(isset($_POST["id"]))
{
    $query = "DELETE FROM users WHERE id = '".$_POST["id"]."'";
    if(mysqli_query($connect, $query))
    {
        echo 'Data Deleted';
    }
}
?>
