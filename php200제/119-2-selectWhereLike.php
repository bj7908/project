<?php
    include '108-2-connectDB1.php';

    $sql = "SELECT name, userId FROM myMember WHERE userId LIKE 'm%'";
    $result = $dbConnect->query($sql);

    $dataCount = $result->num_rows;

    for($i = 0 ; $i < $dataCount ; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "이름 : ".$memberInfo['name'];
        echo "<br>";
        echo "아이디 : ".$memberInfo['userId'];
        echo "<hr>";
    }
?>