<?php
    header('Content-Type:text/html; charset=utf-8');

    $db = mysqli_connect('localhost','monster2026aix','a1s2d3f4!','monster2026aix');

    mysqli_query($db, 'set names utf8');

    $no = $_GET['no'];

    $sql = "DELETE FROM mbca_board
            WHERE no='$no'";

    $result = mysqli_query($db, $sql);

    if($result){
        echo "
            <script>
                alert('삭제되었습니다.');
                location.href='../board/board.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('삭제 실패');
                history.back();
            </script>
        ";
    }
?>