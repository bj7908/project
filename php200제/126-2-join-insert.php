<?php
    include '108-2-connectDB1.php';

    $reviewList = array();
    $reviewList[0] = [1, '초보자에게 좋아요.'];
    $reviewList[1] = [2, '정말 초보자에게는 좋은 책이지만 깊은감은 조금 아쉽습니다.'];
    $reviewList[2] = [3, '좋습니다'];
    $reviewList[3] = [4, '웹 개발을 처음하는 사람에게 있어 참 친절한 입문서입니다.'];

    $cnt = 0;

    foreach($reviewList as $rl){
        $sql = "INSERT INTO prodReview(myMemberID, content, regTime)";
        $sql .= "VALUES('{$rl[0]}','{$rl[1]}',NOW())";
        
        $result = $dbConnect->query($sql);
        $cnt++;
        
        if($result){
            echo $cnt."데이터 입력 성공<br>";
        }else{
            echo $cnt."데이터 입력 실패<br>";
        }
    }
?>