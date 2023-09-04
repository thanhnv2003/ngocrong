<?php
session_start();
include "../config/conn.php";
$conn = pdo_get_connection();
if (isset($_SESSION['account']) && $_GET['act'] != ''){
    $id_user = $_SESSION['account']['id'];
    $token = $_GET['act'];
    $sql = "SELECT * FROM history_mission WHERE id_user = '$id_user' AND token = '$token'
                                AND status = 1 ORDER BY id DESC";
    $result = pdo_query_one($sql);
//    print_r($result);
//    die();

    //update
    if ($result != '') {
        $sql1 = "SELECT * FROM player WHERE account_id = '$id_user'";
        $result1 = pdo_query_one($sql1);
        $result2 = json_decode($result1['data_inventory']);
//    print_r($result2[2]);

        $sum_coin = $result2[2] + $result['coin'];
        $result2[2] = $sum_coin;
        $data_inventory = json_encode($result2);
//        print_r($data_inventory);
//        die();

        $sql2 = "UPDATE player set data_inventory = '$data_inventory' WHERE account_id = '$id_user'";
        $result3 = pdo_execute($sql2);
        $sql3 = "UPDATE history_mission SET status = 2 WHERE id_user = '$id_user' AND token = '$token'";
        $result4 = pdo_execute($sql3);
//        print_r($result3);
//        print_r($result4);
        $_SESSION['success'] = 'Successfully';
        header('location: ../nhiem-vu.php');
    }else{
        echo 'Token đã được sử dụng!<a href="../nhiem-vu.php"> Quay trở lại...</a>';
    }

}


?>
