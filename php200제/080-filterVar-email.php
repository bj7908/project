<?php
    function checkEmail($email){
        $emailCheck = filter_Var($email, FILTER_VALIDATE_EMAIL);
        
        $returnInfo = false;
        if($emailCheck){
            $returnInfo = true;
        }
        
        return $returnInfo;
    }

    $email = "mybookforweb@gmail.com";

    if(checkEmail($email)){
        echo "{$email}는 올바른 이메일 주소 입니다.";
    }else{
        echo "{$email}는 잘못된 이메일 주소 입니다.";
    }
?>