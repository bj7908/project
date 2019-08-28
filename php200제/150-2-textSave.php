<?php
    include "108-2-connectDB1.php";

    //$text=$_POST['text'];   //오류발생(text에 '가 들어가서 오류가 생김)
    $text=addslashes($_POST['text']);

    $sql = "INSERT INTO prodReview(myMemberID, content, regTime) ";
    $sql .= "VALUES(1,'{$text}',NOW())";

    echo $sql;
    echo '<br>';

    $res = $dbConnect->query($sql);

    if($res){
        echo "입력성공";
    }else{
        echo "입력실패";
    }