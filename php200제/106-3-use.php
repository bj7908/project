<?php
    namespace agroup;

    class user{
        function loadUser(){
            return "첫 번째 클래스의 메소드";
        }
    }

    namespace bgroup;

    class user{
        function loadUser(){
            return "두 번째 클래스의 메소드";
        }
    }

    use \agroup\user as au;
    use \bgroup\user as bu;
    
    $au =new au;
    echo $au->loadUser();

    echo "<br>";

    $bu = new bu;
    echo $bu->loadUser();
?>