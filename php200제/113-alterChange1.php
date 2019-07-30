<?php
    include '108-2-connectDB1.php';
        
    $sql = "ALTER TABLE myMember CHANGE currentAge nationality int";
    $res = $dbConnect->query($sql);

    if($res){
        echo "필드명 변경 완료";
    }else{
        echo "필드명 변경 실패";
    }
?>