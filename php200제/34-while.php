<?php
    //합산값을 저장할 변수 선언
    $sum = 0;

    //누적합을 시작할 값 선언
    $num = 1; 

    while($num <= 10){
        
        //$num값을 $sum에 더하여 누적 시킴
        $sum += $num;
        
        $num++;
    }
    
    //while문이 종료된 후 sum에 대입된 누적합계 출력
    echo "1부터 10까지 누적합은 {$sum}입니다.";
?>