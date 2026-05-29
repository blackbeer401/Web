<?php
    header("Content-Type:text/html; charset=utf-8");

    $name = $_POST['name'];
    $tel = $_POST["tel"];
    $apply_field = $_POST['apply_field'];
    $reason = $_POST['reason'];

    $db = mysqli_connect('localhost','monster2026aix','a1s2d3f4!','monster2026aix');
    mysqli_query($db ,'set names utf8');
    $sql = "INSERT INTO ex02(name, tel, apply_field, reason) VALUES('$name', '$tel', '$apply_field','$reason')";
    $result = mysqli_query($db, $sql);
    if ($result){
        echo "예약되었습니다.";
    }
    else{
        echo "에약에 실패하였습니다.";

    }
    mysqli_close($db);


?>