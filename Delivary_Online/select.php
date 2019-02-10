<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08-Feb-19
 * Time: 12:27 PM
 */

            $connect = mysqli_connect("localhost", "root", "", "deliveryrest");
            if(isset($_POST[$row['id']]))
            {
                $query = "SELECT nameCook and price FROM menu WHERE id = '".$_POST["id"]."'";
                if(mysqli_query($connect, $query))
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['nameCook'];
                    echo $row['price'];
                }
                }
            }
                   ?>
