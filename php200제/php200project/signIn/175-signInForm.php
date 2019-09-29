<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
</head>
<body>
    <h1>로그인</h1>
    <form name="signIn" method="post" action="./176-signInProcessing.php">
        이메일<br>
        <input type="email" name="userEmail" required/>
        <br>
        <br>
        비밀번호<br>
        <input type="password" name="userPw" required/>
        <br>
        <br>
        <input type="submit" value="로그인"/>
    </form>
</body>
</html>