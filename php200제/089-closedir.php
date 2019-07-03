<?php
    $folderName = '../htdocs';

    //디렉터리가 있는지 확인
    if(is_dir($folderName)){
        echo "폴더가 존재합니다.<br>";
        $opendir = opendir($folderName);
        
        if($opendir){
            echo "폴더를 열었습니다.<br>";
            while($readdir = readdir($opendir)){
                echo $readdir.'<br>';
            }
            closedir($opendir);
        }else{
            echo "폴더를 열지 못했습니다.";
        }
    }else{
        echo "폴더가 존재하지 않습니다.";
    }
?>