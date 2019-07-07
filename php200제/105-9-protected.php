<?php
    class a{
        protected function hello(){
            echo "hello world";
        }
        
        public function print(){
            $this->hello();
        }
    }

    $a = new a;
    $a->print();
?>