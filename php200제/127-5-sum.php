<?php
    include '108-2-connectDB1.php';

        $sql = "SELECT sum(english) FROM schoolRecord";
        $result = $dbConnect->query($sql); //쿼리 송신
        $score = $result->fetch_array(MYSQLI_ASSOC);
        echo '영어 점수 합계 : '.$score['sum(english)'];
?>