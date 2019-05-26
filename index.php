<?php 
    //登入網址
    $login_url = 'http://localhost/active_plan/login.php';

    //建立cookie用來暫存
    $cookie_file = dirname(__FILE__)."/cookie.txt";

    //建立初始化curl物件
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $login_url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
    curl_exec($ch);
    curl_close($ch);

    //提交表單網址
    $post_url = 'http://localhost/active_plan/sign_in.php';
    //帳號
    $account = 'admin0000';
    $password = '0000';
    $post = "us_account=$account&us_password=$password";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $post_url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);     //提交方式為post
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);

    //curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

    //設定等待時間參數
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);


    $data = curl_exec($ch);
    //curl_close($ch);

    echo $data;

 
    // $timeout = 10;
                 
    // $ch = curl_init();
    // //設定curl物件取得URL網址
    // curl_setopt($ch, CURLOPT_URL, $data_url);

    // //將curl_exec()回傳的資訊用字串的方式呈現       
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           
    // //設定curl物件，支援gzip編碼格式
    // //編碼格式由header中「Accept-Encoding: 」部分的內容，支編碼格式為："identity"，"deflate"，"gzip"。如果設置為空字符串，則表示支持所有的編碼格式
    // curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
                 
    // //HTTP請求中包含一個user-agent頭的字符串。
    // curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) chrome/34.0.1847.131 Safari/537.36');
                 
    // //設定等待時間參數
    // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
                 
    // //執行curl物件，回傳網站html內容
    // $html = curl_exec($ch);
            
    // echo $html;
                //console.log($html);
?>