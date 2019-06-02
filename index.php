<?php 
    //提交表單網址
    $post_url = 'http://localhost/active_plan/sign_in.php';

    //建立cookie用來暫存
    $cookie_file = dirname(__FILE__)."/cookie.txt";

    //帳號
    $account = 'admin0000';
    $password = '0000';
    $post = "us_account=$account&us_password=$password";

    //建立初始化curl物件
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $post_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);     //提交方式為post
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
    curl_exec($ch);
    curl_close($ch);
    

    $data_url = "http://localhost/active_plan/activity.php";   //資料所在地址
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $data_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,0);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);
    $data = curl_exec($ch);
    curl_close($ch);

    echo $data;
?>