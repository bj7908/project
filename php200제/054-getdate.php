<?php
    $nowTime = getdate();
    echo "현재 년도 : ".$nowTime['year']."<br>";
    //echo "현재 년도 : ".getdate()['year']."<br>";
    echo "현재 월 : ".$nowTime['mon']."<br>";
    echo "현재 일 : ".$nowTime['mday']."<br>";
    echo "현재 시 : ".$nowTime['hours']."<br>";
    echo "현재 분 : ".$nowTime['minutes']."<br>";
    echo "현재 초 : ".$nowTime['seconds']."<br>";
    echo "현재 요일 숫자 : ".$nowTime['wday']."<br>";
    echo "현재 요일 문자 : ".$nowTime['weekday']."<br>";
    echo "현재 월 문자 : ".$nowTime['month']."<br>";
    echo "현재 시간 타임스탬프 : ".$nowTime[0]."<br>";
    echo "올해의 일차 : ".$nowTime['yday'];
?>