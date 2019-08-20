<?php
    include '108-2-connectDB1.php';
    
    $sql = "(SELECT name,email FROM dropOutOld)";
    $sql .= " UNION "; //UNION의 앞뒤에 공백이 있습니다.
    $sql .= "(SELECT name,email FROM dropOutNew)";

    $result = $dbConnect->query($sql); //쿼리 전송

    $dataCount = $result->num_rows;

    for($i = 0 ; $i<$dataCount ; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "이름 : ".$memberInfo['name'];
        echo "<br>";
        echo "이메일 : ".$memberInfo['email'];
        echo "<hr>";
    }
?>