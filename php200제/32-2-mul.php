<?php
    for($i = 2 ; $i <= 9 ; $i++){
        echo "{$i}단<br>";
        
        for($n = 1 ; $n <= 9 ; $n++){
            $mul = $i*$n;
            echo "{$i} 곱하기 {$n} = {$mul}<br>";
        }
        
        echo "<br>";
    }
?>