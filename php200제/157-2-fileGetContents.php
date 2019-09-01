<?php
    $data = file_get_contents('./157-1.json');
    if($data !== false){
        echo "데이터형 : ".gettype($data)."<br>";
        echo $data;
    }else{
        echo "실패";
    }
?>