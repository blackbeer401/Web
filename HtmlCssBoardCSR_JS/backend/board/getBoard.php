<?php
    header('Content-Type:application/json; charset=utf-8');

    //사용자가 Get 방식으로 요청한 게시글 번호

    $no = $_GET['no'];

    //web_board 테이븡에서 $no 번에 해당하는 한줄 데이터를 뽑아서 json 형식으로 응답.

    $db=mysqli_connect('localhost','monster2026aix','a1s2d3f4!','monster2026aix');
    mysqli_query($db, 'set names utf8');

    //특정 번호의 게시글요청쿼리문 작성

    $sql = "SELECT * FROM web_board WHERE no=$no";
    $result = mysqli_query($db, $sql);

    //결과표에는 해당되는 게시글 1개만 가져오면됨 그러니 반복문 필요 없다.

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); // 연관 배열로 한줄 뽑기
    echo json_encode($row); //json 형식으로 응답
?>