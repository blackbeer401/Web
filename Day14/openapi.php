<?php
    header("Content-Type:application/json; charset=utf-8");

    //영화진흥위원회의 OPEN API를 대신 요청하여 오늘의 박스 오피스 사용정보를 사용자에게 응답

    // php 언어에서 다른서버에 데이터를 요청하는 문법: CURL 이라 한다.
    
    //curl 라이브러리를 시작하기
    $ch= curl_init();

    //curl로 수행할 작업을 옵션으로 서정

    $url = "https://kobis.or.kr/kobisopenapi/webservice/rest/boxoffice/searchDailyBoxOfficeList.json?key=494179480f84ebba867a5d0a4246c609&targetDt=20260611";

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //요청 결과를 받겟다고 설정

    // 설정 되었으니 curl 작업을 실행하면됨

    $result = curl_exec($ch); //응답받은 결과를 리턴해줌 

    // 결과가 있는지 확인한 후 사용자에게 응답해주기

    if ($result){
    echo $result;

    }else{
    echo "실패!!" . curl_error($ch);
    }


?>