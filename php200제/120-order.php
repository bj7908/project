<?php
    include '108-2-connectDB1.php';

    $sql = "SELECT name FROM myMember ORDER BY name ASC";//오름차순
    $result = $dbConnect->query($sql);

    $dataCount = $result->num_rows;

    for($i = 0 ; $i < $dataCount ; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "이름 : ".$memberInfo['name'];
        echo "<br>";
    }
?>