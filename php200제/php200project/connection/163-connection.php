<?php
    $host = '211.57.200.247';
    $user = 'root';
    $pw = "tofather0901!";
    $dbName = 'php200project';
	//$port = '3306';
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect->set_charset('utf8');

    if(mysqli_connect_errno()){
        echo "데이터베이스 접속 실패";
    }
?>