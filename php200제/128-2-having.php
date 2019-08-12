<?php
    include '108-2-connectDB1.php';

    $sql = "SELECT class, sum(japanese) FROM schoolRecord GROUP BY class";
    $sql .= " HAVING sum(japanese) >=170";
    $result = $dbConnect->query($sql);
    //echo $sql;
    $dataCount = $result->num_rows;

    for($i=0 ; $i<$dataCount ; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "반 : ".$memberInfo['class'];
        echo "<br>";
        echo "일본어 합산 점수 : ".$memberInfo['sum(japanese)'];
        echo "<hr>";
    }
?>