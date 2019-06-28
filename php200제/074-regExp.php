<?php
    //패턴 대입
    $pattern = '/^[가-힣]{3,}$/';

    $str = '웹코딩시작하기';

    if(preg_match($pattern, $str, $matches)){
        echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }else{
        echo "이름에 특수문자, 영문 또는 숫자가 있는지 확인 요망";
    }
?>