<?php
    include("mysql.php");
    $sql = "INSERT INTO title (ti_category, ti_name, ti_text)
            VALUES ";
            
    $data = "";
    for($i=0;$i<$category_count;$i++){
        $ti_category =  $category_title[$i];
        $a = $i * 4;
        $b = $a + 4;

        for($j=$a;$j<$b;$j++){
            $ti_name = $yahoo_title[$j];
            $ti_text = $yahoo_subtitle[$j];

            $data = $data . '(' . '\''.$ti_category.'\'' . ',' . '\''.$ti_name.'\''. ',' . '\''.$ti_text.'\''. '),';
        }
    }

    $sql = $sql . substr($data, 0, -1);
    $conn->exec($sql);
?>