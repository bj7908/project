<?php
    //http://aptenergy.co.kr/php200/
    $host = '211.57.200.247';
    $user = 'root';
    $pw = 'tofather0901!';
    //$database = 'php200';
	//$port = '3306';
    $dbConnect = new mysqli($host, $user, $pw);
    $dbConnect->set_charset('utf8');

    if(mysqli_connect_errno()){
        echo "데이터베이스 접속 실패";
        echo mysqli_connect_error();
    }else{
        echo "접속 성공";
    }
?>