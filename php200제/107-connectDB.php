<?php
    $host = "localhost";
    $user = 'root';
    $pw = 'root';
    $dbConnect = new mysqli($host,$user,$pw);
    $dbConnect->set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "데이터베이스 접속 실패";
        echo mysql_connect_error();
    }else{
        echo "접속 성공";
    }
/*$dbconnect = new mysqli('localhost','root','root');
$dbconnect->set_charset("utf8");


if(mysqli_connect_errno()){
    echo "no DB connect";
    echo mysql_connect_error();
}else{
    echo "DB GO";
}*/
?>


