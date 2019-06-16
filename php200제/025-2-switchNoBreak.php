<?php
    $likeCharacter = 'mickey';

    switch($likeCharacter){
        case 'mickey':
            echo '미키';
        
        case 'minnie':
            echo '미니';
        break;
        
        case 'stellalou':
            echo '스텔라루';
        break;
        
        case 'duffy':
            echo '더피';
        break;
        
        default:
            echo '무엇도 좋아하지 않습니다.';
        break;
    }
?>