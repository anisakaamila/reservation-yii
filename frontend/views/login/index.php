<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!DOCTYPE html>
<html lang="en">

<?php
$this->title="Login";
?>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="login-form3/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="login-form3/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="login-form3/assets/css/form-elements.css">
        <link rel="stylesheet" href="login-form3/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="login-form3/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="login-form3/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="login-form3/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="login-form3/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="login-form3/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body class="animsition">

<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/reservasi.jpg);">
    <h2 class="tit6 t-center">
        Login
    </h2>
</section>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
            <div class="t-center">
						        <span class="tit2 t-center">
							        Login untuk melakukan reservasi
                                </span>
                            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            

                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Nice 2 Eat Restaurant Login</h3>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="form-username" placeholder="Username" class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password">
                                    </div>
                                    
                            <div class="wrap-btn-booking flex-c-m m-t-6">
						
							<!-- Button -->
							<button type="submit">
                                <?= Html::a('Login', ['/reservasi/'], ['class'=>'btn3 flex-c-m size17 txt11 trans-0-4'])?>
                            </button>
							
						</div>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                            <div class="t-center">
                                <a class="tit2 t-center" href="<?= Url::toRoute('sign-up/',true)?>">Sign up here </a>
						            <span class="tit2 t-center">
							            or login with
                                    </span>
                            
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="https://id-id.facebook.com/">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="https://mobile.twitter.com/login">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-2" href="https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F&csig=AF-SEnbdI_GxjLtTzr1y%3A1558878351&flowName=GlifWebSignIn&flowEntry=AddSession">
	                        		<i class="fa fa-google-plus"></i> Google 
	                        	</a>
                        	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="login-form3/assets/js/jquery-1.11.1.min.js"></script>
        <script src="login-form3/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="login-form3/assets/js/jquery.backstretch.min.js"></script>
        <script src="login-form3/assets/js/scripts.js"></script>

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

        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
    </body>
</html>