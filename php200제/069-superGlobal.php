<?php
    
    //현재 실행 파일의 경로의 최상위 경로부터 표시
    echo 'DOCUMENT_ROOT is '.$_SERVER['DOCUMENT_ROOT'].'<br>';

    //클라이언트 언어 검색
    echo 'HTTP_ACCEPT_LANGUAGE is '.$_SERVER['HTTP_ACCEPT_LANGUAGE'].'<br>';

    //페이지에 접속 중인 유저 에이전트의 표시 문자열
    echo 'HTTP_USER_AGENT is '.$_SERVER['HTTP_USER_AGENT'].'<br>';

    //사이트가 사용하는 포트
    echo 'SERVER_PORT is '.$_SERVER['SERVER_PORT'].'<br>';

    //사이트 도메인
    echo 'SERVER_NAME is '.$_SERVER['SERVER_NAME'].'<br>';

    //파일의 현재 경로 (SCRIPT_NAME : 절대경로 / PHP_SELF : 상대경로)
    echo 'SCRIPT_NAME is '.$_SERVER['SCRIPT_NAME'].'<br>';
    echo 'PHP_SELF is '.$_SERVER['PHP_SELF'].'<br>';
    
    //현재 페이지의 주소에서 도메인 제외
    echo 'REQUEST_URI is '.$_SERVER['REQUEST_URI'].'<br>';

    //URL에 붙어서 데이터를 전송하는 방식인 GET변수의 정
    echo 'QUERY_STRING is '.$_SERVER['QUERY_STRING'].'<br>';
?>