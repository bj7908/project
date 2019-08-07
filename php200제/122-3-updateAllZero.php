<?php
    include '108-2-connectDB1.php';

    $sql = "UPDATE myMember SET phone=0";
    $result = $dbConnect->query($sql);

    if($result){
        echo "변경성공";
        echo "<br>";
        $sql = "SELECT myMemberID,phone FROM myMember";
        $result = $dbConnect->query($sql); //쿼리 송신
        
        $dataCount = $result->num_rows;
        
        for($i=0 ; $i<$dataCount ; $i++){
            $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
            echo "회원번호 {$memberInfo['myMemberID']}의 ";
            echo "휴대폰번호는 ".$memberInfo['phone'];
            echo "<br>";
        }
    }else{
        echo "변경실패";
    }
?>