<?php
    include '108-2-connectDB1.php';

    function schoolRecord(){
        global $dbConnect;
        $sql = "SELECT count(class) FROM schoolRecord";
        $result = $dbConnect->query($sql); //쿼리 송신
        $reviewInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "class 필드를 기준으로 한 레코드 수 : ";
        echo $reviewInfo['count(class)'];
        echo '<br>';
    }

    schoolRecord();

    //schoolRecordID가 1인 레코드의 class 필드 값을 NULL로 변경
    $sql = "UPDATE schoolRecord SET class=NULL WHERE schoolRecordID = 1";
    $dbConnect->query($sql);

    schoolRecord();
?>