<?php

// 関数の定義
function connect_to_db(){ // DB名は自分で設定したものを使用する!
    $dbn='mysql:dbname=gsacf_l05_11;charset=utf8;
    port=3306;host=localhost';
    $user = 'root';
    $pwd = '';
    
    try {
    return new PDO($dbn, $user, $pwd);
    } catch (PDOException $e) {
    exit('dbError:'.$e->getMessage());
    }
    }