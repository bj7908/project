<?php
    class pen{
        public $color;
        public $bold;
        public $price;
        
        public function write($contents){
            echo "{$contents}을 쓰다.";
        }
        
        public function draw($contents){
            echo "{$contents}을 그리다.";
        }
    }

    $pen = new pon();
    $pen->write("책");
?>