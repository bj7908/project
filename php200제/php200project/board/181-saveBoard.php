<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/common/171-session.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/common/179-checkSignSession.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/connection/163-connection.php';

    $title = $_POST['title'];
    $content = $_POST['content'];

    if($title != null && $title != ''){
        $title = $dbConnect->real_escape_string($title);
    }else{
        echo "제목을입력하세요";
        echo "<a href='./180-writeForm.php'>작성 페이지로 이동</a>";
        exit;
    }

    if($content != null && $content != ''){
        $content = $dbConnect->real_escape_string($content);
    }else{
        echo "내용을 입력하세요.";
        echo "<a href='./180-writeForm.php'>작성 페이지로 이동</a>";
        exit;
    }

    $memberID = $_SESSION['memberID'];

    $regTime = time();

    $sql = "INSERT INTO board (memberID, title, content, regTime) ";
    $sql .= "VALUES ('{$memberID}','{$title}','{$content}','{$regTime}')";
    $result = $dbConnect->query($sql);

    if($result){
        echo "저장 완료";
        echo "<a href='./183-list.php'>게시글 목록으로 이동</a>";
        exit;
    }else{
        echo "저장실패 - 관리자에게 문의";
        echo "<a href='./183-list.php'>게시글 목록으로 이동</a>";
        exit;
    }
?>