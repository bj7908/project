<?php
    include $_SERVER['DOCUMENT_ROOT'].'/108-2-cconnectDB.php';

    $sql = "DESC myMember";
    $res = $dbConnect->query($sql);

    $list = $res->fetch_array(MYSQLI_ASSOC);

    echo '<pre>';
    var_dump($list);
    echo '</pre>';
?>