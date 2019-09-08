<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/connection/163-connection.php';

    $sql = "SELECT * FROM controlCSS";
    $result = $dbConnect->query($sql);
    $dataCount = $result->num_rows;

    $cssSelectorList = array();

    for($i = 0 ; $i < $dataCount ; $i++){
        $cssData = $result->fetch_array(MYSQLI_ASSOC);
        array_push($cssSelectorList, $cssData);
    }

    $floatList = array();
    $floatList = ['left','right','none','unset'];

    $borderWidthList = array();
    $borderWidthList = range(1,10);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CSS 입력 페이지 만들기</title>
    <style>
        span {
            float: left;
            margin-left: 10px;
            padding: 10px;
            border: 1px solid black;
        }

    </style>
</head>

<body>
    <h1>CSS CONTROL PANEL</h1>
    <br>
    <?php
        foreach($cssSelectorList as $csl){
    ?>
    <span>
        <h2><?=$csl['selectorName']?></h2>
        <form name="wrap" method="post" action="./169-controlPanelSave.php">
            <h3>흐름</h3>
            <select name="float">
<?php
    foreach($floatList as $fl){
        
        $isChecked = '';
        if($fl == $csl['floata']){
            $isChecked = 'selected';
        }
        echo "<option value='{$fl}' $isChecked>{$fl}</option>";
    }
?>
            </select>
            <h3>가로길이</h3>
            <input type="number" name="width" value="<?=$csl['width']?>" />px
            <br>
            <h3>세로길이</h3>
            <input type="number" name="height" value="<?=$csl['height']?>" />px
            <br>
            <h3>배경색</h3>
            <input type="color" name="background" value="<?$csl['background']?>" />
            <br>
            <h3>바깥여백</h3>
            위
            <br>
            <input type="number" name="marginTop" value="<?=$csl['marginTop']?>" />px
            <br><br>
            오른쪽
            <br>
            <input type="number" name="marginRight" value="<?=$csl['marginRight']?>" />px
            <br><br>
            아래
            <br>
            <input type="number" name="marginBottom" value="<?=$csl['marginBottom']?>" />px
            <br><br>
            왼쪽
            <br>
            <input type="number" name="marginLeft" value="<?=$csl['marginLeft']?>" />px
            <br><br>
            <input type="hidden" name="selectorName" value="<?=$csl['selectorName']?>" />
            <input type="submit" value="<?=$csl['selectorName']?> 적용"/>
        </form>
    </span>
    <?php
        }
    ?>
</body>

</html>
