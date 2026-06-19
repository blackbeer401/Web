<?php
    header('Content-Type:text/html; charset=utf-8');

    $db = mysqli_connect(
        'localhost',
        'monster2026aix',
        'a1s2d3f4!',
        'monster2026aix'
    );

    mysqli_query($db, 'set names utf8');

    $no = $_POST['no'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $old_img = $_POST['old_img'];

    if($_FILES['board_img']['name'] == ''){
        $board_img = $old_img;
    }
    else{
        $board_img = $_FILES['board_img']['name'];
        $tmp_name = $_FILES['board_img']['tmp_name'];

        move_uploaded_file(
            $tmp_name,
            "../uploads/board/".$board_img
        );
    }

    $sql = "UPDATE mbca_board
            SET
                category='$category',
                title='$title',
                content='$content',
                board_img='$board_img'
            WHERE
                no='$no'";

    $result = mysqli_query($db, $sql);

    if($result){
        echo "
            <script>
                alert('수정되었습니다.');
                location.href='../board/view.php?no=$no';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('수정에 실패했습니다.');
                history.back();
            </script>
        ";
    }
?>