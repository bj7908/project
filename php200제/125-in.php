<?php
    include "108-2-connectDB1.php";

    $sql = "SELECT myMemberID,name FROM myMember ";
    $sql .= "WHERE myMemberID IN (1,2,3)";

    $result = $dbConnect->query($sql);

    if($result){
        $dataCount = $result->num_rows;
        
        for($i = 0 ; $i < $dataCount ; $i++){
            $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
            echo "회원번호 {$memberInfo['myMemberID']}의 이름은 ".$memberInfo['name'];
            echo "<br>";
        }
    }else{
        echo "실패";
    }
?>