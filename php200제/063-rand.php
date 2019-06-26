<?php
    $randNum = rand(1,3);
    $kawibawibo = '';

    switch($randNum){
        case 1 :
            $kawibawibo = '가위';
            break;
        case 2 :
            $kawibawibo = '바위';
            break;
        case 3 :
            $kawibawibo = '보';
            break;
    }

    echo "컴퓨터의 선택은 : {$kawibawibo}";
?>