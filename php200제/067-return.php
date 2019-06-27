<?php
    //함수생성
    function sum($num1,$num2){
        $sum = $num1 + $num2;
        return $sum;
        
        //아래의 코드는 작동하지 않음
        echo "함수";
    }

    //아규먼트 5와 10을 전달
    echo sum(5,10);

    $plus = sum(5,10);
    echo '<br>';
    echo $plus + 20;
?>