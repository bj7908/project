<?php
    //파일에 쓸 내용
    $content = "Hello World!";

    //내용 저장할 파일명
    $fileName = "helloworld.txt";

    //파일 열기
    $fp = fopen($fileName,'w');

    //파일 쓰기
    $fw = fwrite($fp,$content);

    //파일 쓰기 성공 여부 확인
    if($fw == false){
        echo '파일 쓰기에 실패헀습니다.';
    }else{
        echo "파일 쓰기 완료.";
    }
    fclose($fp);
?>