<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/common/171-session.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/common/179-checkSignSession.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form name="boardWrite" method="post" action="181-saveBoard.php">
        제목
        <br>
        <br>
        <input type="text" name="title" required/>
        <br>
        <br>
        내용
        <br>
        <br>
        <textarea name="content" cols="80" rows="10" required></textarea>
        <br>
        <br>
        <input type="submit" value="저장" />
    </form>
</body>
</html>