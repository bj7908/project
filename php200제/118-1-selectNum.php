<?php
    include '108-2-connectDB1.php';

    $sql = "SELECT name, userId FROM myMember";
    $result = $dbConnect->query($sql);

    $dataCount = $result->num_rows;

    for($i = 0 ; $i < $dataCount ; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_NUM);
        echo "이름 : ".$memberInfo[0];
        echo "<br>";
        echo "아이디 : ".$memberInfo[1];
        echo "<hr>";
    }
?>