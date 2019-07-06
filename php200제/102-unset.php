<?php
    session_start();

    if(isset($_SESSION['userId'])){
        echo 'userId 세션이 존재합니다.';
        
        //세션이 존재하므로 unset() 사용하여 삭제
        unset($_SESSION['userId']);
    }else{
        echo 'userId 세션이 존재하지 않습니다.';
    }

    echo '<br>';
    echo "userId 세션의 값 : {$_SESSION['userId']}";
?>