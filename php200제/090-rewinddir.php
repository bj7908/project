<?php
    $folderName = '../htdocs';
    $opendir = opendir($folderName);
    if($opendir){
        echo readdir($opendir).'<br>';
        echo readdir($opendir).'<br>';
        echo readdir($opendir).'<br>';
        
        rewinddir($opendir);
        echo "<br>rewinddir() 함수 실행 후<br>";
        
        echo readdir($opendir).'<br>';
        echo readdir($opendir).'<br>';
        echo readdir($opendir).'<br>';
    }
?>