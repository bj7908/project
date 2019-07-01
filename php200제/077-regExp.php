<?php
    //패턴대입
    $pattern = '/^[0-9]+$/';

    $str = '123456';

    if (preg_match($pattern, $str, $matches)){
        echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다.";
        echo "<pre>";
        echo var_dump($matches);
        echo "</pre>";
    }else{
        echo "값에 숫 외의 문자가 있는지 확인 요망";
    }
?>