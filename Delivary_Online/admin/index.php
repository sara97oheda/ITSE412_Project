<?php

$connect = mysqli_connect("127.0.0.1", "root", "", "deliveryrest");
mysqli_set_charset($connect, "utf8");


if (mysqli_connect_error()) {
    die("can not connect to database, Faild: ".mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>الصفحة االخاصة بالمدير</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->

    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <script type="text/javascript">
        function changeColor(){
            li = document.getElementsByName(li);
            li.style.color = "gray";
        }
    </script>


</head>

<body class="fix-header">
  
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header" style="height: 70px">
              
                <ul class="nav navbar-top-links navbar-right pull-right" style="margin-top: 15px; width: 250px">

                    <li style="float: right">
                         <img src="image/icons8_Male_User_50px_2.png" alt="user-img" width="36" class="img-circle">
                    </li>
                            <b class="hidden-xs">
                                <?php
                                session_start();
                                $_SESSION['username'] ;
                                        if(isset($_SESSION['username'])){
                                                    echo '<li><label style="text-align:center; color:white; border: darkred 2px; margin-top: 8px; margin-right: 30px;"> ';
                                                    echo $_SESSION['username'];
                                                    echo '</label></li>
                                                    ';
                                }else{
                                    echo '<div>no nser name</div>';
                                }?></b>
                    </li>
                </ul>


             <div id="loginContainer">
                <ul class="nav navbar-top-links" style="float: left; margin-left: 20px;">
                    <li>
                        <form method="get" action="../server.php" style="width: 150px; margin-top: 15px">
                          <input  aria-hidden="true" type="submit" id="logout" value="تسجيل الخروج" name="logout" style="color: #cf2227; background-color: white">
                            <img src="image/icons8_Logout_Rounded_Left_50px.png" alt="user-img" width="30" class="img-circle" style="margin-right: 6px">

                        </form>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar col-sm-12 col-md-6 col-lg-4" role="navigation" style="font-family:Hacen Algeria; background:white;">
            <div class="sidebar-nav slimscrollsidebar">

                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="#" class="waves-effect">
                        <img src="image/icons8_Home_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>الرئسية </a>
                    </li>
                    <li>
                        <a href="profile.php" class="waves-effect"><img src="image/icons8_Male_User_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>الملف الشخصي</a>
                    </li>
                    <li>
                        <a href="Users_page.php" class="waves-effect"><img src="image/icons8_User_Groups_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>المستخدمين</a>
                    </li>
                    <li>
                        <a href="menu_page.php" class="waves-effect"><img src="image/icons8_Restaurant_Menu_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>قائمة الطعام</a>
                    </li>
                    <li>
                        <a href="order_page.php" class="waves-effect"><img src="image/icons8_Shopping_Cart_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>الطلبات</a>
                    </li>
                    <li>
                        <a href="Masseges_page.php" class="waves-effect"><img src="image/icons8_Envelope_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>رسائل المستخدمين</a>
                    </li>
                    <li>
                        <a href="Booking_page.php" class="waves-effect"><img src="image/icons8_Restaurant_Table_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>الحجز</a>
                    </li>
                    <li>
                        <a href="../404.html" class="waves-effect"><img src="image/icons8_Error_20px.png" style="padding-left: 15px;" onclick="changeColor()"/>Error 404</a>
                    </li>

                </ul>

            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper" style="padding-top: 30px;">
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">عدد مستخدمين الموقع</h3>
                            <ul class="list-inline two-part">
                                <?php
                            echo '<div class="row p-t-108 p-b-70"> ';
                            $count = "SELECT COUNT(id) from users where typeWork = 1";
                            $res = mysqli_query($connect,$count);
                            if(mysqli_num_rows($res) > 0){
                                while ($row = mysqli_fetch_array($res)) {
                                    $num =  $row['COUNT(id)'];

                                }
                            }?>
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right" style="padding-right: 150px;">
                                    <img src="image/chart.JPG" width="60px" height="30px" style="margin-bottom: 25px; padding-left: 10px">
                                    <i class="ti-arrow-up text-success"></i>
                                    <span class="counter text-success" style="padding-left: 20px ; font-size: 30px;">
                                              <?php echo $num?> </span>
                                </li>

                            </ul>
                        </div>
                    </div>
                   
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">عدد الرسائل الصادرة </h3>
                            <ul class="list-inline two-part">
                                <?php
                                echo '<div class="row p-t-108 p-b-70"> ';
                                $count = "SELECT COUNT(id) from `informatic` WHERE state = 'جديد'";
                                $res = mysqli_query($connect,$count);
                                if(mysqli_num_rows($res) > 0){
                                    while ($row = mysqli_fetch_array($res)) {
                                        $num =  $row['COUNT(id)'];

                                    }
                                }?>
                                <li class="text-right" style="padding-right: 150px;">
                                    <img src="image/chart.JPG" width="60px" height="30px" style="margin-bottom: 25px; padding-left: 10px">
                                    <i class="ti-arrow-up text-success"></i>
                                    <span class="counter text-success" style="padding-left: 20px ; font-size: 30px;">
                                              <?php echo $num?> </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title"> العدد الطلبات</h3>
                            <ul class="list-inline two-part">
                                <?php
                                echo '<div class="row p-t-108 p-b-70"> ';
                                $count = "SELECT COUNT(id) from orders where state = 1";
                                $res = mysqli_query($connect,$count);
                                if(mysqli_num_rows($res) > 0){
                                    while ($row = mysqli_fetch_array($res)) {
                                        $num =  $row['COUNT(id)'];

                                    }
                                }?>
                                <li class="text-right" style="padding-right: 150px;">
                                    <img src="image/chart.JPG" width="60px" height="30px" style="margin-bottom: 25px; padding-left: 10px">
                                    <i class="ti-arrow-up text-success"></i>
                                    <span class="counter text-success" style="padding-left: 20px ; font-size: 30px;">
                                              <?php echo $num?> </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title"> العدد الحجوزات</h3>
                            <ul class="list-inline two-part">
                                <?php
                                echo '<div class="row p-t-108 p-b-70"> ';
                                $count = "SELECT COUNT(id) from reseverse where state = 1";
                                $res = mysqli_query($connect,$count);
                                if(mysqli_num_rows($res) > 0){
                                    while ($row = mysqli_fetch_array($res)) {
                                        $num =  $row['COUNT(id)'];

                                    }
                                }?>
                                <li class="text-right" style="padding-right: 150px;">
                                    <img src="image/chart.JPG" width="60px" height="30px" style="margin-bottom: 25px; padding-left: 10px">
                                    <i class="ti-arrow-up text-success"></i>
                                    <span class="counter text-success" style="padding-left: 20px ; font-size: 30px;">
                                              <?php echo $num?> </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--/.row -->


                    <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>

</body>
</html>
