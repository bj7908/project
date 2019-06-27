<?php
    function sum($param1 = 50, $param2 = 100){
        $sum = $param1 + $param2;
        return $sum;
    }

    //아규먼트를 모두 적어서 호출
    echo "sum(5,10) = ".sum(5,10);
    echo '<br>';

    //아규먼트를 하나만 적어서 호출
    echo "sum(5) = ".sum(5);
    echo '<br>';
    //아규먼트를 적지 않고 호출
    echo "sum() = ".sum();
?>