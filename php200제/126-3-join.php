<?php
    include "108-2-connectDB1.php";

    $sql = "SELECT m.name, r.content, r.regTime FROM myMember m JOIN prodReview r ";
    $sql .= "ON (m.myMemberID = r.myMemberID);";
    echo $sql.'<br>';
    $res = $dbConnect->query($sql);

    if($res){
        $dataCount = $res->num_rows;
        
        for($i=0 ; $i<$dataCount ; $i++){
            $reviewInfo = $res->fetch_array(MYSQLI_ASSOC);
            echo "{$reviewInfo['regTime']} - {$reviewInfo['name']}님, {$reviewInfo['content']}";
            echo "<br>";
        }
    }
?>