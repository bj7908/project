<?php
    include '108-2-connectDB1.php';

    $sql="TRUNCATE myMember";
    $res= $dbConnect->query($sql);

    if($res){
        echo "초기화 성공";
    }else{
        echo "초기화 실패";
    }