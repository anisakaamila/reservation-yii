<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendor/bootstrap/css/bootstrap.min.css',
        'fonts/font-awesome-4.7.0/css/font-awesome.min.css',
        'fonts/themify/themify-icons.css',
        'vendor/animate/animate.css',
        'vendor/css-hamburgers/hamburgers.min.css',
        'vendor/animsition/css/animsition.min.css',
        'vendor/select2/select2.min.css',
        'vendor/daterangepicker/daterangepicker.css',
        'vendor/slick/slick.css',
        'vendor/lightbox2/css/lightbox.min.css',
        'css/util.css',
        'css/main.css',
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css',        
        'css/site.css',
        'login-form3/assets/bootstrap/css/bootstrap.min.css',
        'login-form3/assets/font-awesome/css/font-awesome.min.css',
        'login-form3/assets/css/form-elements.css',
        'login-form3/assets/css/style.css',
    ];
    
    public $js = [
        'js/main.js',
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js',
        '//code.jquery.com/jquery-1.11.1.min.js',
        '//code.jquery.com/jquery-2.2.4.js',
        'login-form3/assets/js/jquery-1.11.1.min.js',
        'login-form3/assets/bootstrap/js/bootstrap.min.js',
        'login-form3/assets/js/jquery.backstretch.min.js',
        'login-form3/assets/js/scripts.js',
        'vendor/jquery/jquery-3.2.1.min.js',
        //'vendor/animsition/js/animsition.min.js',
        //'vendor/bootstrap/js/popper.js',
        //'vendor/bootstrap/js/bootstrap.min.js',
        //'vendor/select2/select2.min.js',
        //'vendor/daterangepicker/moment.min.js',
        //'vendor/daterangepicker/daterangepicker.js',
        //'vendor/slick/slick.min.js',
        //'js/slick-custom.js',
        //'vendor/parallax100/parallax100.js',
        //'vendor/countdowntime/countdowntime.js',
        //'vendor/lightbox2/js/lightbox.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
