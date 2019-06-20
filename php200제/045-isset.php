<?php
    //변수의 존재 확인하기

    if(isset($str)){
        echo "변수 str이 존재합니다.";
    }else{
        echo "변수 str이 존재하지 않습니다.";
    }

    echo '<br>';

    $str = "string";

    if(isset($str)){
        echo "변수 str이 존재합니다.";
    }else{
        echo "변수 str이 존재하지 않습니다.";
    }
?>