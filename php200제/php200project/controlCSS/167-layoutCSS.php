<?php
    header("Content-type: text/css");

    include_once $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/connection/163-connection.php';

    $sql = "SELECT * FROM controlCSS";
    $result = $dbConnect->query($sql);

    $dataCount = $result->num_rows;

    $cssSource = '';

    for($i=0 ; $i < $dataCount ; $i++){
        $cssInfo = $result->fetch_array(MYSQLI_ASSOC);
        $cssSource .= "#".$cssInfo['selectorName']."{";
        $cssSource .= "float:".$cssInfo['floata'].";";
        $cssSource .= "width:".$cssInfo['width']."px;";
        $cssSource .= "height:".$cssInfo['height']."px;";
        $cssSource .= "background:".$cssInfo['background'].";";
        $cssSource .= "margin-top:".$cssInfo['marginTop']."px;";
        $cssSource .= "margin-right:".$cssInfo['marginRight']."px;";
        $cssSource .= "margin-bottom:".$cssInfo['marginBottom']."px;";
        $cssSource .= "margin-left:".$cssInfo['marginLeft']."px;";
        $cssSource .= "}";
    }

    echo $cssSource;
?>