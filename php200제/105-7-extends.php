<?php
    class operation{
        function plus($num1, $num2){
            $result = $num1 + $num2;
            return "{$num1} + {$num2} = ".$result;
        }
    }

    class load extends operation{}
    class load2 extends operation{}

    $load2 = new load2;
    echo $load2->plus(1,2);
?>