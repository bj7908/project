<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/connection/163-connection.php';

    $sql = "CREATE TABLE board (";
    $sql .= "boardID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "memberID int(10) unsigned NOT NULL, ";
    $sql .= "title varchar(50) NOT NULL, ";
    $sql .= "content longtext NOT NULL, ";
    $sql .= "regTime int(10) unsigned NOT NULL, ";
    $sql .= "PRIMARY KEY (boardID)";
    $sql .= ") CHARSET=utf8";

    $res = $dbConnect->query($sql);

    if($res){
        echo "테이블 생성 완료";
    }else{
        echo "테이블 생성 실패";
    }
?>