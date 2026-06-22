<?php

    session_start();

    header('Content-Type:text/html; charset=utf-8');
    
    if(!isset($_SESSION['user_no'])){
        echo "
            <script>
            alert('로그인이 필요합니다.');
            location.href='../index.html';
                </script>";
            exit;
            }    

    $db = mysqli_connect('localhost','monster2026aix','a1s2d3f4!','monster2026aix');
    mysqli_query($db, 'set names utf8');

    $sql = "SELECT *
            FROM mbca_board
            ORDER BY no DESC";

    $result = mysqli_query($db, $sql);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBCA 학습 문의 게시판</title>
    <link rel="stylesheet" href="../css/board.css">
</head>
<body>

    <div class="main_wrap">

        <header class="main_header">
            <h1>MBCA 학습 문의 게시판</h1>

            <nav class="main_nav">
                <span><?php echo $_SESSION['user_id'].'님 환영합니다'; ?></span>
                <a href="./mypage.html">MY</a>
                <a href="../backend/logout.php">로그아웃</a>
            </nav>
        </header>

        <section class="intro_box">
            <h2>학습 중 막힌 부분을 질문해보세요.</h2>
            <p>HTML, CSS, JavaScript, PHP, DB, Git 관련 질문을 공유할 수 있습니다.</p>
            <a href="./write.php" class="write_btn">글쓰기</a>
        </section>

        <section class="category_box">
            <button>전체</button>
            <button>HTML/CSS</button>
            <button>JavaScript</button>
            <button>PHP</button>
            <button>DB</button>
            <button>Git</button>
            <button>기타</button>
        </section>

        <section class="search_box">
            <select>
                <option>제목</option>
                <option>작성자</option>
                <option>카테고리</option>
            </select>

            <input type="text" placeholder="검색어를 입력하세요">

            <button>검색</button>
        </section>

        <section class="board_area">
            <h2>등록된 질문</h2>

           <ul class="board_list">
             <?php while($row = mysqli_fetch_array($result)){ ?>
                    <li> 
                        <a href="./view.php?no=<?php echo $row['no']; ?>">
                            <span class="no">No.<?php echo $row['no']; ?></span>
                            <span class="category"><?php echo $row['category']; ?></span>
                            <strong><?php echo $row['title']; ?></strong>
                            <span class="status waiting"><?php echo $row['status']; ?></span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </section>

    </div>

</body>
</html>