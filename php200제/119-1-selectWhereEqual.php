<?php
    include '108-2-connectDB1.php';

    $sql = "SELECT name,userId FROM myMember WHERE myMemberID = 3";
    $result = $dbConnect->query($sql);
    
    $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    echo "이름 : ".$memberInfo['name'];
    echo "<br>";
    echo "아이디 : ".$memberInfo['userId'];
?>