
<?php

$connect = mysqli_connect("127.0.0.1", "root", "", "deliveryrest");
mysqli_set_charset($connect, "utf8");


if (mysqli_connect_error()) {
    die("can not connect to database, Faild: ".mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="en">
<?php ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>الملف الشخصي</title>
    <!-- Bootstrap Core CSS -->
    <link href="dist/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
   
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
                            echo '<div>no user name</div>';
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
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation" style="font-family:Hacen Algeria; background:white;">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="index.php" class="waves-effect">
                            <img src="image/icons8_Home_20px.png" style="padding-left: 15px;"/>الرئسية </a>
                    </li>
                    <li>
                        <a href="profile.php" class="waves-effect"><img src="image/icons8_Male_User_20px.png" style="padding-left: 15px;"/>الملف الشخصي</a>
                    </li>
                    <li>
                        <a href="Users_page.php" class="waves-effect"><img src="image/icons8_User_Groups_20px.png" style="padding-left: 15px;"/>المستخدمين</a>
                    </li>
                    <li>
                        <a href="menu_page.php" class="waves-effect"><img src="image/icons8_Restaurant_Menu_20px.png" style="padding-left: 15px;"/>قائمة الطعام</a>
                    </li>
                    <li>
                        <a href="order_page.php" class="waves-effect"><img src="image/icons8_Shopping_Cart_20px.png" style="padding-left: 15px;"/>الطلبات</a>
                    </li>
                    <li>
                        <a href="../404.html" class="waves-effect"><img src="image/icons8_Error_20px.png" style="padding-left: 15px;"/>Error 404</a>
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
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row" style="padding-top: 20px; margin-top: 20px ">
                    <div class="col-md-4 col-xs-12" style="height: 600px">
                        <div class="white-box"  style="height: 600px">
                            <div class="user-bg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="image/icons8_Male_User_50px_2.png" class="thumb-lg img-circle" alt="img"></a>
                                        <h3 class="text-white">اسم المستخدم</h3>
                                        <h3 class="text-white"><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?></h3> </div>
                                </div>
                            </div>
                            <div class="user-btm-box">

                                <div class="col-md-8 col-sm-8 text-center " style="margin-left: 50px">
                                    <p class="text-blue"><i class="ti-twitter"></i></p>
                                    <h3>مدير المطعم</h3> </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12"  style="height: 600px">
                        <div class="white-box"  style="height: 600px">
                            <form class="form-horizontal form-material" action="profile.php" method="post">
                                <div class="form-group" style="text-align: center">
                                    <h1> الملف الشخصي</h1>
                                    </div>

                                <?php

                                $sql = "select * from `users` WHERE username='".$_SESSION['username'] ."'";
                                $result = mysqli_query($connect,$sql);
                                if(mysqli_num_rows($result)  == true) {
                                    while ($row = mysqli_fetch_array($result))
                                    $data = '
                                     <div class="form-group"style="margin-top: 40px">
                                            <label class="col-md-12">الرقم</label>
                                            <div class="col-md-12">
                                                <input type="text" name="id" value=' . $row['id'] . ' class="form-control form-control-line" required/> 
                                                </div>
                                        </div>
                                        <div class="form-group"style="margin-top: 40px">
                                            <label class="col-md-12">الاسم الكامل</label>
                                            <div class="col-md-12">
                                                <input type="text" name="username" value=' . $row['username'] . ' class="form-control form-control-line" required/> 
                                                </div>
                                        </div>
                                       <div class="form-group"style="margin-top: 40px">
                                            <label class="col-md-12">كلمة المرور</label>
                                            <div class="col-md-12">
                                                <input type="password" name="password" value= ' . $row['passWord'] . ' class="form-control form-control-line" required/> 
                                                </div>
                                        </div>
                                        <div class="form-group"style="margin-top: 40px">
                                            <label class="col-md-12">البريد الالكتروني</label>
                                            <div class="col-md-12">
                                                <input type="email" name="email" value= ' . $row['Email'] . ' class="form-control form-control-line" required/> 
                                                </div>
                                        </div>
                                        
                                        ';
                                    echo $data;

                                }
                                $id =  $row['id'];

?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="submit" name="save" class="btn btn-md btn-success" value="حفظ"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2019 &copy; حقوق النشر </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>

    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>

<?php
if(isset($_POST['save'])){
    $password = md5($_POST['password']);
    $sql = "Update `users` set username = '" . $_POST['username'] . "', passWord='" . $password."', Email='" . $_POST['email'] . "' WHERE id=" . $_POST['id'] . "";
    $result = mysqli_query($connect,$sql);
if(mysqli_num_rows($result)  == true) {
    echo '<div> تمت العملة بنجاح</div>';
}
}

?>
