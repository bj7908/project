<?php
    include "108-2-connectDB1.php";

    $sql = "SELECT * FROM schoolRecord WHERE english = ";
    $sql .= "(SELECT max(english) FROM schoolRecord)";

    $result = $dbConnect->query($sql);

    $dataCount = $result->num_rows;

    for($i = 0 ; $i < $dataCount ; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "학생번호 : ".$memberInfo['myMemberID'];
        echo "<br>";
        echo "클래스 : ".$memberInfo['class'];
        echo "<br>";
        echo "영어 : ".$memberInfo['english'];
        echo "<hr>";
    }
?>