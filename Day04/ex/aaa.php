<?php
    header("Content-Type:text/html; charset=utf-8");
    $name = $_GET["user_name"];
    $email = $_GET["user_email"];
    $tel = $_GET['user_tel'];

    $db = mysqli_connect('localhost','monster2026aix','a1s2d3f4!','monster2026aix');
    mysqli_query($db, 'set names utf8');
    $sql = "INSERT INTO ex01(name, tel, email) VALUES('$name','$tel','$email')";
    $result = mysqli_query($db, $sql);
    if($result) {
        echo " 예약되었습니다.";
    }else{
        echo "예약이 실패하였습니다.";
    }
    mysqli_close($db);

?>