<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script>
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                console.log(this.responseText);
                data = JSON.parse(this.responseText);
                console.log(data.student);
            }
        };
        xhttp.open("POST","./157-1.json",true);
        xhttp.send();
    </script>
</head>
<body>
    
</body>
</html>