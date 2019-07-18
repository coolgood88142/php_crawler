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
	preg_match_all('/(<a [^>]*><span class="Va-tt">([\s\S]*?)<\/span\s*><\/a>)\s+<p class="[\s\S]*?"><span class="Va-tt">([\s\S]*?)<\/span\s*><\/p>\s+<\/span\s*>/si',$html,$title);

	$category = "";
	//搜尋html內容裡的a標籤的標題
	preg_match_all('/<i class="[\s\S]*? D-ib W-100">([\s\S]*?)<\/i\s*>/si',$html,$category);
	
	$img = "";
	//搜尋html內容裡的a標籤的標題
	preg_match_all('/<img class="MainStoryImage Pos-r Bd-0 Mend-12[\s\S]*? alt="([\s\S]*?)"[\s\S]*?>/si',$html,$img);
	
	$img_link ="";
	preg_match_all('/<div class="Bgc-w D-ib Zoom-1 Pos-a Start-0 T-0 Ov-h[\s\S]*?>\s+<div>\s+<a href="([\s\S]*?)"/si',$html,$img_link);
	
?>