<?php
    include "108-2-connectDB1.php";

    $email = $_POST['email'];

    $emailValidateCheck = filter_Var($email, FILTER_VALIDATE_EMAIL);

    if($emailValidateCheck){
        $sql = "SELECT email FROM myMember WHERE email = '{$email}'";
        $result = $dbConnect->query($sql);
        
        $dataCount = $result->num_rows;
        
        $emailCheck = 'none';
        if($dataCount > 0){
            $emailCheck = 'exists';
        }
        
        echo json_encode(
            array(
                'result' => $emailCheck,
            )
        );
    }else{
        echo json_encode(
            array(
                'result' => 'notEmail',
            )
        );
    }
?>