<?php
    include("mysql.php");
    date_default_timezone_set('Asia/Taipei');
    $ti_date = date ("Y-m-d");
    $data = "";$name = "";

    if($title_count>0){
        //先查詢今天爬蟲資料
        $titles_sql = "SELECT name, category_id FROM titles WHERE date IN ('$ti_date')";
        $query = $conn->query($titles_sql);
        $name_data = $query->fetchAll(PDO::FETCH_ASSOC);
        $ti_count = count($name_data);

        $category_sql = "SELECT count(id) as id_count FROM categorys";
        $query = $conn->query($category_sql);
        $max = $query->fetch(PDO::FETCH_ASSOC);
        $category_max = $max['id_count'];

        //有資料時做比對
        if($ti_count>0){

            //查詢到的資料先組陣列
            $name_array = array();
            $category_array = array();
            foreach ($name_data as $key => $value) {
                array_push($name_array, $value['name']);
            }

            //用php內建函式做陣列資料比對
            $diff = array_diff($yahoo_title, $name_array);
            $diff_count = count($diff);

            //確認比對中資料是否不一樣
            if($diff_count>0){
                foreach ($diff as $diff_name) {
                    //比對陣列中相同的值是第幾個
                    $diff_now =  array_keys($yahoo_title, $diff_name);
                    foreach ($diff_now as $now) {
                        $ti_category = $now+1;
                        
                        //ceil:無條件進位
                        if($ti_category>$category_max){
                            $ti_category = (ceil($ti_category / $category_max)) - 1;
                        }

                        $ti_name = $yahoo_title[$now];
                        $ti_text = $yahoo_subtitle[$now];
                        $data = $data . "('$ti_category', '$ti_date', '$ti_name', '$ti_text'),";
                    }

                }
            }
        }else{
            for($i=0;$i<$category_count;$i++){
                $ti_category =  $category_title[$i];
                $a = $i * 5;
                $b = $a + 5;

                for($j=$a;$j<$b;$j++){
                    $ti_category = $i+1; 
                    $ti_name = $yahoo_title[$j];
                    $ti_text = $yahoo_subtitle[$j];

                    $data = $data . "($ti_category, '$ti_date', '$ti_name', '$ti_text'),";
                }
            }
        }
    }

    if($data!=""){
        $sql = "INSERT INTO titles (category_id, date, name, text)
            VALUES ". substr($data, 0, -1);
    
        $conn->exec($sql);
    }
?>