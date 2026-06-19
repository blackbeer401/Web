<?php

    session_start();

    header('Content-Type:text/html; charset=utf-8');

    $db = mysqli_connect('localhost','monster2026aix','a1s2d3f4!','monster2026aix');
    mysqli_query($db, 'set names utf8');

    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];

    $sql = "SELECT * FROM mbca_user WHERE user_id='$user_id' AND user_pw = '$user_pw' "; 

    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);


    if($count > 0){

    $row = mysqli_fetch_array($result);

    $_SESSION['user_no'] = $row['user_no'];
    $_SESSION['user_id'] = $row['user_id'];

    header("Location:../board/board.php");
    
    }else{
        echo "<script>
                alert('아이디 또는 비밀번호가 틀렸습니다.');
                history.back();
              </script>";
    }



?>