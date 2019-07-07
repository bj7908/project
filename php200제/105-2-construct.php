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
            echo "가격 : {$price}";
        }
    }

    $pen = new pen('핑크', '두꺼운', '1000');
?>