<?php
session_start();
include "../config/conn.php";
if($_SESSION['account']['is_admin'] == 0){
    header('location: index.php');
}
if (isset($_POST['update_level'])){
    $id = $_GET['id'];
    $name = $_POST['level_name'];
    $coin = $_POST['level_coin'];

    $query = "UPDATE mission_level_link SET name = '$name', coin = '$coin' WHERE id = '$id'";
    $result = pdo_execute($query);
    header('location: ../dashboard.php');
}

?>

