<?php
session_start();
include "../config/conn.php";
$conn = pdo_get_connection();
$id_user = $_SESSION['account']['id'];
$location = 'http://localhost/game_web/';
if (isset($_POST['submit'])){
    $player = "SELECT * FROM player WHERE account_id = '$id_user'";
    $player1 = pdo_query_one($player);
    $coin_sql = "SELECT * FROM mission_level_link";
    $coin_result = pdo_query($coin_sql);
//    print_r($coin_result[0]['coin']);
//    die();
    if($player1 == ''){
        $_SESSION['error'] = "Bạn chưa tạo nhân vật! Vui lòng vào game để tạo nhân vật.";
        header('location: ../nhiem-vu.php');
    }else{
        $level = $_POST['level'];
        switch ($level){
            case 1:
                $level_misson = 1;
                $coin = $coin_result[0]['coin'];
                $status = 1;
                $token = uniqid();
                $sql = "INSERT INTO `history_mission` (`id`, `id_user`, `level_mission`, `coin`, `token`, `status`, `create_at`) VALUES (NULL, $id_user, $level_misson, $coin, '$token', $status, CURRENT_TIMESTAMP)";
                $result = pdo_execute($sql);
                $long_url = urlencode('http://localhost/game_web/get-coin.php?act='.$token);
//                $long_url = urlencode('https://www.youtube.com/');
                $api_token = '4e454578-0b5e-4f56-9c84-b1e8d89175af';
                $api_url = "https://web1s.com/api?token={$api_token}&url={$long_url}&alias={$token}";
                $result = @json_decode(file_get_contents($api_url),TRUE);

                if($result["status"] === 'error') {
                    echo $result["message"];
                } else {
                    header('location: '.$result["shortenedUrl"]);
    //                echo $result["shortenedUrl"];
                }
                break;
            case 2:
//                echo 1243;
//                die();
                $level_misson = 2;
                $coin = $coin_result[1]['coin'];
                $status = 1;
                $token = uniqid();
                $sql = "INSERT INTO `history_mission` (`id`, `id_user`, `level_mission`, `coin`, `token`, `status`, `create_at`) VALUES (NULL, $id_user, $level_misson, $coin, '$token', $status, CURRENT_TIMESTAMP)";
                $result = pdo_execute($sql);
                $long_url = urlencode('http://localhost/game_web/get-coin.php?act='.$token);
//                $long_url = urlencode('https://www.youtube.com/');
                $api_token = '4e454578-0b5e-4f56-9c84-b1e8d89175af';
                $api_url = "https://web1s.com/api?token={$api_token}&url={$long_url}&alias={$token}";
                $result = @json_decode(file_get_contents($api_url),TRUE);

                if($result["status"] === 'error') {
                    echo $result["message"];
                } else {
                    header('location: '.$result["shortenedUrl"]);
                    //                echo $result["shortenedUrl"];
                }
                break;
            case 3:
                $level_misson = 3;
                $coin = $coin_result[2]['coin'];
                $status = 1;
                $token = uniqid();
                $sql = "INSERT INTO `history_mission` (`id`, `id_user`, `level_mission`, `coin`, `token`, `status`, `create_at`) VALUES (NULL, $id_user, $level_misson, $coin, '$token', $status, CURRENT_TIMESTAMP)";
                $result = pdo_execute($sql);
                break;
            case 4:
                $level_misson = 4;
                $coin = $coin_result[3]['coin'];
                $status = 1;
                $token = uniqid();
                $sql = "INSERT INTO `history_mission` (`id`, `id_user`, `level_mission`, `coin`, `token`, `status`, `create_at`) VALUES (NULL, $id_user, $level_misson, $coin, '$token', $status, CURRENT_TIMESTAMP)";
                $result = pdo_execute($sql);
                break;
            case 5:
                $level_misson = 5;
                $coin = $coin_result[4]['coin'];
                $status = 1;
                $token = uniqid();
                $sql = "INSERT INTO `history_mission` (`id`, `id_user`, `level_mission`, `coin`, `token`, `status`, `create_at`) VALUES (NULL, $id_user, $level_misson, $coin, '$token', $status, CURRENT_TIMESTAMP)";
                $result = pdo_execute($sql);
                break;
            default:
                break;
        }
    }
}
?>
