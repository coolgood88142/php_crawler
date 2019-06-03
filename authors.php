<?php 
    //提交表單網址
    $post_url = 'https://www.cw.com.tw/member/home/MemberLogin.action?srcType=http%3A%2F%2Fwww.cw.com.tw%2FmyAccount%2Ffollow-authors';

    //建立cookie用來暫存
    $cookie_file = dirname(__FILE__)."/authors_cookie.txt";

    //帳號
    $account = 'coolgood88142@gmail.com';
    $password = 'eric88142';
    $post = "account=$account&password=$password";

    //建立初始化curl物件
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $post_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);     //提交方式為post
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
    curl_exec($ch);
    curl_close($ch);
    exit;

    $data_url = "https://www.cw.com.tw/myAccount/follow-authors";   //資料所在地址
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $data_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,0);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);
    $data = curl_exec($ch);
    curl_close($ch);

    echo $data;
?>