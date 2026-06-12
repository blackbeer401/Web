<?php
    header('Content-Type:text/html;charset=utf-8');

    // 사용자가 AJAX를 이용해서 보내온 이름 비밀번호 를 받기
    $name=$_GET['name'];
    $password=$_GET['pw'];

    // 사용자측에 데이터를 잘 받았다고 응답하기(response)
    echo "이름: $name<br>";
    echo "비밀번호 $password<br>";

?>