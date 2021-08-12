<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$this->title = "Reservasi";
	?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/reservasi.jpg);">
		<h2 class="tit6 t-center">
			Reservasi
		</h2>
	</section>

	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Reservasi
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Meja
						</h3>
					</div>

					<form class="wrap-form-reservation size22 m-l-r-auto" method="post">
						<div class="row row2">
							<div class="col-md-4">
								<!-- Date -->
								<span class="txt9">
									Tanggal
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="date">
									<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
								</div>
							</div>

							<div class="col-md-4">
								<!-- Time -->
								<span class="txt9">
									Jam
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="time">
									<?php for($i=9; $i<=18; $i++){ ?>
											<option><?php echo $i; ?> : 00</option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="col-md-4">
								<!-- People -->
								<span class="txt9">
									Meja untuk berapa orang
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="people">
										<?php for($i=1; $i<=30; $i++){ ?>
											<option><?php echo $i; ?> orang</option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						
						<div class="wrap-btn-booking flex-c-m m-t-6">
						
							<!-- Button3 -->
							<button type="submit">
                                <?= Html::a('Pesan Meja', ['/id/'], ['class'=>'btn3 flex-c-m size17 txt11 trans-0-4'])?>
                            </button>
							
						</div>
					</form>
				</div>
			</div>

			<div class="info-reservation flex-w p-t-80">
				<div class="size23 w-full-md p-t-40 p-r-30 p-r-0-md">
					<h4 class="txt5 m-b-18">
						Reservasi via Telepon
					</h4>

					<p class="size25">
						Untuk reservasi via telepon Minimal 24 Jam sebelum acara
						<span class="txt25">Hubungi</span>
						Pelayanan pemesanan
						<span class="txt24">(031) 877-123-32</span>
					</p>
				</div>

				<div class="size24 w-full-md p-t-40">
					<h4 class="txt5 m-b-18">
						Untuk Booking Acara
					</h4>

					<p class="size26">
						Untuk booking acara silahkan konfirmasi minimal 7 Hari sebelum Acara di laksanakan.
						<span class="txt25">Hubungi</span>
						<span class="txt24">089-312-321-212</span>
					</p>
				</div>

			</div>
		</div>
	</section>

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
	<script src="js/main.js"></script>

</body>
</html>
