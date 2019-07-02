<?php
    $folderName = 'hello';
    $makeDir = mkdir($folderName,'777');
    if($makeDir){
        echo "{$folderName} 폴더 생성 완료";
    }else{
        echo "{$folderName} 폴더 생성 실패";
    }
?>