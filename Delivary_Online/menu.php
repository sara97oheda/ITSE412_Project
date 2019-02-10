<?php
include('server.php');
include('singup.php');
include('connection.php');

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "deliveryrest";
//$db=mysqli_connect('localhost','root','','deliveryrest');
$DB_con = mysqli_connect("127.0.0.1", "root", "", "deliveryrest");
mysqli_set_charset($DB_con, "utf8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>قائمة الطعام</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--=======================================LoginDropdown===========================================-->
    <link rel="stylesheet" type="text/css" href="css/style_login.css">
    <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="js/login.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="admin/dist/jquery.dataTables.min.js"></script>
</head>

<body class="animsition">

<!--=======================================cart===========================================-->

<!-- Full Height Modal Right -->
<form method="POST" action="">
<!-- Full Height Modal Right -->
<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->

<div class="modal-dialog modal-full-height modal-right  bg4-pattren" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
              <label for="name" class="control-label">الاسم:</label>
              <input type="text" class="form-control" id="edit_name" name="edit_name" required/>
          </div>
      </div>
  </div>
  </div>
</div>
</form>

<!--=================================sing up modal=====================================-->

<div id="modalRegisterForm" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form style="direction: rtl;" action="singup.php" method="POST">
                    <div class="form-group">

                        <label for="orangeForm-name; direction: rtl" data-success="right" data-error="wrong">اسم المستخدم</label>
                        <input name="username" class="form-control" type="text" required />
                    </div>

                    <div class="form-group">

                        <label for="orangeForm-email" data-success="right" data-error="wrong">البريد الالكتروني</label>
                        <input name="email" class="form-control" type="email" required/>
                    </div>

                    <div class="form-group">

                        <label for="orangeForm-pass" data-success="right" data-error="wrong">كلمة المرور</label>
                        <input name="password" class="form-control"  type="password" required />
                    </div>


                    <div class="modal-footer">
                        <button name="register" class="btn btn-success btn-lg btn-block" type="submit">سجل الآن!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html">
							<img src="images/icons/Delivery Online.png" alt="IMG-LOGO" data-logofixed="images/icons/Delivery Online.svg" style="width: 70%;">
						</a>
					</div>

					<!-- Menu -->
                    <div class="wrap_menu p-l-45 p-l-0-xl"> <!--   فهمتها -->
                        <nav class="menu">
                            <ul class="main_menu">
                                <li>
                                    <a href="contact.php" style="font-family: Hacen Algeria;">اتصل بنا</a>

                                </li>

                                <li>
                                    <a href="menu.php" style="font-family: Hacen Algeria;">قائمة الطعام</a>
                                </li>



                                <li>
                                    <a href="index.php" style="font-family: Hacen Algeria;">الرئيسية</a>
                                </li>

                                <li>
                                    <?php if(isset($_SESSION['username'])){
                                        echo '                                                   
                                    <form method="get" action="server.php" style="">
                                      <input  aria-hidden="true" type="submit" style="color: red;" id="logout" value="تسجيل الخروج" name="logout" />
                                      
                                      </form>';

                                    }else{
                                        echo '
                                  <a class="a-login" href="#" id="loginButton">
                                  <span class="span-login">تسجيل الدخول</span>
                                  <em></em></a>                          
                                 <div style="clear:both"></div>';
                                    }
                                    ?>

                                    <div id="loginContainer">
                                        <div style="clear:both"></div>
                                        <div id="loginBox">
                                            <form id="loginForm" method="post" action="server.php">
                                                <fieldset id="body">
                                                    <fieldset>
                                                        <label class="label-log" for="username" >اسم المستخدم</label>
                                                        <input class="input-login" type="username" name="username" id="username" required />
                                                    </fieldset>
                                                    <fieldset>
                                                        <label class="label-log" for="password">كلمة المرور</label>
                                                        <input class="input-login" type="password" name="password" id="password" required/>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input class="input-login" type="submit" id="login" value="تسجيل الدخول" name="login" />
                                                    </fieldset>
                                                    <br />
                                                    <p>
                                                        <a href="" class="btn btn-link btn-xs" data-toggle="modal" data-target="#modalRegisterForm">لإنشاء حساب جديد</a></p>

                                            </form>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
            <?php
            if(isset($_SESSION['username'])){
                echo '<div style="border: 2px red; border-image: none; width: 100px; height: 30px; color: blue; margin-top: -80px; float: right;">
                      <label style="text-align:center;  border: darkred 2px; "> ';
                echo $_SESSION['username'];
                echo '</label>
                    <img src="images/icons8_Male_User_50px_4.png" alt="user-img" width="28" class="img-circle">
                          </div>          
                                    ';
            }

            ?>
        </div>
	</header>





	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/filter.jpg);"
	>
		<h2 class=" title t-center white" style=" font-family: '29LT Bukra Bold'; font-size:60px; color:white;">
			قائمة الطعام
		</h2>
	</section>

<section class="section-lunch bgwhite"  id="drink" style="background-color: white;">
        <div style="background-color: white;">
            <h4 style="float: right">سلة الطلبات</h4>
            <form method="POST" action="menu.php" style="width: 100%; height: auto; padding-bottom: 30px; direction: rtl;">
                <div class="modal-dialog" role="document">
                    <table id="user_data" style="width: 100%" class="table table-condensed table-hover table-striped">
                       <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>الطلب</th>
                            <th>سعر القطعة</th>
                            <th>العدد</th>
                            <th>ملاحظات</th>
                        </tr>
                       </thead>
                        <?php
                        $oneClick = 1;
                        if(isset($_POST['order'])) {
                            $i = 1;
                            $nameCook = mysqli_real_escape_string($DB_con, $_POST['namecook']);
                            $price = mysqli_real_escape_string($DB_con, $_POST['price']);

                        }
                        ?>
                    </table>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-success btn-lg btn-block" name="register" type="submit">تأكيد الطلب</button>
                    </div>

        </div>

    </form>
</section>
	<!-- Main menu -->
<section class="section-lunch bgwhite"  id="drink" style="background-color: white;">
    <div class="header-dinner parallax0 parallax100" style="background-image:  url(images/bg-cover-video-02.jpg);">
        <div class="bg1-overlay t-center p-t-170 p-b-165">
            <h2 class="tit4 t-center">
                مشروبات
            </h2>
        </div>
    </div>
    <!-- drink -->
    <div class="container" style="direction: rtl; background-color: white;" >
    <?php
    echo '<div class="row p-t-108 p-b-70" style="margin-right: 160px;"> ';
    $count = "SELECT COUNT(id) from menu";
    $res = mysqli_query($connect,$count);
    if(mysqli_num_rows($res) > 0){
        while ($row = mysqli_fetch_array($res)) {
            $num =  $row['COUNT(id)'];
        }
    }


    $sql = "select * from menu where `typeMeal` = 'مشروب'";
    $result = mysqli_query($connect,$sql);
    if(mysqli_num_rows($result) > 0){
        $number = 1;
        $resltt =1;
        while ($row = mysqli_fetch_array($result)) {
            if($number <= ($num/2) ){
                if($number == 1){
                    $data1 = ' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                    $query = " select id from menu where `typeMeal` = 'مشروب'";
                        echo("<script>console.log('PHP: ".$resltt."');</script>");
                }
                if($number <= 4){

                    $data1 .= '
                       <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU" style="width: 250px; height: 170px;"></a>
                         </div>
                    
                         <div class="text-blo3 flex-col-l-m div-text">
                            <a  href="#" class="txt21 m-b-3 item-title"  style="margin-right: 8px;" name="nameCook" id="nameCook">
                               ' . $row['nameCook'] . '
                            </a>
                            <span class="txt22 m-t-20 item-price" name="order">
                              ' . $row['price'] . ' دل
                            </span> 
                         <button class=" btn-sm btn-success edit" style="margin-right: 8px;" id="add"
                              name="order" value=' . $row['id'] . '>order</button>
                              
                         </div>
                        </div>
                       ';
                }
                if($number == 5){
                    $data1 .= ' </div>';
                }
                if($number == 5){
                    $data2 =' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                }
                if($number >= 5){
                  $resltt = $row['id'] ;
                    $data2 .= '
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU" style="width: 250px; height: 170px;"></a>
                         </div>
            
                        <form method="post" action="menu.php">
                         <div class="text-blo3 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3"  style="margin-right: 8px;" name="nameCook" id="nameCook">
                               ' . $row['nameCook'] . '
                            </a>
                            <input style="display: none;" type="text" value=' . $row['nameCook'] . ' name="namecook"/>
                            <span class="txt22 m-t-20" name="order">
                              ' . $row['price'] . ' دل
                            </span>
                            <input style="display: none;" type="text" value=' . $row['price'] . ' name="price"/>
                            </form>
                            <input class=" btn-sm btn-success edit" style="margin-right: 8px;" id= "add"
                              name="add" value=' . $row['id'] . ' type="submit"/>
                              
                        </div>';
                }

                if($number == 9){
                    $data2 .=' </div>';
                }

            }
            $number = $number +1 ;

        }
        //echo $number - 1;
        // $data .= '</div>' ;
    }

    echo $data1 . $data2;
    echo '</div>' ;
    ?>


    </div>
    </section>

<!-- breakfast -->
<section class="section-lunch bgwhite" id="breakfast" style="direction: rtl;">
    <div class="header-lunch parallax0 parallax100" style="background-image: url(images/bg-cover-video-02.jpg);">
        <div class="bg1-overlay t-center p-t-170 p-b-165">
            <h2 class="tit4 t-center">
                إفطار الصباحي
            </h2>
        </div>
    </div>


    <div class="container">
        <?php
        echo '<div class="row p-t-108 p-b-70"> ';
        $count = "SELECT COUNT(id) from menu";
        $res = mysqli_query($connect,$count);
        if(mysqli_num_rows($res) > 0){
            while ($row = mysqli_fetch_array($res)) {
                $num =  $row['COUNT(id)'];
            }
        }


        $sql = "select * from menu where `typeMeal` = 'افطار'";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            $number = 1;

            while ($row = mysqli_fetch_array($result)) {
                if($number <= ($num/2) ){
                    if($number == 1){
                        $data1 = ' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                    }
                    if($number <= 4){
                        $data1 .= '
                       <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU" style="width: 250px; height: 170px;"></a>
                         </div>
            
                         <div class="text-blo3 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                               ' . $row['nameCook'] . '
                            </a>
                           
                            <span class="txt22 m-t-20">
                              ' . $row['price'] . ' دل
                            </span>
                         </div>
                        </div>';
                    }
                    if($number == 5){
                        $data1 .= ' </div>';
                    }
                    if($number == 5){
                        $data2 =' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                    }
                    if($number >= 5){
                        $data2 .= '
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU" style="width: 250px; height: 170px;"></a>
                         </div>
            
                         <div class="text-blo3 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                               ' . $row['nameCook'] . '
                            </a>
                           
                            <span class="txt22 m-t-20">
                              ' . $row['price'] . ' دل
                            </span>
                         </div>
                        </div>';
                    }

                    if($number == 9){
                        $data2 .=' </div>';
                    }

                }
                $number = $number +1 ;
            }
            //echo $number - 1;
            // $data .= '</div>' ;
        }

        echo $data1 . $data2;
        echo '</div>' ;
        ?>
    </div>

</section>


<!-- Lunch -->
	<section class="section-lunch bgwhite" id="lunch" style="direction: rtl;">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/bg-cover-video-02.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					وجبات
				</h2>
			</div>
		</div>


    <div class="container">
    <?php
      echo '<div class="row p-t-108 p-b-70"> ';
        $count = "SELECT COUNT(id) from menu";
        $res = mysqli_query($connect,$count);
        if(mysqli_num_rows($res) > 0){
            while ($row = mysqli_fetch_array($res)) {
                $num =  $row['COUNT(id)'];
            }
        }


        $sql = "select * from menu where `typeMeal` = 'وجبات'";
        $result = mysqli_query($connect,$sql);
    if(mysqli_num_rows($result) > 0){
        $number = 1;

        while ($row = mysqli_fetch_array($result)) {
            if($number <= ($num/2) ){
                if($number == 1){
                    $data1 = ' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                }
                if($number <= 4){
                    $data1 .= '
                       <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU" style="width: 250px; height: 170px;"></a>
                         </div>
            
                         <div class="text-blo3 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                               ' . $row['nameCook'] . '
                            </a>
                          
                            <span class="txt22 m-t-20">
                              ' . $row['price'] . ' دل
                            </span>
                         </div>
                        </div>';
                }
                if($number == 5){
                    $data1 .= ' </div>';
                }
                if($number == 5){
                    $data2 =' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                }
                if($number >= 5){
                    $data2 .= '
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3  bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU" style="width: 250px; height: 170px;"></a>
                         </div>
            
                         <div class="text-blo3 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                               ' . $row['nameCook'] . '
                            </a>
                            
                            <span class="txt22 m-t-20">
                              ' . $row['price'] . ' دل
                            </span>
                         </div>
                        </div>';
                }

                if($number == 9){
                    $data2 .=' </div>';
                }

            }
            $number = $number +1 ;
        }
        //echo $number - 1;
        // $data .= '</div>' ;
    }

    echo $data1 . $data2;
    echo '</div>' ;
    ?>


    </div>

	</section>


	<!-- Dinner -->
	<section class="section-dinner bgwhite"  id="dinner" style="direction: rtl;">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/bg-cover-video-02.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					سندوتشات
				</h2>
			</div>
		</div>

        <div class="container">
            <?php
            echo '<div class="row p-t-108 p-b-70"> ';
            $count = "SELECT COUNT(id) from menu";
            $res = mysqli_query($connect,$count);
            if(mysqli_num_rows($res) > 0){
                while ($row = mysqli_fetch_array($res)) {
                    $num =  $row['COUNT(id)'];
                }
            }


            $sql = "select * from menu where `typeMeal` = 'سندوتشات'";
            $result = mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) > 0){
                $number = 1;

                while ($row = mysqli_fetch_array($result)) {
                    if($number <= ($num/2) ){
                        if($number == 1){
                            $data1 = ' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                        }
                        if($number <= 4){
                            $data1 .= '
                       <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU" style="width: 250px; height: 170px;"></a>
                         </div>
            
                         <div class="text-blo3 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                               ' . $row['nameCook'] . '
                            </a>
                           
                            <span class="txt22 m-t-20">
                              ' . $row['price'] . ' دل
                            </span>
                         </div>
                        </div>';
                        }
                        if($number == 5){
                            $data1 .= ' </div>';
                        }
                        if($number == 5){
                            $data2 =' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                        }
                        if($number >= 5){
                            $data2 .= '
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU" style="width: 250px; height: 170px;"></a>
                         </div>
            
                         <div class="text-blo3 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3" >
                               ' . $row['nameCook'] . '
                            </a>
                          
                            <span class="txt22 m-t-20">
                              ' . $row['price'] . ' دل
                            </span>
                         </div>
                        </div>';
                        }

                        if($number == 9){
                            $data2 .=' </div>';
                        }

                    }
                    $number = $number +1 ;
                }
                //echo $number - 1;
                // $data .= '</div>' ;
            }

            echo $data1 . $data2;
            echo '</div>' ;
            ?>


        </div>

    </section>

<section class="section-dinner bgwhite"  id="sweet" style="direction: rtl;">
    <div class="header-dinner parallax0 parallax100" style="background-image: url(images/sweet2.jpg);">
        <div class="bg1-overlay t-center p-t-170 p-b-165">
            <h2 class="tit4 t-center">
                حلويات
            </h2>
        </div>
    </div>

    <div class="container">
        <?php
        echo '<div class="row p-t-108 p-b-70"> ';
        $count = "SELECT COUNT(id) from menu";
        $res = mysqli_query($connect,$count);
        if(mysqli_num_rows($res) > 0){
            while ($row = mysqli_fetch_array($res)) {
                $num =  $row['COUNT(id)'];
            }
        }


        $sql = "select * from menu where `typeMeal` = 'حلو'";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            $number = 1;

            while ($row = mysqli_fetch_array($result)) {
                if($number <= ($num/2) ){
                    if($number == 1){
                        $data1 = ' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                    }
                    if($number <= 4){
                        $data1 .= '
                       <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28" style="width: 250px; height: 170px;">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU"></a>
                         </div>
            
                         <div class="text-blo3 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                               ' . $row['nameCook'] . '
                            </a>
                           
                            <span class="txt22 m-t-20">
                              ' . $row['price'] . ' دل
                            </span>
                         </div>
                        </div>';
                    }
                    if($number == 5){
                        $data1 .= ' </div>';
                    }
                    if($number == 5){
                        $data2 =' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                    }
                    if($number >= 5){
                        $data2 .= '
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU" style="width: 250px; height: 170px;"></a>
                         </div>
            
                         <div class="text-blo3 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                               ' . $row['nameCook'] . '
                            </a>
                          
                            <span class="txt22 m-t-20">
                              ' . $row['price'] . ' دل
                            </span>
                         </div>
                        </div>';
                    }

                    if($number == 9){
                        $data2 .=' </div>';
                    }

                }
                $number = $number +1 ;
            }
            //echo $number - 1;
            // $data .= '</div>' ;
        }

        echo $data1 . $data2;
        echo '</div>' ;
        ?>


    </div>

</section>


<!-- Footer -->
	<footer class="bg1">
		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2018 All rights reserved  | To the tirfic team
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
        <script src="admin/dist/jquery.dataTables.min.js"></script>



</body>
</html>
<script type="text/javascript" language="javascript" >

    $(document).ready(function(){
        var dataTable = $("#user_data").DataTable({});
        var btn_order = document.getElementById('add');
        //div-text
        var shopItem = btn_order.parentElement;
        var title = shopItem.getElementsByClassName('item-title')[0].innerText;
        var price = shopItem.getElementsByClassName('item-price')[0].innerText;
        addItemToCart(title,price)
        function addItemToCart(title, price) { // مروة عبدالرحيم الشاملي قامت بعمل هذا الجزء
            var cartRow = document.createElement('div')
            cartRow.classList.add('cart-row')
            var cartItems = document.getElementsByClassName('cart-items')[0]
            var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
            for (var i = 0; i < cartItemNames.length; i++) {
                if (cartItemNames[i].innerText == title) {
                    alert('This item is already added to the cart')
                    return
                }
            }
            var cartRowContents = `
        <div class="cart-item cart-column">

            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
            cartRow.innerHTML = cartRowContents
            cartItems.append(cartRow)
            cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
            cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
        }
    
    });
</script>