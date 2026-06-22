<?php

    session_start();
    header('Content-Type:text/html; charset=utf-8');
    
    if(!isset($_SESSION['user_no'])){
        echo "
        <script>
            alert('로그인이 필요합니다.');
            location.href='../index.html';
        </script>
        ";
        exit;
    }

    $db = mysqli_connect('localhost','monster2026aix','a1s2d3f4!','monster2026aix');
    mysqli_query($db, 'set names utf8');

    $user_no = $_SESSION['user_no'];
    $sql = "SELECT *
            FROM mbca_user
            WHERE no='$user_no'";

    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mypage</title>
    <link rel="stylesheet" href="../css/mypage.css">
</head>
<body>
    <div class="main_wrap">
        <header>
            <h2>프로필 수정 페이지</h2>
            <p>프로필 사진을 등록하고 닉네임을 설정하세요</p>

        </header>
        <form class="profile_form" action="../backend/profile_update.php" method="post" enctype="multipart/form-data">
            <label for="profile_img" class="profile_img_box">
                <img src="../uploads/<?php echo $row['profile_img']; ?>" alt="프로필 이미지">
            </label>
            <input class="profile_img_selecter" type="file" id="profile_img" name="profile_img">
            <input class="nickname_writer" type="text" name="nickname" placeholder="닉네임" value="<?php echo $row['nickname']; ?>">
            <div class="mypage_btn_box">
                <button class="access" type="submit">프로필 등록</button>
                <a class="cancel" href="./board.php">취소</a>    
            </div>
        </form>
    </div>

</body>
</html>