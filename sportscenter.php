<?php 
require	'vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;
    //提交表單網址
    $post_url = 'https://scr.cyc.org.tw//tp10.aspx?module=login_page&files=login';

    //建立cookie用來暫存
    $cookie_file = dirname(__FILE__)."/Sportscenter_cookie.txt";

    //帳號
    $ContentPlaceHolder1_loginid = 'G122156357';
    $loginpw = 'eric88142';
    $post = "ContentPlaceHolder1_loginid=$ContentPlaceHolder1_loginid&loginpw=$loginpw";
	$image_url = 'https://scr.cyc.org.tw//NewCaptcha.aspx';


    echo (new TesseractOCR('NewCaptcha.png'))
    ->run();
?>