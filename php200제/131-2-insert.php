<?php  
    include "108-2-connectDB1.php";

    $sql = "INSERT INTO myMember(userId, name, password, ";
    $sql .= "phone, email, birthDay, gender,regTime) ";
    $sql .= "VALUES('pepper', '페퍼', 'vpvjeptm', '010-1234-5678', ";
//    $sql .= "'miu@everdevel.com', '2015-11-18', 'm', now());";
    $sql .= "'everdevel@icloud.com', '2015-11-18', 'm', now());";

    $result = $dbConnect->query($sql);

    if($result){
        echo "입력완료";
    }else{
        echo "입력실패";
    }
?>