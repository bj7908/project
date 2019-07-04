<?php
    $fileName = 'helloworld.txt';
    
    //파일 존재 여부 확인
    if(file_exists($fileName)){
        //파일열기
        $fopen = fopen($fileName, 'r');
        
        if($fopen){
            //파일읽기
            $fread = fread($fopen, filesize($fileName));
            if($fread){
                echo filesize($fileName);
                echo $fread; //내용 출력
                fclose($fopen); //파일 닫기
            }else{
                echo "파일 읽기에 실패했습니다.";
            }
        }else{
            echo "파일 열기에 실패했습니다.";
        }
    }else{
        echo "파일이 존재하지 않습니다.";
    }
?>