<?php
    // 응답할 데이터의 형식을 미리 알려줘야 한다.
    header('Content-Type:text/html; charset=utf-8');

    // 사용자가 get 방식으로 보낸 데이터를처리해보기
    // php라는 언어는 get 방식으로 보내온 데이터들을 $_GET 이름을 가진 배열에 자동으로 넣어준다.
    // php언어에서 변수를 만들거나 사용할 때는 반드시$와 함께 사용한다.

    // $a = 10;
    // $b = 20;
    // $c = $a + $b ;

    // echo $c ;
    // echo "$a 를 출력합니다. "
    // echo쓸때에는 웬만하면 ""를써라  ''는 변수를 인지하지못한다.

    $title = $_GET["title"];
    $message = $_GET["msg"];


    // 사용자가 보는 브라우저에 글씨 출력하기 (응답하기 response)
    echo "<h2> this is php server</h2>" ;
    echo "<p>한글도 잘됩니다</p>" ;
    // 사용자가 보내온 데이터를 잘 받았는지 응답해보기(브라우저에 출력)
    echo "$title <br> ";
    echo "$message";




?>