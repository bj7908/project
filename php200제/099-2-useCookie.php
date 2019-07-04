<?php
    if(isset($_COOKIE['check'])){
        echo "쿠키 check의 값은 ".$_COOKIE['check'];
    }else{
        echo "쿠키 check는 존재하지 않습니다.";
    }
?>