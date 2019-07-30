<?php
    $host = '211.57.200.247';
    $user = 'root';
    $pw = "tofather0901!";
    $dbName = 'php200';
	//$port = '3306';
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect->set_charset('utf8');

    if(mysqli_connect_errno()){
        echo "데이터베이스 {$dbName}에 접속 실패";
        echo mysqli_connect_error();
    }else{
        
    }
?>