<?php
    if(isset($_COOKIE['memberID'])){
        echo "쿠키 memberID의 값은 ".$_COOKIE['memberID'];
    }else{
        echo '쿠키 memberID가 존재하지 않습니다.';
    }
?>