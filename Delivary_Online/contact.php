<?php
    include('server.php');
    include('singup.php');
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<body class="animsition">

	<!--=================================sing up modal=====================================-->

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <form method="POST" action="singup.php" style="width: 800px; height: 500px;">
  <div class="modal-dialog" role="document" ">
    <div class="modal-content bg2-pattern">
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
</form>
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
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
		<h2 class="t-center" style="font-family: '29LT Bukra Bold'; font-size: 60px; color:white">
			تواصل معنا
		</h2>
	</section>



	<!-- Contact form -->
	<section class="section-contact bg1-pattern p-t-90 p-b-113" style="direction: rtl;">
	
		</div>

		<div class="container">
			<h3 class="t-center p-b-62 p-t-105" style="font-family: '29LT Bukra Bold'; font-size: 40px;">
				أرسل لنا رسالة 
			</h3>

			<form class="wrap-form-reservation size22 m-l-r-auto" action=""  method="POST">
				<div class="row">
					<div class="col-md-4">
						<!-- Name -->
						<span class="txt9" style="direction: rtl;">
							الاسم
						</span>

						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Email -->
						<span class="txt9" style="text-align: right;">
							البريد اللإلكتروني
						</span>

						<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Phone -->
						<span class="txt9" style="direction: rtl;">
							رقم الهاتف
						</span>

						<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone">
						</div>
					</div>

					<div class="col-12">
						<!-- Message -->
						<span class="txt9" style="direction: rtl;">
							ملاحظات
						</span>
						<textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message"></textarea>
					</div>
				</div>

				<div class="wrap-btn-booking flex-c-m m-t-13">
					<!-- Button3 -->
					<button type="submit" name="submit" id="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
						إرسال
					</button>
				</div>
			</form>

			<div class="row p-t-135">
				<div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/map-icon.png" alt="IMG-ICON">
						</div>

						<div class="flex-col-l">
							<span style="font-family: '29LT Bukra Bold'; font-size: x-large;">
								الموقع
							</span>

							<span class="txt23 size38">
								شارع الجرابة مدخل باب بن غشير 
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/phone-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span style="font-family: '29LT Bukra Bold'; font-size: x-large;">
								اتصل بنا
							</span>

							<span class="txt23 size38">
								092 560 89 77
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/clock-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span style="font-family: '29LT Bukra Bold'; font-size: x-large;">
								ساعات العمل
							</span>

							<span class="txt23 size38">
								09:30 AM – 11:00 PM <br/>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php 
	if (isset($_POST['submit'])) {
	
		$query = "INSERT INTO informatic (name, email, phone, massege)
		 VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['message']."')";


///$result = $connect->query($query);
		$result = mysqli_query($connect, $query); //eeror in the connection
	//f ($result) {
	//echo "date is insert";
	//
		//se
		//cho "error";
}
	?>

	<!-- Footer -->

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php
    include('colseConnection.php');
?>

