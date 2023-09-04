<?php
echo 123;
die();
session_start();
include "../config/conn.php";
$conn = pdo_get_connection();
if (isset($_SESSION['account']) && $_GET['act'] != '') {
    $id_user = $_SESSION['account']['id'];
    $token = $_GET['act'];
    $sql = "SELECT * FROM history_mission WHERE id_user = '$id_user' AND token = '$token' AND status = 1";
    $result = pdo_query($sql);
    //update
    $sql1 = "SELECT thoivang FROM account_id WHERE id = '$id_user'";
    $result1 = pdo_query_one($sql1);
}
?>
