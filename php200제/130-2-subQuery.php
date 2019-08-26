<?php
    include "108-2-connectDB1.php";

    $sql = "SELECT *, (SELECT avg(English) FROM schoolRecord) as englishAVG ";
    $sql .= "FROM schoolRecord;";

    $result = $dbConnect->query($sql); //쿼리송신

    $dataCount = $result->num_rows;

    for($i=0 ; $i < $dataCount ; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "학생번호 : ".$memberInfo['myMemberID'];
        echo "<br>";
        echo " 클래스 : ".$memberInfo['class'];
        echo "<br>";
        echo "영어 : ".$memberInfo['english'];
        echo "<br>";
        echo "영어 평균 점수 : ".$memberInfo['englishAVG'];
        echo "<hr>";
    }
?>