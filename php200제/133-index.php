<?php
    include "108-2-connectDB1.php";

    $sql = "ALTER TABLE myMember ADD INDEX(name);";

    $result = $dbConnect->query($sql);

    if($result){
        echo "적용 완료";
    }else{
        echo "적용 실패";
    }
?>