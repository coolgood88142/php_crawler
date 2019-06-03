<?php 
 
    $data_url = "https://tw.yahoo.com/";


                 
    $ch = curl_init();
    //設定curl物件取得URL網址
    curl_setopt($ch, CURLOPT_URL, $data_url);



    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
   
    
           
    //設定curl物件，支援gzip編碼格式
    //編碼格式由header中「Accept-Encoding: 」部分的內容，支編碼格式為："identity"，"deflate"，"gzip"。如果設置為空字符串，則表示支持所有的編碼格式
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
                 
    //HTTP請求中包含一個user-agent頭的字符串。
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) chrome/34.0.1847.131 Safari/537.36');
                 
    //執行curl物件，回傳網站html內容
    $html = curl_exec($ch);
            
    //取出div標籤且id為PostContent的內容，並儲存至陣列match
<<<<<<< HEAD
	preg_match_all('/<span class="Va-tt"(?:>|\s+([\s\S]*?)>)([\s\S]*?)<\/span\s*>/si',$html,$match);
	//preg_match_all('/<span class="Va-tt">(.*?)[<\/span><\/a>?]/si',$html,$match);
    //preg_match_all('/<div[^>]*class="Va-tt"[^>]*>(.*?) <\/div>/si',$html,$match);


    //印出match  
    var_dump($match);
=======
    preg_match_all('/<span[^>]*class="Va-tt"[^>]*>(.*?) <\/span>/si',$html,$match);

    //印出match  
   var_dump($match); 
>>>>>>> 1cebfb272bca52ec00b5bf54666aa7f461d382b7

    
?>