<?php
    include "108-2-connectDB1.php";

    $sql = "CREATE TABLE schoolRecord (";
    $sql .= "schoolRecordID int(10) unsigned AUTO_INCREMENT ";
    $sql .= "COMMENT '학생 번호',";
    $sql .= "myMemberID int unsigned NOT NULL COMMENT '회원번호',";
    $sql .= "class tinyint unsigned COMMENT '소속 클래스(반)',";
    $sql .= "english tinyint unsigned NOT NULL COMMENT '영어 점수',";
    $sql .= "math tinyint unsigned NOT NULL COMMENT '수학 점수',";
    $sql .= "science tinyint unsigned NOT NULL COMMENT '과학 점수',";
    $sql .= "japanese tinyint unsigned NOT NULL COMMENT '일본어 점수',";
    $sql .= "coding tinyint unsigned NOT NULL COMMENT '코딩 점수',";
    $sql .= "PRIMARY KEY (schoolRecordID)";
    $sql .= ") CHARSET=utf8 COMMENT='성적 정보';";
    echo $sql."<br>";
    $result = $dbConnect->query($sql);

    if($result){
        echo "테이블 생성 완료";
    }else{
        echo "테이블 생성 실패";
    }
?>