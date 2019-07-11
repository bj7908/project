<?php
    include $_SERVER['DOCUMENT_ROOT'].'/108-2-cconnectDB.php';

    $sql = "DROP TABLE test";
    
    $res = $dbConnect->query($sql);

    if($res){
        echo "테이블 삭제 완료";
    }else{
        echo "테디블 삭제 실패";
    }
?>