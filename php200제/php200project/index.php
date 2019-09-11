<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php200/php200project/common/171-session.php';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>
<body>
<?php
    if(!isset($_SESSION['memberID'])){
?>        
    
    <a href="signUp/173-signUpForm.php">회원가입</a>
    <br>
    <a href="signIn/175-signInForm.php">로그인</a>
<?php
    }else{
?>
   
    <a href="board/183-list.php">게시판</a>
    <br>
    <a href="survey/189-surveyForm.php">설문조사 프로그램</a>
    <br>
    <a href="gChart/195-1-surveyResultBarChart.php">투표결과 바차트로 보기</a>    
    <br>
    <a href="gChart/195-2-surveyResultPieChart.php">투표결과 파이차트로 보기</a>
    <br>
    <a href="webEditor/196-editorForm.php">간단한 코딩 에디터</a>
    <br>
    <a href="parsing/200-1-selectForm.php">실시간 검색어 1위 키워드 보기</a>
    <br>
    <a href="signIn/177-signOut.php">로그아웃</a>
<?php
    }
?>
</body>
</html>