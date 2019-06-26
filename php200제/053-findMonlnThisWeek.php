<?php
    $year = 2019;
    $month = 4;
    $day =4;

    //특정 날짜의 타임스탬프값 구하기
    $targetDateTimeStamp = mktime(0,0,0,$month,$day,$year) ;
    //요일 찾기
    $dayOfWeek = date('w', $targetDateTimeStamp);

    //하루의 초(second)
    $secondOfOneDay = 60 * 60 *24;

    switch($dayOfWeek){
        case 1: //월요일
            $monday = $targetDateTimeStamp;
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 4);
        break;
        case 2: //화요일
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 1);
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 3);
        break;
        case 3: //수요일
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 2);
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 2);
        break;
        case 4: //목요일
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 3);
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 1);
        break;
        case 5: //요일
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 4);
            $friday = $targetDateTimeStamp;
        break;
        
    }

    if(isset($monday) && isset($friday)){
        echo "{$year}년 {$month}월 {$day}일이 있는 주의 월요일과 금요일 날짜";
        echo '<br>';
        echo '월요일 : '.date('Y-m-d', $monday);
        echo '<br>';
        echo '금요일 : '.date('Y-m-d', $friday);
    }else{
        echo "월요일 부터 금요일의 날짜를 입력하세요";
    }

?>