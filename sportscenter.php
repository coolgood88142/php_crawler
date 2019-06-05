<?php 
    //提交表單網址
    $post_url = 'https://scr.cyc.org.tw//tp10.aspx?module=login_page&files=login';

    //建立cookie用來暫存
    $cookie_file = dirname(__FILE__)."/Sportscenter_cookie.txt";

    //帳號
    $ContentPlaceHolder1_loginid = 'G122156357';
    $loginpw = 'eric88142';
    $post = "ContentPlaceHolder1_loginid=$ContentPlaceHolder1_loginid&loginpw=$loginpw";

    //建立初始化curl物件
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $post_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);     //提交方式為post
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
    curl_exec($ch);
    curl_close($ch);
    
    

    $data_url = "https://scr.cyc.org.tw/tp10.aspx?module=ind&files=ind";   //資料所在地址
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $data_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,0);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);
    $data = curl_exec($ch);
    curl_close($ch);

    echo $data;
?>