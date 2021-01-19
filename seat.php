<?php
    session_start();
    include 'pdo.php';
    if(empty($_SESSION['uid'])){            //未登录
        $response = [
            'errno' => 400001,
            'msg'   => "未登录"
        ];

        echo json_encode($response);
        exit;
    }else{          //已登录
        $pdo = getPdo();
        $sql = 'update p_rooms set status=0 where id = {$id}';
        $res = $pdo->query($sql);
        $response = [
            'errno' => 0,
            'msg'   => 'ok'
        ];

        die(json_encode($response));
    }