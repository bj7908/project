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

    $aUser = new\agroup\user;
    echo $aUser->loadUser();
    
    echo "<br>";
    
    $bUser = new\bgroup\user;
    echo $bUser->loadUser();
    
?>