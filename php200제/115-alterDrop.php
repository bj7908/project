<?php
    //테이블 필드 삭제하기
    include $_SERVER['DOCUMENT_ROOT'].'/108-2-cconnectDB.php';

    $sql = "ALTER TABLE myMember DROP nationality";
    $res = $dbConnect->query($sql);

    if($res){
        echo "필드 삭제 완료";
    }else{
        echo "필드 삭제 실패";
    }
?>