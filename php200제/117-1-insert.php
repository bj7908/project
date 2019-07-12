<?php
    include $_SERVER['DOCUMENT_ROOT'].'/108-2-cconnectDB.php';

    $sql = "INSERT INTO myMember(";
    $sql .= "userId, name, password,";
    $sql .= "phone, email, birthDay, gender, regTime)";
    $sql .= "VALUES('everdebelHost', '김태영', 'mm281118',";
    $sql .= "'010-1234-5678', 'everdevel@everdevel.com',";
    $sql .= "'1986-04-04', 'm', now());";

    $res = $dbConnect->query($sql);

    if($res){
        echo "데이터 입력 완료";
    }else{
        echo "데이터 입력 실패";
    }
?>