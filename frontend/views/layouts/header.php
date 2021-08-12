
<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!-- Header -->
<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<img src="images/icons/logo4.png" data-logofixed="images/icons/logo3.png">
						
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