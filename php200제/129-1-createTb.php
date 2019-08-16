<?php
    include '108-2-connectDB1.php';

    $dropOutOld = "CREATE TABLE dropOutOld(";
    $dropOutOld .= "dropOutOldID INT UNSIGNED NOT NULL AUTO_INCREMENT,";
    $dropOutOld .= "name VARCHAR(10) NOT NULL,";
    $dropOutOld .= "email VARCHAR(10) NOT NULL,";
    $dropOutOld .= "PRIMARY KEY(dropOutOldID))";
    $dropOutOld .= "CHARSET=utf8";

    $dropOutNew = "CREATE TABLE dropOutNew(";
    $dropOutNew .= "dropOutNewID INT UNSIGNED NOT NULL AUTO_INCREMENT,";
    $dropOutNew .= "name VARCHAR(10) NOT NULL,";
    $dropOutNew .= "email VARCHAR(10) NOT NULL,";
    $dropOutNew .= "PRIMARY KEY(dropOutNewID))";
    $dropOutNew .= "CHARSET=utf8";

    $sqlList = array();

    $sqlList['dropOutOld'] = $dropOutOld;
    $sqlList['dropOutNew'] = $dropOutNew;

    foreach($sqlList as $key=>$sl){
        $result = $dbConnect->query($sl);
        
        if($result){
            echo "{$key} 테이블 생성 완료";
        }else{
            echo "{$key} 테이블 생성 실패";
        }
        echo "<br>";
    }
?>