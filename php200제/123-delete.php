<?php
    include '108-2-connectDB1.php';

    $sql = "DELETE FROM myMember WHERE myMemberId = 4";
    $result = $dbConnect->query($sql);

    if($result){
        echo "삭제 성공";
        echo "<br>";
        $sql = "SELECT myMemberID,phone FROM myMember";
        $result = $dbConnect->query($sql); //쿼리 송신
        
        $dataCount = $result->num_rows;
        
        echo "현재의 회원 <br>";
        for($i = 0 ; $i<$dataCount ; $i++){
            $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
            echo "회원번호 {$memberInfo['myMemberID']}";
            echo "<br>";
        }
    }else{
        echo "변경 실패";
    }
?>