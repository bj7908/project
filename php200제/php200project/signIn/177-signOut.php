<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/common/171-session.php';
    unset($_SESSION['memberID']);
    unset($_SESSION['nickName']);
    echo "로그아웃 되었습니다.";
    //echo "<a href='/php200project/index.php'>메인으로 이동</a>";
    echo "<a href='../index.php'>메인으로 이동</a>";
?>