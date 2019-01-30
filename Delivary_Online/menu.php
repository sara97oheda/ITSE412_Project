<?php
    include('server.php');
    include('singup.php');
$connect = mysqli_connect("127.0.0.1", "root", "", "deliveryrest");
mysqli_set_charset($connect, "utf8");

?>
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
	<title>Home</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--=======================================LoginDropdown===========================================-->
    <link rel="stylesheet" type="text/css" href="css/style_login.css">
    <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="js/login.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body class="animsition">

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document" method="POST" action="singup.php">
    <div class="modal-content bg2-pattern"  method="post" action="singup.php">
      <div class="modal-header text-center bg4-pattren">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class=""></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
          <input type="text" id="orangeForm-name" class="form-control validate" name="username">
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label> 
          <input type="email" id="orangeForm-email" class="form-control validate" name="email">
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
           <input type="password" id="orangeForm-pass" class="form-control validate" name="password">
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success btn-lg btn-block" name="register" type="submit">Sign up</button>
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
<!--  لمعرفة هل تم التسجيل بنجاح ام لا                                  -->
                                    <?php if(isset($_SESSION['success'])):?>
                                        <?php
                                        echo $_SESSION['success'];
                                        unset($_SESSION['success']);?>
                                     <?php endif ?>

                                    <?php if(isset($_SESSION['username'])): ?>
<!--                                    لوضع اسم المستخدم في -->
                                        <label style="text-align:center; color:white; "><?php echo $_SESSION['username'];?></label>
                                        <a style="font-family:Hacen Algeria;">تسجيل الخروج</a>
                                    <?php endif?>

                                    <div id="loginContainer">
                                        <a class="a-login" href="#" id="loginButton"><span class="span-login">تسجيل الدخول</span><em></em></a>
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
                                                    <p>for register
                                                    <a href="" class="btn btn-link btn-xs" data-toggle="modal" data-target="#modalRegisterForm">sing up</a></p>
                                                  
                                            </form>
                                        </div>
                                    </div>
								</li>

							</ul>
						</nav>
					</div>

				</div>
			</div>
		</div>
	</header>





	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/filter.jpg);" 
	>
		<h2 class=" title t-center white" style=" font-family: '29LT Bukra Bold'; font-size:60px; color:white;">
			قائمة الطعام
		</h2>
	</section>


	<!-- Main menu -->
<section class="section-lunch bgwhite"  id="drink" style="background-color: white;">

    <!-- drink -->
    <div class="container" style="direction: rtl; background-color: white;">
    <?php
    echo '<div class="row p-t-108 p-b-70"> ';
    $count = "SELECT COUNT(id) from menu";
    $res = mysqli_query($connect,$count);
    if(mysqli_num_rows($res) > 0){
        while ($row = mysqli_fetch_array($res)) {
            $num =  $row['COUNT(id)'];
        }
    }


    $sql = "select * from menu where `typeMeal` = 'غذاء'";
    $result = mysqli_query($connect,$sql);
    if(mysqli_num_rows($result) > 0){
        $number = 1;

        while ($row = mysqli_fetch_array($result)) {
            if($number <= ($num/2) ){
                if($number == 1){
                    $data1 = ' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                }
                $data1 .= '
                       <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU"></a>
                         </div>
            
                         <div class="text-blo3 size21 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                               ' . $row['nameCook'] . '
                            </a>
                            <span class="txt23">
                             Aenean pharetra tortor dui in pellentesque
                            </span>
                            <span class="txt22 m-t-20">
                              ' . $row['price'] . ' دل
                            </span>
                         </div>
                        </div>';
                if($number == 3){
                    $data1 .= ' </div>';

                }}else{
                if($number == 4){
                    $data2 =' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                }
                $data2 .= '
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU"></a>
                            </div>
						    <div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								' . $row['nameCook'] . '
							</a>
							<span class="txt23">
								Aenean pharetra tortor dui in pellentesque
							</span>
							<span class="txt22 m-t-20">
								' . $row['price'] . ' دل
							</span>
						</div>
					</div>
					';
                if($number == 6){
                    $data2 .=' </div>';
                }

            }
            $number++;
        }
        //echo $number - 1;
        // $data .= '</div>' ;
    }

    echo $data1;
    echo $data2;
    echo '</div>' ;
    ?>

</div>
    </section>


<!-- breakfast -->
<section class="section-lunch bgwhite" id="breakfast" style="direction: rtl;">
    <div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
        <div class="bg1-overlay t-center p-t-170 p-b-165">
            <h2 class="tit4 t-center">
                Breakfast
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


        $sql = "select * from menu where `typeMeal` = 'غذاء'";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            $number = 1;

            while ($row = mysqli_fetch_array($result)) {
                if($number <= ($num/2) ){
                    if($number == 1){
                        $data1 = ' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                    }
                    $data1 .= '
                       <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU"></a>
                         </div>
            
                         <div class="text-blo3 size21 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                               ' . $row['nameCook'] . '
                            </a>
                            <span class="txt23">
                             Aenean pharetra tortor dui in pellentesque
                            </span>
                            <span class="txt22 m-t-20">
                              ' . $row['price'] . ' دل
                            </span>
                         </div>
                        </div>';
                    if($number == 3){
                        $data1 .= ' </div>';

                    }}else{
                    if($number == 4){
                        $data2 =' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                    }
                    $data2 .= '
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU"></a>
                            </div>
						    <div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								' . $row['nameCook'] . '
							</a>
							<span class="txt23">
								Aenean pharetra tortor dui in pellentesque
							</span>
							<span class="txt22 m-t-20">
								' . $row['price'] . ' دل
							</span>
						</div>
					</div>
					';
                    if($number == 6){
                        $data2 .=' </div>';
                    }

                }
                $number++;
            }
            //echo $number - 1;
            // $data .= '</div>' ;
        }

        echo $data1;
        echo $data2;
        echo '</div>' ;
        ?>

    </div>

</section>


<!-- Lunch -->
	<section class="section-lunch bgwhite" id="lunch" style="direction: rtl;">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Lunch
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


        $sql = "select * from menu where `typeMeal` = 'غذاء'";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            $number = 1;

            while ($row = mysqli_fetch_array($result)) {
                if($number <= ($num/2) ){
                    if($number == 1){
                        $data1 = ' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                    }
                 $data1 .= '
                       <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU"></a>
                         </div>
            
                         <div class="text-blo3 size21 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                               ' . $row['nameCook'] . '
                            </a>
                            <span class="txt23">
                             Aenean pharetra tortor dui in pellentesque
                            </span>
                            <span class="txt22 m-t-20">
                              ' . $row['price'] . ' دل
                            </span>
                         </div>
                        </div>';
                    if($number == 3){
                        $data1 .= ' </div>';

                    }}else{
                    if($number == 4){
                        $data2 =' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                    }
                     $data2 .= '
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU"></a>
                            </div>
						    <div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								' . $row['nameCook'] . '
							</a>
							<span class="txt23">
								Aenean pharetra tortor dui in pellentesque
							</span>
							<span class="txt22 m-t-20">
								' . $row['price'] . ' دل
							</span>
						</div>
					</div>
					';
                    if($number == 6){
                        $data2 .=' </div>';
                    }

        }
        $number++;
    }
    //echo $number - 1;
    // $data .= '</div>' ;
    }

    echo $data1;
    echo $data2;
    echo '</div>' ;
           ?>

    </div>

	</section>


	<!-- Dinner -->
	<section class="section-dinner bgwhite"  id="dinner" style="direction: rtl;">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/header-menu-02.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Dinner
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


            $sql = "select * from menu where `typeMeal` = 'غذاء'";
            $result = mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) > 0){
                $number = 1;

                while ($row = mysqli_fetch_array($result)) {
                    if($number <= ($num/2) ){
                        if($number == 1){
                            $data1 = ' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                        }
                        $data1 .= '
                       <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU"></a>
                         </div>
            
                         <div class="text-blo3 size21 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                               ' . $row['nameCook'] . '
                            </a>
                            <span class="txt23">
                             Aenean pharetra tortor dui in pellentesque
                            </span>
                            <span class="txt22 m-t-20">
                              ' . $row['price'] . ' دل
                            </span>
                         </div>
                        </div>';
                        if($number == 3){
                            $data1 .= ' </div>';

                        }}else{
                        if($number == 4){
                            $data2 =' <div class="col-md-8 col-lg-6 m-l-r-auto">';
                        }
                        $data2 .= '
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                         <a href="#"><img src=' . $row['image'] . ' alt="IMG-MENU"></a>
                            </div>
						    <div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								' . $row['nameCook'] . '
							</a>
							<span class="txt23">
								Aenean pharetra tortor dui in pellentesque
							</span>
							<span class="txt22 m-t-20">
								' . $row['price'] . ' دل
							</span>
						</div>
					</div>
					';
                        if($number == 6){
                            $data2 .=' </div>';
                        }

                    }
                    $number++;
                }
                //echo $number - 1;
                // $data .= '</div>' ;
            }

            echo $data1;
            echo $data2;
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

</body>
</html>
