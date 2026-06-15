<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수정페이지</title>
    <!-- 외부 스타일시트 연결 -->
    <link rel="stylesheet" href="../css/write.css">

</head>
<body>
    <!-- 콘텐츠 표시영역 -->
    <div class="board_wrap">
        <!-- 1.제목영역 -->
        <div class="board_title">
            <h2>자유 게시판 - 게시글 수정</h2>
            <p> 자유롭게 게시글을 작성하며 이야기를 나누세요</p>

        </div>


        <!-- 2.게시글 작성 영역(글작성. 버튼) -->
        <div class="board_write_wrap">
            <!-- 작성한 글을 서버에 전송해야 하기에form 요소 사용 -->
            <form action="../backend/board/updateBoard.php" method="post">
                <!-- 2.1 게시글 작성 영역 -->
                <div class="board_wirte">
                    <!-- 2.1.1 제목 작성 영역 JS 또는 php로 데이터를불러와서 적용해야하는곳 이지만 지금은 연습중이기에 가짜데이터 입력 -->
                    <div class="title">
                        <div class="col_label">제목</div>
                        <div class="col_input"><input type="text" placeholder="제목입력" value="글 제목 #1"></div>

                    </div>
                    <!-- 2.1.2 글쓴이/비밀번호 입력 -->
                    <div class="info">
                        <div class="writer">
                            <div class="col_label">글쓴이</div>
                            <div class="col_input"><input type="text" placeholder="글쓴이 입력" value="sam"></div>
                        </div>
                        <div class="password">
                            <div class="col_label">비밀번호</div>
                            <div class="col_input"><input type="password" placeholder="비밀번호 입력" value="1111"></div>
                        </div>
                    </div>
                    <!-- 글 내용 입력 영역 이부분 또한 JS 또는 php 로 적용해야함-->
                     <div class="content">
                        <textarea name="msg" placeholder="내용을 입력하세요"> 써 있던 글씨 내용들 </textarea>

                     </div>

                </div>
                <!-- 2.2 저장/취소 버튼 영역 -->
                <div class="btn_wrap">
                    <input type="submit" value="수정완료">
                    <input type="button" value="취소" onclick="history.back()">
                </div>

            </form>


        </div>


    </div>



</body>
</html>