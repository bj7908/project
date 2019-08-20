<?php
    include "108-2-connectDB1.php";

    $oldList = array();
    $oldList[0] = ['김태영', 'ever@everdevel.com'];
    $oldList[1] = ['김미우', 'miu@everdevel.com'];
    $oldList[2] = ['김유나', 'yuna@everdevel.com'];
    $oldList[3] = ['김민후', 'minhoo@everdevel.com'];
    $oldList[4] = ['김해윤', 'haeyun@everdevel.com'];
    $oldList[5] = ['조주홍', 'pika@everdevel.com'];

    $newList = array();
    $newList[0] = ['조주홍', 'pika@everdevel.com'];
    $newList[1] = ['유우코', 'kobayashiyuko@everdevel.com'];
    $newList[2] = ['유리', 'hoshinayuri@everdevel.com'];

    $inputList = array();
    $inputList['dropOutOld'] = $oldList;
    $inputList['dropOutNew'] = $newList;

    $cnt = 0;

    foreach($inputList as $key => $il){
        foreach($il as $i){
            //echo $key.$i[0].$i[1];
            $sql = "INSERT INTO {$key}(name,email) VALUES('{$i[0]}', '{$i[1]}')";
            $result = $dbConnect->query($sql);
            $cnt++;
            
            if($result){
                echo $cnt." 데이터 입력 성공";
            }else{
                echo $cnt." 데이터 입력 실패";
            }
            echo '<br>';
        }
    }
?>