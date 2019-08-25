<?php
    include "108-2-connectDB1.php";

    $sql = "ALTER TABLE myMember modify email varchar(30) ";
    $sql .= "NOT NULL UNIQUE COMMENT '고객의 이메일 주소'";
    $result = $dbConnect->query($sql);

    if($result){
        echo "변경완료";
    }else{
        echo "변경실패";
    }
?>