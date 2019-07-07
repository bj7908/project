<?php
    namespace agroup;

    function loadUser(){
        return "첫 번째 함수";
    }

    namespace bgroup;

    function loadUser(){
        return "두 번째 함수";
    }

    echo \agroup\loadUser();
    echo "<br>";
    echo \bgroup\loadUser();
?>