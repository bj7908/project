<?php
    $fileName = "helloworld.txt";
    if(file_exists($fileName)){
        $fopen = fopen($fileName,'r');
        
        //읽어올 용량 설정 상황에 따라 다른 값을 넣어야 함
        $readByte = 512;
        if($fopen){
            while($fgets = fgets($fopen, $readByte)){
                echo $fgets."<br>";
            }
        }
    }
?>