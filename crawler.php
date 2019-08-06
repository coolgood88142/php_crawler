<?php 
    $data_url = "https://tw.yahoo.com/";
	//建立cURL函式，初始化
    $ch = curl_init();
	
    //設定URL網址
    curl_setopt($ch, CURLOPT_URL, $data_url);
	
	//將curl_exec回傳URL網址裡的內容以字串呈現，而不是HTML頁面
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
    //設定header表頭「Accept-Encoding: 」部分的內容，支編碼格式為："identity"，"deflate"，"gzip"。如果設置為空字符串，則表示支持所有的編碼格式
	//設定其他編碼格式會怎麼樣，不設定又會怎麼樣?
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
                 
    //在HTTP請求包含一個user-agent頭的字符串，設定瀏覽器呈現。
	//有加跟沒加有差嗎?
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) chrome/34.0.1847.131 Safari/537.36');
                 
    //回傳網站html內容
    $html = curl_exec($ch);
    $title = "";
	
	//搜尋html內容裡的a標籤下一層的span標籤的文字與p標籤下一層的span標籤的文字
	preg_match_all('/(<a [^>]*><span class="Va-tt"[^>]*>([\s\S]*?)<\/span><\/a>)/si',$html,$title);

	preg_match_all('/<p [^>]*><span class="Va-tt"[^>]*>([\s\S]*?)<\/span>/si',$html,$sub_title);

	//類別中最後的文字，first_text+other_text
	preg_match_all('/<div class="My-0 Pos-r"[\s\S]*?<b [^>]*>([\s\S]*?)<\/b>[\s\S]*?<span[\s\S]*?>([\s\S]*?)<\/span>/si',$html,$first_text);
	preg_match_all('/<div class="My-0 Dimmed Pos-r"[\s\S]*?<span [^>]*>([\s\S]*?)<\/span>/si',$html,$other_text);

	$last_text = array_merge($first_text[1], $other_text[1]);
	// $sub_title = array_splice($sub_title[1],0,$last_text); 
	var_dump($title[2]);
	exit;

	$category = "";
	//搜尋html內容裡的a標籤的標題
	preg_match_all('/<i class="[\s\S]*? D-ib W-100">([\s\S]*?)<\/i\s*>/si',$html,$category);
	
	$img = "";
	preg_match_all('/<div class="W-100 H-100 Ov-h "[\s\S]*?<img [\s\S]*?src="([\s\S]*?)"[\s\S]*?alt="([\s\S]*?)">[\s\S]*?<a href="([\s\S]*?)"/si',$html,$img);
?>