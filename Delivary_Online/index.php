<?php
    include('server.php');
    include('singup.php');
    include('connection.php');
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

		<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/4.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown" style="font-family: '29LT Bukra Bold'">
							أهلا بكم
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Delivery Online
						</h2>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(images/1.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn" style="font-family: '29LT Bukra Bold';">
							خدماتنا متوفرة لكم
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn"  style="font-family: '29LT Bukra Bold'">
							Delivery Online
						</h2>

					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(images/3.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft" style="font-family: '29LT Bukra Bold'">
							مرحبًا بكم
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							Delivery Online
						</h2>

					</div>
				</div>

			</div>

			<div class="wrap-slick1-dots"></div>
		</div>
	</section>

	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
							Delivery Online
						</span>

						<h3 class="t-center m-b-35 m-t-5"  style="font-family: '29LT Bukra Bold'; font-size: 40px;">
							مرحبًا بكم
						</h3>



                        <br class="t-center m-l-30 size3 " style="font-family: '29LT Bukra Bold'">
                        يستطيع مستخدمو هذا الموقع التواصل مع المطعم "", وذلك عن طريق الحجز به
                    </br>
                            أو الطلب اونلاين من قائمة الطعالم المتوفرة لدينا  </br>
                        كما يستطيع المستخدم التواصل معنا وابداء رأيه عن طريق نموذج التواصل الخاص بينا
                        </p>

					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="images/rest.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Intro -->
	<section class="section-intro">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/filter.jpg);">
			<span class="t-center" style="font-family: '29LT Bukra Bold'; font-size: 50px; color: #d61c22;">
				اكتشفوا
			</span>

			<h3 class="t-center"style="font-family: '29LT Bukra Bold'; font-size: medium;">
                <a href="menu.php"><button type="button" class="btn2 flex txt5 size9"style="font-family: '29LT Bukra Bold'; font-size: medium;">menu</button></a>
			</h3>
		</div>


	</section>

<!-- Chef -->
	<section class="section-chef bg1-pattern p-t-115 p-b-95" style="height: 500px;">
		<div class="container t-center">
			<span class="t-center" style="font-family: '29LT Bukra Bold'; font-size: 40px; color:#d61c22">
				قابلوا
			</span>

			<h3 class="t-center" style="font-family: '29LT Bukra Bold'; font-size: x-large; margin: 30px;">
				طهاتنا
			</h3>

			<div class="row">
				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="images/avatar-02.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center p-t-90 ">
							<p class="t-center" style="font-family: '29LT Bukra Bold'; font-size: x-large;">
								أحمد العالم
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="images/avatar-03.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center  p-t-90 ">
							<p style="font-family: '29LT Bukra Bold'; font-size: x-large;">
								أميرةبن  عامر
						    </p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="images/avatar-05.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center p-t-90">
							<p style="font-family: '29LT Bukra Bold'; font-size: x-large;">
								مروان الخوري
							</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Our menu -->
	<section class="section-ourmenu bgwhite p-t-115 p-b-120" >
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				<span class="t-center" style="font-family: '29LT Bukra Bold'; font-size: x-large">
					تعرف على
				</span>

				<h3 class="t-center m-t-2" style="font-family: '29LT Bukra Bold'; font-size: 30px; color: red">
					قائمتنا
				</h3>
			</div>

			<div class="row" style="margin-left: 40px;">
				<div class="col-md-8">
					<div class="row">
						<div class="col-sm-4">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/beef-bread-breakfast-1633559.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="menu.php #dinner" class="btn2 flex-c-m ab-c-m size4" style="font-family: '29LT Bukra Bold'; font-size: 14px; color: red">
									السندوتششات

								</a>
							</div>
						</div>

						<div class="col-sm-4">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/biriyani-chicken-cooked-1624487.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="menu.php #lunch"  class="btn2 flex-c-m ab-c-m size4" style="font-family: '29LT Bukra Bold'; font-size: 14px; color: red">
									الوجبات
								</a>
							</div>
						</div>

						<div class="col-sm-4">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/appetizing-bread-breakfast-357573.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="menu.php #breakfast"  class="btn2 flex-c-m ab-c-m size4" style="font-family: '29LT Bukra Bold'; font-size: 14px; color: red">
									إفطار
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
					
						<div class="col-sm-9">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/beverage-blur-breakfast-851555.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="menu.php #drink"  class="btn2 flex-c-m ab-c-m size4" style="font-family: '29LT Bukra Bold'; font-size: 14px; color: red">
									مشروبات
								</a>
							</div>
						</div>



						<div class="col-sm-9" style="margin-top: -20px;">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-16.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="menu.php #sweet"  class="btn2 flex-c-m ab-c-m size4" style="font-family: '29LT Bukra Bold'; font-size: 14px; color: red">
									حلويات
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

				</div>
	</section>


	<!-- Booking -->
	<section class="section-booking bg2-pattern p-t-100 p-b-110" style="font-family: 'AR JULIAN'">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 p-b-30">
					<div class="t-center">

						<h3 class=" t-center m-b-35 m-t-2" style="font-family: '29LT Bukra Bold'; font-size: 40px;">
							نموذج الحجز
						</h3>
					</div>

					<form class="wrap-form-booking" action="reseverse.php"  method="POST">
						<div class="row">
							<div class="col-md-6">
								<!-- Date -->
								<span class="txt9">
									التاريخ
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="date">
									<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
								</div>

								<!-- Time -->
								<span class="txt9">
									الوقت
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="timeof" placeholder="التوقيت">
								</div>

								<!-- People -->
								<span class="txt9">
									عدد الأشخاص
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="pepole" placeholder="حجم الطاولة">
								</div>
							</div>

							<div class="col-md-6">
								<!-- Name -->
								<span class="txt9">
									الاسم
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name">
								</div>

								<!-- Phone -->
								<span class="txt9">
									الهاتف
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Phone">
								</div>

								<!-- Email -->
								<span class="txt9">
									Email
								</span>

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
								</div>
							</div>
						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4" type="submit" name="submit">
								احجز
							</button>
						</div>
					</form>
				</div>

				<div class="col-lg-6 p-b-30 p-t-18">
					<div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="images/booking-01.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>
<!--=================================saving booking in php=====================================-->

		<?php 
	if (isset($_POST['submit'])) {
        echo '<script> alert("تمت عملية الحجز بنجاح نحن في انتظاركم ") </script>';

        $query = "INSERT INTO reseverse (userName, dateOf, time_res, phoneNumber, sizeOfTable, email,state)
		 VALUES ('".$_POST['name']."','".$_POST['date']."','".$_POST['time']."','".$_POST['phone']."','".$_POST['people']
		 ."','".$_POST['email']."','".'طلب'."')";

		mysqli_query($connect, $query);
}
	?>

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






 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
<?php
    include('colseConnection.php');
?>
