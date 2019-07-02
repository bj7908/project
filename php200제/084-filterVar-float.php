<?php
    $float = 192.12;
    $floatCheck = filter_Var($float, FILTER_VALIDATE_FLOAT);

    if($floatCheck){
        echo "{$float}는 실수입니다.";
    }else{
        echo "{$float}는 실수가 아닙니다.";
    }

?>