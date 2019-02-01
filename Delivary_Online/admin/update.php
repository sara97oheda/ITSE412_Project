<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 26-Jan-19
 * Time: 5:05 PM
 */
$connect = mysqli_connect("localhost", "root", "", "deliveryrest");
mysqli_set_charset($connect, "utf8");
if(isset($_POST["id"]))
{
    $value = mysqli_real_escape_string($connect, $_POST["value"]);
    $query = "UPDATE users SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
    if(mysqli_query($connect, $query))
    {
        echo 'Data Updated';
    }
}
?>
