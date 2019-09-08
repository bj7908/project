<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/connection/163-connection.php';
    
    $sql = "CREATE TABLE controlCSS (";
    $sql .= "controlCSSID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "selectorName enum";
    $sql .= "('wrap','header','leftArea','rightArea','footer')";
    $sql .= "NOT NULL,";
    $sql .= "floata enum('left','right','none','unset') DEFAULT NULL,";
    $sql .= "width int(11) DEFAULT NULL,";
    $sql .= "height int(11) DEFAULT NULL,";
    $sql .= "background varchar(10) DEFAULT NULL,";
    $sql .= "marginTop int(11) DEFAULT NULL,";
    $sql .= "marginRight int(11) DEFAULT NULL,";
    $sql .= "marginBottom int(11) DEFAULT NULL,";
    $sql .= "marginLeft int(11) DEFAULT NULL,";
    $sql .= "PRIMARY KEY (controlCSSID)";
    $sql .= ")CHARSET=utf8";

    $res = $dbConnect->query($sql);

    if($res){
        echo "테이블 생성 완료";
    }else{
        echo "테이블 생성 실패";
    }
?>