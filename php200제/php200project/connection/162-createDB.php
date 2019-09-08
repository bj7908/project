<?php
    $host = '211.57.200.247';
    $user = 'root';
    $pw = "tofather0901!";
    //$dbName = 'php200';
	//$port = '3306';
    $dbConnect = new mysqli($host, $user, $pw/*, $dbName*/);
    $dbConnect->set_charset('utf8');
    
    //$host = "localhost";
    //$user = "root";
    //$pw = "root";

    //$dbConnect = new mysqli($host, $user, $pw);

    if(mysqli_connect_errno()){
        echo '데이터베이스 접속 실패';
    }else{
        $sql = "CREATE DATABASE php200project";
        $res = $dbConnect->query($sql);
        
        if($res){
            echo "데이터베이스 생성 완료";
        }else{
            echo "데이터베이스 생성 실패";
        }
    }
?>