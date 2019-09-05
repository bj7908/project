<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>이메일 중복 체크 프로그램</title>
    <script>
        function emailCheck(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    result = JSON.parse(this.responseText).result;
                    console.log(result);
                    if(result == 'notEmail'){
                        document.getElementById('status').innerText = '이메일 형식 아님';
                    }else if(result == 'none'){
                        document.getElementById('status').innerText = '사용 사능';
                    }else{
                        document.getElementById('status').innerText = '사용 불가';
                    }
                }
            };
            
            emailAddress = document.getElementById('emailAddress').value;
            
            xhttp.open("POST","161-2-server.php",true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("email="+emailAddress);
        }
    </script>
</head>
<body>
    <input type="email" id="emailAddress" />
    <input type="button" value="중복 확인" onclick="emailCheck()" />
    <p id="status"></p>
</body>
</html>