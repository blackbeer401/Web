<?php
    header("Content-Type:text/html; charset=utf-8");
    // 사용자가 get 방식으로 보낸 데이터를 받아보기
    $name = $_GET["name"];
    $message = $_GET["message"];

    // $name 과 $message 변수에 있는 데이터를 database 에 저장하기
    // Database 는 excel 과 같은 구조를 가진 프로그램 
    // 그래서 데이터를 저장하려면 구조를 가진 표(table)을 만들어야 함 .
    // 닷홈 이라는 호스팅 업체는 이미 Database 가 설치되어 있음.
    // 미리 표를 만들어 놓고 데이터만 삽입하는것이 가능하다.
    // 데이터를 삽입하는 작업은 SQL 이라는 데이터베이스 전용 언어를 사용한다.

    // MY SQL DBMS에 접속하여 memo 테이블에 이름$name 메세지$message 데이터를 삽입하기
    // 1.MY SQL에 접속하기
    $db = mysqli_connect('localhost','monster2026aix','a1s2d3f4!','monster2026aix'); //DB서버 URL, DB 접속아이디, DB접속비밀번호, DB의이름(DB명)

    // 2. DB안에서 한글이 꺠지지 않도록 요청하기.
    mysqli_query($db,'set names utf8');


    // 3.원하는 CRUD 작업을 요청하는 질의어 만들고 요청
    $sql="INSERT INTO memo(name,message) VALUES('$name','$message')";
    $result =mysqli_query($db,$sql); //쿼리문이 성공하면 true 실패하면 fales를 리텅
    if($result){
        echo "메모글저장이 완료되었습니다";
    }else{
        echo "메모글저장에 실패하였습니다. 다시 시도해 주세요.";
    }
    
    


    // 4.연결 종료하기
    mysqli_close($db);


?>
