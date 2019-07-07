<?php
    class pen{
        public $color;
        public $bold;
        public $price;
        
        function __construct($color, $bold, $price){
            echo "사용중인 펜";
            echo "<br>";
            echo "색 : {$color}";
            echo "<br>";
            echo "두께 : {$bold}";
            echo "<br>";
            echo "가격 : {$price}원";
            echo "<br>";
        }
        
        public function write($contents){
            echo "{$contents}을 쓰다.";
        }
        
        function __destruct(){
            echo "<br>";
            echo "pen 객체 사용이 끝났습니다.";
            
        }
    }

    $pen = new pen('핑크','두꺼운','1000');
    echo "Hello World ";
    $pen->write('글');
?>