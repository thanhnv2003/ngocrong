<?php
session_start();
include "../config/conn.php";
$conn = pdo_get_connection();
$id_user = $_SESSION['account']['id'];
$token = uniqid();
$location = 'http://localhost/game_web/';
if (isset($_POST['submit'])){
    $level = $_POST['level'];
    switch ($level){
        case 1:
            $level_misson = 1;
            $coin = 500;
            $status = 1;
            $sql = "INSERT INTO `history_mission` (`id`, `id_user`, `level_mission`, `coin`, `token`, `status`, `create_at`) VALUES (NULL, $id_user, $level_misson, $coin, '$token', $status, CURRENT_TIMESTAMP)";
//            print_r($sql);
            $result = $conn->exec($sql);
            $long_url = urlencode('http://localhost/game_web/get-coin.php?act='.$token);
//            $long_url = urlencode('haucloud.click?act='.$token);
            $api_token = '4e454578-0b5e-4f56-9c84-b1e8d89175af';
            $api_url = "https://web1s.com/api?token={$api_token}&url={$long_url}&alias={$api_token}";
            $result = @json_decode(file_get_contents($api_url),TRUE);
//            if($result["status"] === 'error') {
//                echo $result["message"];
//            } else {
//                echo $result["shortenedUrl"];
//            }
            header('location: '.$api_url);
            break;
        case 2:
            $level_misson = 2;
            $coin = 1000;
            $status = 1;
            $sql = "INSERT INTO `history_mission` (`id`, `id_user`, `level_mission`, `coin`, `token`, `status`, `create_at`) VALUES (NULL, $id_user, $level_misson, $coin, $token, $status, CURRENT_TIMESTAMP)";
            $result = $conn->exec($sql);
            break;
        case 3:
            $level_misson = 3;
            $coin = 1500;
            $status = 1;
            $sql = "INSERT INTO `history_mission` (`id`, `id_user`, `level_mission`, `coin`, `token`, `status`, `create_at`) VALUES (NULL, $id_user, $level_misson, $coin, $token, $status, CURRENT_TIMESTAMP)";
            $result = $conn->exec($sql);
            break;
        case 4:
            $level_misson = 4;
            $coin = 2000;
            $status = 1;
            $sql = "INSERT INTO `history_mission` (`id`, `id_user`, `level_mission`, `coin`, `token`, `status`, `create_at`) VALUES (NULL, $id_user, $level_misson, $coin, $token, $status, CURRENT_TIMESTAMP)";
            $result = $conn->exec($sql);
            break;
        case 5:
            $level_misson = 5;
            $coin = 2500;
            $status = 1;
            $sql = "INSERT INTO `history_mission` (`id`, `id_user`, `level_mission`, `coin`, `token`, `status`, `create_at`) VALUES (NULL, $id_user, $level_misson, $coin, $token, $status, CURRENT_TIMESTAMP)";
            $result = $conn->exec($sql);
            break;
        default:
            break;
    }
}
?>
