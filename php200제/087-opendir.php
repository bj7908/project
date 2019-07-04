<?php
    /*$folderName = "hello";
    $makeFolder = mkdir($folderName,777);

    if($makeFolder){
        echo "{$folderName} 폴더가 생성 되었습니다.";
    }else{
        echo "{$folderName} 폴더가 생성되지 않았습니다.";
    }

    echo '<br>';*/

    $folderName = "hello";
    $opendir = opendir($folderName);

    echo $opendir;

    echo '<br>';

    if($opendir){
        echo "{$folderName} 폴더를 열었습니다.";
    }else{
        echo "{$folderName} 폴더를 여는데 실패했습니다.";
    }

    echo '<br>';

    $folderName = "world";
    $opendir = opendir($folderName);

    if($opendir){
        echo "{$folderName} 폴더를 열었습니다.";
    }else{
        echo "{$folderName} 폴더를 여는데 실패했습니다.";
    }
?>