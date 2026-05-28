<?php
    header("Content-Type:text/html; charset=utf8");

    $db = mysqli_connect('localhost','monster2026aix','a1s2d3f4!','monster2026aix');
    mysqli_query($db , 'set names utf8');
    $sql = "SELECT * FROM  ex01";
    $result_table = mysqli_query($db, $sql);
    if($result_table){
        $row_num = mysqli_num_rows($result_table);
        for ($i =0; $i<$row_num; $i++){
            $row = mysqli_fetch_array($result_table, MYSQLI_ASSOC);
            $no = $row['no'];
            $name = $row['name'];
            $tel = $row['tel'];
            $email = $row['email'];
            
            echo "$no $name<br>";
            echo "$tel<br>";
            echo "$email<br>";
            echo "<hr>";
        }
    }else{
        echo "예약에실패하였습니다.";
    }

    mysqli_close($db);



?>