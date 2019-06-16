<?php
    $sum = 0;
    $maxValue = 50;
    for($i = 1 ; $i <= $maxValue ; $i++){
        if($i%2 == 0){
            $sum += $i;
        }
    }

    echo "1부터 {$maxValue}까지의 짝수 누적합 : {$sum}";
?>