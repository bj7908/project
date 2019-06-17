<?php
    
    $str = " 양쪽 모두 공백 없앰 ";
    echo '|'.trim($str).'|'; // |는 공백 확인을 위해 사용
    echo "<br>";

    $str = " 앞만 공백 없앰 ";
    echo '|'.ltrim($str).'|';
    echo "<br>";

    $str = " 뒤쪽 공백 없앰 ";
    echo '|'.rtrim($str).'|';

?>