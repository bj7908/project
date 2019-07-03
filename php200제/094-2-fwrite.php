<?php
    $content = " 이 내용은 앞의 내용의 뒤에 붙어 저장합니다.";
    $fileName = "helloworld.txt";
    //파일 열기의 옵션으로 입력
    $fp = fopen('./'.$fileName,"a");
    $fw = fwrite($fp,$content);

    //파일 쓰기 성공 여부 확인
    if($fw == false){
        echo "파일 쓰기에 실패헀습니다.";
    }else{
        echo "파일 쓰기 완료";
    }
    fclose($fp);
?>