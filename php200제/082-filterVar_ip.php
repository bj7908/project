<?php
    $ip = "192.168.0.1";
    $ipCheck = filter_Var($ip, FILTER_VALIDATE_IP);

    if($ipCheck){
        echo "{$ip}는 올바른 ip 입니다.";
    }else{
        echo "{$ip}는 잘못된 ip 입니다.";
    }

    echo '<br>';

    $ip = "192.";
    $ipCheck = filter_Var($ip, FILTER_VALIDATE_IP);

    if($ipCheck){
        echo "{$ip}는 올바른 ip 입니다.";
    }else{
        echo "{$ip}는 잘못된 ip 입니다.";
    }
?>