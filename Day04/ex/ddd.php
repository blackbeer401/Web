<?php

    header("Content-Type:text/html; charset=utf-8");

    $db = mysqli_connect('localhost','monster2026','a1s2d3f41','monster2026aix');
    mysqli_query($db, 'set names utf8');
    $sql = 'SELECT * FROM ex02';
    $result_table = mysqli_query($db, $sql)
    if($result_table){
        $row_num = mysqli_num_rows($result_table);
        for($i=0,$i<$row_num,$i++);
        $row = mysqli_fetch_array($result_table,MYSQLI_ASSOC);
        $no = $row["no"];
        $tel = $row["tel"];
        $apply_field = $row["apply_field"];
        $reason = $row["reason"];

        echo "$no<p>";
        echo "$tel<p>";
        echo "$apply_field<p>";
        echo "$reason<p>";
    }else{
        echo "접수에 실패하였습니다.";
    }
    mysqli_close($db);




?>