<?php
    include("mysql.php");
    date_default_timezone_set('Asia/Taipei');
    $ti_date = date ("Y-m-d");
    $data = "";$name = "";

    if($title_count>0){
        //先查詢今天爬蟲資料
        $name_sql = "SELECT ti_name, ti_category FROM title WHERE ti_date IN ('$ti_date')";
        $query = $conn->query($name_sql);
        $name_data = $query->fetchAll(PDO::FETCH_ASSOC);
        $ti_count = count($name_data);

        //有資料時做比對
        if($ti_count>0){

            //查詢到的資料先組陣列
            $name_array = array();
            $category_array = array();
            foreach ($name_data as $key => $value) {
                array_push($name_array, $value['ti_name']);
            }


            //用php內建函式做陣列資料比對
            $diff = array_diff($yahoo_title, $name_array);
            $diff_count = count($diff);

            //確認比對中資料是否不一樣
            if($diff_count>0){
                foreach ($diff as $value) {
                    //找出爬蟲陣列資料中，不一樣資料是第幾個
                    $title_keys = array_keys($yahoo_title,$value);
                    foreach ($title_keys as $key) {
                        $keys = $key + 1;

                        //計算標題資料屬於第幾個類別
                        if($keys>4){
                            $category_key = (ceil($keys / 4)) - 1;
                            // echo $keys;
                            // exit;
                        }else{
                            $category_key = (4 - $keys) / 4;
                        }

                        $ti_category =  $category_title[$category_key];
                        $ti_name = $yahoo_title[$key];
                        $ti_text = $yahoo_subtitle[$key];

                        $data = $data . "('$ti_category', '$ti_date', '$ti_name', '$ti_text'),";
                    }
                }
            }
        }else{
            for($i=0;$i<$category_count;$i++){
                $ti_category =  $category_title[$i];
                $a = $i * 4;
                $b = $a + 4;

                for($j=$a;$j<$b;$j++){
                    $ti_name = $yahoo_title[$j];
                    $ti_text = $yahoo_subtitle[$j];

                    $data = $data . "('$ti_category', '$ti_date', '$ti_name', '$ti_text'),";
                }
            }
        }
    }

    if($data!=""){
        $sql = "INSERT INTO title (ti_category, ti_date, ti_name, ti_text)
            VALUES ". substr($data, 0, -1);

        $conn->exec($sql);
    }
?>