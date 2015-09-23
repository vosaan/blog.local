<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'newblog');

    function db_connect(){
        $link = mysqli_connect(HOST, USER, PASS, BASE) or die (mysqli_error($link));
        return $link;
    }

    $link = db_connect();
?>