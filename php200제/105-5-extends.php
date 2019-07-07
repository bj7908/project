<?php
    class a{
        function hello(){
            echo "hello world";
        }
    }

    class b extends a{}

    $b = new b;
    $b ->hello();
?>