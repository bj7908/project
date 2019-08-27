<?php
    include "108-2-connectDB1.php";

    $uId = $_POST['userId'];
    $uName = $_POST['userName'];
    $uPw = $_POST['userPw'];
    $uPhone = $_POST['userPhone'];
    $uEmail = $_POST['userEmail'];
    $uBirthDay = $_POST['birthYear'].'-'.$_POST['birthMonth'].'-'.$_POST['birthDay'];
    $uGender = $_POST['userGender'];

    $sql = "INSERT INTO myMember (userId, name, password, phone, email, birthDay, gender, regTime) ";
    $sql .= "VALUES ('{$uId}','{$uName}','{$uPw}','{$uPhone}','{$uEmail}','{$uBirthDay}','{$uGender}',NOW())";

    $result = $dbConnect->query($sql);

    if(result){
        $sql = "SELECT userId, name FROM myMember";
        $result = $dbConnect->query($sql);
        
        $dataCount = $result->num_rows;
        
        for($i = 0; $i<$dataCount ; $i++){
            $memberinfo = $result->fetch_array(MYSQLI_ASSOC);
            echo "아이디 : ".$memberinfo['userId'];
            echo "<br>";
            echo "이름 : ".$memberinfo['name'];
            echo "<hr>";
        }
    }else{
        echo "입력 실패";
    }
?>