<?php
    $str = "everdevel, tomodevel, startwebcodng";
    echo ucwords($str);

    echo '<br>';

    $str = 'one sugar dream';
    $str = ucwords($str);
    echo $str;

    echo '<br><br>';

    //저번에 한 ucfirst() 함수랑 비교
    $str = "everdevel, tomodevel, startwebcodng";
    echo ucfirst($str);
    
    echo '<br>';

    $str = 'one sugar dream';
    $str = ucfirst($str);
    echo $str;


    //차이점: ucwords는 단어의 첫글자가 소문자면 모두 대문자로 만들어주고 ucfirst는 문자열의 첫글자만 대문자로 만들어줌.
?>