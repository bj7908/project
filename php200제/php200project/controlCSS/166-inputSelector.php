<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/connection/163-connection.php';

    $selectorList = array();
    $selectorList = ['wrap','header','leftArea','rightArea','footer'];

    foreach($selectorList as $sl){
        $sql = "INSERT INTO controlCSS (selectorName, floata, ";
        $sql .= "width, height, background, marginTop, marginRight, ";
        $sql .= "marginBottom, marginLeft) VALUES ";
        $sql .= "('{$sl}','unset',0,0,'',0,0,0,0)";
        $result = $dbConnect->query($sql);
        
        if($result){
            echo "셀렉터 {$sl} 입력 성공";
        }else{
            echo "셀렉터 {$sl} 입력 실패";
        }
        echo "<br>";
    }
?>