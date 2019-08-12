<?php
    include '108-2-connectDB1.php';

    $sql = "UPDATE schoolRecord SET class = 1 WHERE schoolRecordID = 1";
    $dbConnect->query($sql);

    $sql = "SELECT class, avg(english) AS avgEng FROM schoolRecord GROUP BY class";
    $result = $dbConnect->query($sql);
    //echo $sql;
    $dataCount = $result->num_rows;

    for($i=0 ; $i<$dataCount ; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "반 : ".$memberInfo['class'];
        echo "<br>";
        echo "평균 영어 점수 : ".$memberInfo['avgEng'];
        echo "<hr>";
    }
?>