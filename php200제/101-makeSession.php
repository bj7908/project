<?php
    session_start();

    //세션 생성
    $_SESSION['userId'] = 'everdevel';

    if(isset($_SESSION['userId'])){
        echo "세션 생성 완료 세선 userld의 값 : {$_SESSION['userId']}";
    }else{
        echo "세션 생성 실패";
    }
?>