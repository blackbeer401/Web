<?php
    // 백엔드 코드를 화면 html 코드와 함께 작성하는것도 가능하다.

    // 데이터 베이스의 web_bord 테이블의 게시글 리스트를 읽어와서 아래 html에표기 할 수 있다.

    //MYSQL DBMS과 연결하여 데이터들을 가져오기
    header('Content-Type:text/html; charset=utf-8');
    $db = mysqli_connect('localhost','monster2026aix','a1s2d3f4!','monster2026aix');//DB주소, DB접속아이디 DB접속비번 DB명
    mysqli_query($db, 'set names utf8'); // 한글깨짐 방지
    //원하는 query 문 수행 sql언어  - web_board 테이블의 모든 데이터를 번호기준 내림차순으로 가져오기[최신글 순]
    $sql= "SELECT * FROM web_board ORDER BY no DESC";
    $result= mysqli_query($db, $sql);
    //db에서 요청한 결과표 $result 로 부터 게시글들을 한줄씩 가져와서 변수$board_list 라는 이름의 배열에 추가하기.
    $board_list = []; // 빈 배열 준비
    // DB에서 데이터를 가져오는 것은 한번에 한줄씩 가져와야 한다.그래서 반복처리
    $row_num=mysqli_num_rows($result);
    for ($i=0; $i<$row_num; $i++){
        $row=  mysqli_fetch_array($result, MYSQLI_ASSOC); //연관배열로 한줄뽑기
        $board_list[$i]= $row;
    }

    //mysql과 연결 종료하기.

    mysqli_close($db);

    
    //총게시글수 알아내기.
    $board_size=count($board_list);// 파이썬의 length와 비슷함

    
    //csr 구조에서는 php의 역할을 .. 이게시글 데이터들만 사용자에게 응답.
    //echo $board_list;
    // echo json_encode($board_list); // 대량의 데이터를 json 형식으로 응답
?>

<!-- php는 결국 사용자가 보는 페이지를 echo 하기에 html 태그문을 그냥 쓰면 자동 echo 해준다. -->



<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자유계시판</title>
    
    <!-- 외부 스타일 연결 -->
    <link rel="stylesheet" href="./css/index.css">

</head>
<body>
    <!-- 콘텐츠가 표시되는 영역 만들기 -->
    <div class="board_wrap">
        <!-- 1. 계시판 제목 영역 -->
        <div class="board_title">
            <h2>자유 게시판</h2>
            <p>자유롭게 게시글을 작성하며 이야기를 나누세요. [ <?php echo "총 게시글 수 :$board_size"; ?> ]</p>
        </div>
        
        <!-- 2. 계시판 테이블이 그려질 영역(테이블, 페이지네이션, 등록버튼) -->
        <div class="board_list_wrap">
            <!-- 2.1 테이블 영역 -->
            <table class="board_list">
                <!-- 1) 컬룸의 제목줄 -->
                 <tr class="colum_title">
                    <th class="col_no">번호</th>
                    <th class="col_title">제목</th>
                    <th class="col_writer">글쓴이</th>
                    <th class="col_date">작성일</th>
                    <th class="col_hits">조회수</th>
                 </tr>


                <!-- 2) 계시글 데이터들 표시영역(php나 JS반복문으로구현할 예정) 우선은 디자인 목적으로 가짜 데이터 구성 -->
            <?php 
                for($i=0; $i<$board_size; $i++){
                    $board = $board_list[$i];//게시글 한줄씩 뽑아오기
                    //게시글 한줄 안에 7개의 칸이 존재
                    $no = $board['no'];
                    $title = $board['title'];
                    $message = $board['msg'];
                    $writer = $board['writer'];
                    $date = $board['date'];
                    $hits = $board['hits'];
                    $password = $board['password'];

                    //게시판 리스트 ui테이블의 한줄로 태그로 만들어 표시하기]

                    echo ("
                    <tr>
                        <td class='col_num'>$no</td>
                        <td class='col_title'><a href='./board/view.html?no=1'>$title</a></td>
                        <td class='col_writer'>$writer</td>
                        <td class='col_date'>$date</td>
                        <td class='col_hits'>$hits</td>
                    </tr>
                    ");
                }
            ?>

            </table>

            <!-- 2.2 페이지네이션 영역(원래는 php나 JS로 동적 구성해야한다.) -->
            <div class="board_pagenation">
                <a href="" class="btn">&lt;&lt;</a>
                <a href="" class="btn">&lt;</a>
                <a href="" class="btn selected">1</a> <!-- 클래스명이 2개 인것 btn 과 selected 2개 나중에 자바스크립트로 선택 병경할때 이 클래스명을 다른 버튼으로 이동  -->
                <a href="" class="btn">2</a>
                <a href="" class="btn">3</a>
                <a href="" class="btn">4</a>
                <a href="" class="btn">5</a>
                <a href="" class="btn">&gt;</a>
                <a href="" class="btn">&gt;&gt;</a>
                

            </div>



            <!-- 2.3 버튼 영역  -->
            <div class="btn_wrap">
                <a href="./board/write.php">등록</a>

            </div>


        </div>

    </div>



    
</body>
</html>