<?php
    include("mysql.php");
    date_default_timezone_set('Asia/Taipei');
    $ti_date = date ("Y-m-d");
    $data = "";$name = "";

    $sql = "SELECT count(ti_id) as ti_count FROM title";
    $query = $conn->query($sql);
    $count = $query->fetchAll(PDO::FETCH_ASSOC);
    $count = $category_count-$count;

    if($count>0){
        for($i=0;$i<$category_count;$i++){
            $ti_category =  $category_title[$i];
            $a = $i * 4;
            $b = $a + 4;

            for($j=$a;$j<$b;$j++){
                $ti_name = $yahoo_title[$j];
                $ti_text = $yahoo_subtitle[$j];

                // $data = $data . '(' . '\''.$ti_category.'\'' . ',' . '\''.$ti_name.'\''. ',' . '\''.$ti_text.'\''. '),';
                $data = $data . "('$ti_category', '$ti_date', '$ti_name', '$ti_text'),";
                $name = $name . '\'' . $ti_name . '\',';
            }
        }
    }

    

    $name = substr($name, 0, -1);
    $sql = "SELECT ti_id FROM title WHERE ti_name NOT IN ($name)";
    $query = $conn->query($sql);
    $ti_id = $query->fetch(PDO::FETCH_ASSOC);
    $count=count($ti_id);

    if($count>0){
        for($i=0 ; $i<$count ; $i++){
            $id = $ti_id[$i];
        }
    }
    
    
    $sql = "INSERT INTO title (ti_category, ti_date, ti_name, ti_text)
            VALUES ";

    $sql = $sql . substr($data, 0, -1);
    // $conn->exec($sql);
?>