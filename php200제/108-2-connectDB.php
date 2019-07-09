<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'root';
    $dbName = 'php200Example';
    $dbConnect = new mysqli($host,$user,$pw,$dbName);
    $dbConnect->set_charset('utf8');
    
    if(mysqli_connect_errno()){
        echo "데이터베이스 {$dbName}에 접속 실패";
    }else{
       echo "데이터베이스 {$dbName}접속 성공<br>";
    }
?>