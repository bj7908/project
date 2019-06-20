<?php
    //변수에 데이터형 적용하기

    $val = "true";
    echo "변수 val의 데이터형 ".gettype($val);
    echo "<br>";
    var_dump($val);

    echo "<br>";

    settype($val, 'bool');
    echo "변수 val의 데이터형 ".gettype($val);
    echo "<br>";
    var_dump($val);
?>