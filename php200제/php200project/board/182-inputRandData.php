<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/common/171-session.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/common/179-checkSignSession.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/connection/163-connection.php';

    for($i = 1 ; $i <= 165 ; $i++){
        $time = time();
        $sql = "INSERT INTO board (memberID, title, content, regTime) ";
        $sql .= "VALUES (1,'{$i}번째 제목', '{$i}번째 내용',{$time})";
        $result = $dbConnect->query($sql);
        if($result){
            echo "{$i}번째 데이터 입력완료<br>";
        }else{
            echo "{$i}번째 데이터 입력실패";
        }
    }
?>