<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myMember 테이블에 데이터 입력 폼</title>
</head>
<body>
    <form name="test" method="post" action="./149-2-insert.php"><br>
        <input type="text" name="userId" placeholder="아이디 입력" required /><br>
        <input type="text" name="userName" placeholder="이름 입력" required /><br>
        <input type="password" name="userPw" placeholder="비밀번호 입력" required /><br>
        <input type="text" name="userPhone" placeholder="휴대번호 입력" required /><br>
        <input type="email" name="userEmail" placeholder="이메일 입력" required />
        <br>
        생일 : <br>
        <select name="birthYear" required>
    <?php
        $thisYear = date('Y',time());
        for($i=1960 ; $i <= $thisYear ; $i++){
            echo "<option value='{$i}'>{$i}</option>";
        }
    ?>
        </select>년
        <select name="birthMonth" required>
    <?php
        for($i=1 ; $i<=12 ; $i++){
            echo "<option value='{$i}'>{$i}</option>";
        }
    ?>
        </select>월
        <select name="birthDay" required>
    <?php
        for($i = 1 ; $i<=31 ; $i++){
            echo "<option value='{$i}'>{$i}</option>";
        }
    ?>
        </select>일
        <br>
        성별 : <br>
        남<input type="radio" name="userGender" value="m" required />
        여<input type="radio" name="userGender" value="w" required />
        <br>
        <input type="submit" value="입력" />
    </form>
</body>
</html>