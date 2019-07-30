<?php
    include '108-2-connectDB1.php';

    $sql = "INSERT INTO myMember(";
    $sql .= "userId, name, password,";
    $sql .= "phone, email, birthDay, gender, regTime) VALUES ";
    
    $member = array();
    
    $member[0] = "('miu', '김민우', 'miupw', '010-1234-5678',";
    $member[0] .= "'miu@everdevel.com', '2007-09-02', 'w', NOW())";
    
    $member[1] = "('yuna', '김유나', 'yunapw', '010-1234-5678',";
    $member[1] .= "'yuna@everdevel.com', '2011-12-05', 'w', NOW())";
    
    $member[2] = "('minhoo', '김민후', 'minhoopw', '010-1234-5678',";
    $member[2] .= "'minhoo@everdevel.com', '2012-12-05', 'm', NOW())";
    
    $member[3] = "('heayun', '김해윤', 'heayunpw', '010-1234-5678',";
    $member[3] .= "'heayun@everdevel.com', '2013-12-05', 'w', NOW())";

    foreach($member as $m){
        $query = $sql.$m;
        
        $res = $dbConnect->query($query);
        
        if($res){
            echo "데이터 입력 성공<br>";
        }else{
            echo "데이터 입력 실패<br>";
        }
    }
?>