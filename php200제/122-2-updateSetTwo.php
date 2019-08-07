<?php
    include '108-2-connectDB1.php';

    $sql = "UPDATE myMember SET phone='010-1234-5678',";
    $sql .= "userId = 'minhu' WHERE myMemberID = 4;";
    $result = $dbConnect->query($sql);

    if($result){
        echo "변경성공";
        echo "<br>";
        $sql = "SELECT userId,phone FROM myMember WHERE myMemberID = 4";
        $result = $dbConnect->query($sql); //쿼리 송신
        
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "회원번호 4의 휴대폰 번호는 ".$memberInfo['phone'];
        echo "<br>";
        echo "회원번호 4의 변경된 ID는 ".$memberInfo['userId'];
    }else{
        echo "변경실패";
    }
?>