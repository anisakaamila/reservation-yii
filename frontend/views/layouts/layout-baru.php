<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<html lang="en">
<head>
	<?php	
	$this->title="Reservasi"; 
	?>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
    <link href="../js/main.js" rel="stylesheet" id="js">
<!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--===============================================================================================-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--===============================================================================================-->
</head>

<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<img src="../images/icons/logo4.png" data-logofixed="../images/icons/logo3.png">
						
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								
								<li>
									<a href="<?= Url::toRoute('home/',true)?>">Home</a>
								</li>

								<li>
									<a href="<?= Url::toRoute('menu/',true)?>">Menu</a>
								</li>

								<li> 
									<a href="<?= Url::toRoute('reservasi/',true)?>">Reservasi</a>
									<ul class="sub_menu">
										<li><a href="<?= Url::toRoute('reservasi/',true)?>">Reservasi Tempat</a></li>
										<li><a href="<?= Url::toRoute('pesan-menu/',true)?>">Reservasi Menu</a></li>
										<li><a href="<?= Url::toRoute('pembayaran/',true)?>">Bukti Pembayaran</a></li>
									</ul>
								</li>
								
								<li>
									<a href="<?= Url::toRoute('galeri/',true)?>">Galeri</a>
								</li>

								<li>
									<a href="<?= Url::toRoute('about/',true)?>">Tentang Kami</a>
								</li>

								<li>
									<a href="<?= Url::toRoute('contact/',true)?>">Kontak</a>
								</li>
                                
                                <li>
				                    <a href="<?= Url::toRoute('login/',true)?>" class="txt19">Login</a>
			                    </li>
							</ul>
						</nav>
					</div>

					
					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="https://www.instagram.com/restaurantdotcom/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="https://www.facebook.com/restaurantcom/"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="https://twitter.com/restaurant_com"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="<?= Url::toRoute('home/',true)?>" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="<?= Url::toRoute('menu/',true)?>" class="txt19">Menu</a>
			</li>
			
			<li class="t-center m-b-33">
				<a href="<?= Url::toRoute('reservasi/',true)?>" class="txt19">Reservasi</a>
			</li>

			<li class="t-center m-b-13">
				<a href="<?= Url::toRoute('galeri/',true)?>" class="txt19">Galeri</a>
			</li>

			<li class="t-center m-b-13">
				<a href="<?= Url::toRoute('about/',true)?>" class="txt19">Tentang Kami</a>
			</li>

			<li class="t-center m-b-33">
				<a href="<?= Url::toRoute('contact/',true)?>" class="txt19">Kontak</a>
			</li>

			<li class="t-center m-b-33">
				<a href="<?= Url::toRoute('login/',true)?>" class="txt19">Login</a>
			</li>

			<li class="t-center m-b-33">
				<a href="<?= Url::toRoute('sign-up/',true)?>" class="txt19">Sign Up</a>
			</li>
        </ul>
    </aside>

	<!-- Body -->
    <body class="animsition">

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(../images/pesanmenu.jpg);">
		<h2 class="tit6 t-center">
			Pesan Menu
		</h2>
	</section>

	<!-- Our Story -->
	<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
		<span class="tit2 t-center">
			Nice 2 Eat Restaurant
		</span>

		<h3 class="tit3 t-center m-b-35 m-t-5">
			DAFTAR MENU
		</h3>

		<p class="t-center size32 m-l-r-auto">
		Makanan yang enak umumnya biasa saja, namun makanan yang memiliki cita rasa yang luar biasa adalah makanan yang di buat dengan sentuhan perasaan yang baik juga.
		</p>
	</section>

	<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image:url(../images/header-menu-01.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Main Course
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="../images/lunch-01.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Paella
							</a>
							
							<span class="txt23">
								Nasi yang dimasak dengan minyak zaitun dengan digabungkan bersama seafood, daging kelinci, ayam maupun kerang.
							</span>
							
							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 55.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="inputt" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/lunch-03.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Nasi Ayam Hainanese
							</a>

							<span class="txt23">
								Disajikan dengan saus cabai, nasi ayam Hainanese terdiri dari ayam yang disajikan bersama kaldu tulang babi.
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 35.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/lunch-05.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Meat pie
							</a>

							<span class="txt23">
								Pie yang berisi dengan daging cincang yang disajikan bersama saus tomat adalah salah satu menu yang populer di Australia.
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 43.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/lunch-02.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Pot-au-feu
							</a>

							<span class="txt23">
								Terdiri dari daging, wortel, seledri dan bawang bombay serta rempah seperti cengkeh dan lada hitam.
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 50.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/lunch-04.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Goulash
							</a>

							<span class="txt23">
								Semur yang terbuat dari daging (biasanya sapi dan babi) dan juga sayuran seperti paprika, tomat dan bawang putih.
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 47.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/lunch-06.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Wiener Schnitzel
							</a>

							<span class="txt23">
								Daging sapi muda tanpa tulang ini dibalut bersama tepung, telur dan tepung roti dan digoreng kering, disajikan bersama kentang tumbuk dan perasaan lemon.
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 75.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Soup
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/zuppa.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
							Zuppa Soup
							</a>
							
							<span class="txt23">
							Sup kental dengan pastry ala croissant yang ditaruh diatasnya seperti topi 
							</span>
							
							<div class="wrapp">
								<span class="txt22 m-t-20">
								Rp 62.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/miso.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Miso Soup
							</a>

							<span class="txt23">
							Masakan Jepang berupa sup dengan bahan dasar dashi, makanan laut dan diberi miso
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
								Rp 39.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/creamy.jpeg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
							Creamy Corn Soup
							</a>

							<span class="txt23">
							Sup yang dibuat dari jagung. Krim terdiri dari jagung, bawang, seledri, susu atau krim dan mentega.
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 44.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Chicken.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
							Chicken Soup
							</a>

							<span class="txt23">
							Sup yang terbuat dari ayam. Terdiri dari kaldu encer, yang dimasukkan potongan ayam atau sayuran
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 35.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Asparagus.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
							Asparagus Soup
							</a>

							<span class="txt23">
							Sup Asparagus yang renyah dengan paduan daging ayam yang gurih membuat rasa lembut enak di lidah.
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 64.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Buntut.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
							Sup Buntut
							</a>

							<span class="txt23">
							Sop buntut terbuat dari potongan ekor sapi yang dibumbui kemudian dibakar atau digoreng
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
								Rp 27.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Salad
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Caesar.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
							Caesar Salad
							</a>
							
							<span class="txt23">
							Hidangan dari selada dan roti panggang dipotong kecil, keju parmesan, jus lemon, minyak zaitun, telur, saus worcestershire, bawang putih, dan lada hitam
							</span>
							
							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 21.500
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Greek.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
							Greek Salad
							</a>

							<span class="txt23">
							Salad Yunani dibuat dengan potongan-potongan tomat, irisan mentimun, bawang, keju feta, dan zaitun
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
								Rp 47.600
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Egg.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
							Egg Salad Sandwich
							</a>

							<span class="txt23">
							Sajian roti isi yang praktis ini mudah dibuat. Isinya pun lengkap nutrisi. Telur, almond, daun selada dan roti whole wheat
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 17.500
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Coleslaw.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
							Coleslaw Salad
							</a>

							<span class="txt23">
							Salad yang terdiri dari kubis mentah parut halus dengan saus salad, biasanya vinaigrette atau mayones. Coleslaw disiapkan dengan vinaigrette
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
								Rp 37.200
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Fruit.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
							Fruit Salad
							</a>

							<span class="txt23">
							akanan yang dibuat dari aneka potongan buah, serta dibalut dengan krim keju dan susu
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 15.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Tuna.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Tuna Salad
							</a>

							<span class="txt23">
							Salad tuna dibuat dengan campuran dua bahan utama yaitu tuna dan mayones. Tuna yang digunakan biasanya sudah dimasak
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
								Rp 57.300
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Dessert
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Ros.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
							Churros
							</a>
							
							<span class="txt23">
							Churro adalah kue kering adonan goreng terutama camilan berbasis choux. Churros adalah tradisional di Spanyol dan Portugal
							</span>
							
							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 15.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/pie.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Apple Pie
							</a>

							<span class="txt23">
							Pai apel adalah pai buah yang isian utamanya adalah buah apel. Pai apel disajikan dengan baluran krim kocok atau es krim di atasnya
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
								Rp 43.500
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Mochi.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Mochi
							</a>

							<span class="txt23">
							Mochi adalah kue Jepang yang terbuat dari beras ketan, ditumbuk sehingga lembut dan lengket, kemudian dibentuk menjadi bulat
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
								Rp 29.700
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Cake.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
							Tiramisu Cake
							</a>

							<span class="txt23">
							iramisu adalah kue keju khas Italia dengan taburan bubuk kakao di atasnya. Kue ini merupakan hidangan penutup yang dimakan dengan sendok
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
								Rp 52.900
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Gelato.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Gelato
							</a>

							<span class="txt23">
								SGelato adalah sebuah ice cream dari Italia. Ice cream gelato lebih kental, padat dan dingi. Adonannya dibalut dengan campuran telur dan susu 
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 28.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Campur.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Es Campur
							</a>

							<span class="txt23">
							Es campur adalah salah satu minuman khas Indonesia dengan campuran aneka buah-buahan, kelapa parut, rumput laut dan sirup manis
							</span>

							<div class="wrapp">
								<span class="txt22 m-t-20">
									Rp 15.000
								</span> 
							
								<div class="quantity"> 
									<button class="minus-btn" type="button" name="button">
        								<img src="minus.svg" alt="" />
									</button>
										<input class="input2" type="text" name="name" value="0" size="1"> 
											<button class="plus-btn" type="button" name="button">
        										<img src="plus.svg" alt="" />
											</button>	  
								</div>
							</div>
						</div>
					</div>
				</div>		
      </div>
		</div>
		<div class="wrap-btn-booking flex-c-m m-t-6">
					<!-- Button -->
						<button type="submit" class="btn-pesan">
            	<?= Html::a('Pesan Menu', ['/konfirmasi/'], ['class'=>'btn3 flex-c-m size17 txt11 trans-0-4'])?>
            </button>
	  </div>
	
	</section>

	<!-- Sign up -->
	<div class="section-signup bg1-pattern p-t-85 p-b-85">
		<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
			<span class="txt5 m-10">
				Specials Sign up
			</span>

			<div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
				<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="Email Adrress">
				<i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
			</div>

			<!-- Button3 -->
			<button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
				Sign-up
			</button>
		</form>
	</div>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
	<script type="text/javascript">
      $('.minus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value > 1) {
    			value = value - 1;
    		} else {
    			value = 0;
    		}

        $input.val(value);
    	});

    	$('.plus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value < 100) {
      		value = value + 1;
    		} else {
    			value =100;
    		}

    		$input.val(value);
    	});
		
    </script>

<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="../js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
<!-- Footer -->
<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Kontak kami
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							Jl. Tambak Asri 156b , Krembangan , Surabaya, Jawa timur
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							089-838-49-567
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							nice2eat@gmail.com
						</li>
					</ul>

					<!-- - -->
					<h4 class="txt13 m-b-32">
						Jam Operasional
					</h4>

					<ul>
						<li class="txt14">
							09.00 – 23.00
						</li>

						<li class="txt14">
							Setiap Hari
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Postingan Terupdate
					</h4>

					<div class="m-b-25">
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@nice2eat
						</a>

						<p class="txt14 m-b-18">
							Hari ini kita buka pukul 09.00 – 23.00
							<a href="#" class="txt15">
								www.nice2eat.co.id
							</a>
						</p>
						
						<span class="txt14">
							1 Mei 2019
						</span>
					</div>

					<div>
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@nice2eat
						</a>

						<p class="txt14 m-b-18">
							Selamat datang para pelanggan, jangan lupa nantikan promo special dari kami.
							Stay tuned !
							<a href="#" class="txt15">
								www.nice2eat.co.id
							</a>
						</p>

						<span class="txt14">
							7 Maret 2019
						</span>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Galeri
					</h4>

					<!-- Gallery footer -->
					<div class="wrap-gallery-footer flex-w">
						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-thumb-01.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-thumb-02.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-thumb-03.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-04.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-thumb-04.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-thumb-05.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-thumb-06.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-thumb-07.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-08.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-thumb-08.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-thumb-09.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-thumb-10.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-thumb-11.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-12.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-thumb-12.jpg" alt="GALLERY">
						</a>
					</div>

				</div>
			</div>
		</div>

			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="https://www.instagram.com/restaurantdotcom/" class="fs-15 c-white"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="https://www.facebook.com/restaurantcom/" class="fs-15 c-white"><i class="fa fa-whatsapp m-l-18" aria-hidden="true"></i></a>
						<a href="https://twitter.com/restaurant_com" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright @2019 By Admin Nice2eat |  Made With <i class="fa fa-heart"></i> Nice 2 Eat</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


</html>

