<?php
    include $_SERVER["DOCUMENT_ROOT"].'/108-2-cconnectDB.php';

    //마지막 띄어쓰기가 있습니다.
    $sql = "DESC myMember";
    $res = $dbConnect->query($sql);

    while($list = $res->fetch_array(MYSQLI_ASSOC)){
        echo "Field : ".$list['Field'];
        echo "<br>";
        echo "Type : ".$list['Type'];
        echo "<br>";
        echo "Null : ".$list['Null'];
        echo "<br>";
        echo "Key : ".$list['Key'];
        echo "<br>";
        echo "Default : ".$list['Default'];
        echo "<br>";
        echo "Extra : ".$list['Extra'];
        
        echo "<br>";
        echo "<br>";
    }
?>