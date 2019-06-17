<?php
    for($i = 1 ; $i <= 3 ; $i++){
        echo "바깥쪽 for문 횟수: {$i}<br>";
        
        for($j = 1 ; $j <= 3 ; $j++){
            echo "안쪽 for문 횟수: {$j}<br>";
        }
        
        echo '<br>';
    }
?>