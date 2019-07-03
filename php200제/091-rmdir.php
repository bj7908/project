<?php
    rmdir('hello');

    if(is_dir('hello')){
        echo "hello 폴더가 존재합니다.";
    }else{
        echo "hello 폴더가 존재하지 않습니다.";
    }
?>