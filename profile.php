<?php
session_start();
include "./config/conn.php";
if(!isset($_SESSION['account'])){
    header('location: index.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/png" href="./img/nro.png" />
    <meta name="author" content="">
    <title>NRO Zoee</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="js/swal.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        html {
            font-size: 14px;
        }

        @media (min-width: 768px) {
            html {
                font-size: 16px;
            }
        }

        .container {
            max-width: 960px;
            background-color: rgba(229, 229, 229, 0.8);
            border-radius: 10px;
        }

        .pricing-header {
            max-width: 700px;
        }

        .card-deck .card {
            min-width: 220px;
        }

        .border-top {
            border-top: 1px solid #e5e5e5;
        }

        .border-bottom {
            border-bottom: 1px solid #e5e5e5;
        }

        .box-shadow {
            box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background-color: #f44336;
        }

        .nav-link {
            color: #f44336;
        }

        .nav-link:focus,
        .nav-link:hover {
            color: #cd3a2f;
        }

        .header {
            background-color: #e5e5e5;
            color: #fff;
            display: flex;
            align-items: center;
            padding-top: 20px;
        }

        .logo-text {
            font-weight: 500;
            margin-left: 10px;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                text-align: center;
                border-bottom-left-radius: 5px;
                border-bottom-right-radius: 5px;
            }

            .header .container {
                padding-left: 0;
                padding-right: 0;
            }

            .header .container a {
                /* margin-bottom: 10px; */
            }

            .header .container nav {
                margin-top: 10px;
            }

            .no-login {
                display: none !important;
            }

        }
    </style>
</head>

<body>
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom header">
    <div class="d-flex flex-column flex-md-row align-items-center container">
        <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
            <img class="img-fluid" src="img/nro.png" alt="" width="36" height="36">
            <span class="fs-5 logo-text"> NRO CUI</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto" style="font-weight: 500">
            <!-- <a class="me-3 py-2 text-dark text-decoration-none" href="tai-ve.php">Tải về</a> -->
            <a class="me-3 py-2 text-dark text-decoration-none" href="login.php">Nạp Thẻ</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="login.php">Nạp ATM</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="top-suc-manh.php">Top Máy chủ</a>
            <a class="me-3 py-2 text-dark text-decoration-none" target="_blank" href="https://zalo.me/g/beipaq298">BOX ZALO</a>
        </nav>

        <nav class="my-2 my-md-0 mr-md-3">
            <?php if (isset($_SESSION['account']) && $_SESSION['account'] != ''){
                ?>
                <a class="btn btn-outline-primary no-login" href="profile.php" style="font-weight: 500"><?php echo $_SESSION['account']['username']?></a>
            <?php }else{ ?>
                <a class="btn btn-outline-primary no-login" href="login.php" style="font-weight: 500">Đăng nhập</a>
            <?php } ?>

        </nav>
    </div>
</div>
</body>

</html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ngọc Rồng Tea</title>

    <link rel="icon" href="/img/nro.png" type="image/png">
    <!-- Bootstrap core CSS -->
    <link href="../../../getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="../../../getbootstrap.com/docs/5.0/dist/js/bootstrap.min.js"></script>
</head>
<style>
    @import url(./css/main.css);

    body {
        background-image: url('./assets/images/back.jpg');
        background-position: left top;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    html {
        height: 100%;
        overflow: hidden;
    }

    @media (max-width:768px) {
        html {
            height: 100%;
            overflow: unset;
        }

        body {
            background-image: url('./assets/images/back.jpg');
            background-size: auto;
        }
    }

    .btn-primary {
        border-color: #f44336 !important;
        color: #fff !important;
    }

    .border-primary {
        border-color: #f44336 !important;
    }

    .bg-primary,
    .btn-primary {
        background-color: #f44336 !important;
    }

    .btn-outline-primary:hover {
        background-color: #f44336;
        border-color: #f44336;
    }

    .btn-outline-primary {
        color: #f44336;
        border-color: #f44336;
    }

    .feature-box {
        padding: 38px 30px;
        position: relative;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 0 29px 0 rgb(18 66 101 / 8%);
        transition: all 0.3s ease-in-out;
        border-radius: 8px;
        z-index: 1;
        width: 100%;
    }

    .feature-icon {
        font-size: 1.8em;
        margin-bottom: 1rem;
    }

    .feature-title {
        font-size: 1.2em;
        font-weight: 500;
        padding-bottom: 0.25rem;
        text-decoration: none;
        color: #212529;
    }

    .list-group-item.active {
        background-color: #007bff;
        border-color: #007bff;
    }

    a {
        text-decoration: none;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #007bff;
    }

    .nav-link {
        color: #007bff;
    }

    .nav-link:focus,
    .nav-link:hover {
        color: #cd3a2f;
    }
</style>


<body>
<div class="container py-3">
    <main>
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <div class="row">
            <div class="col-md-3 pb-3 pt-2">
                <div class="list-group d-none d-sm-block">
                    <a href="profile.php" class="list-group-item list-group-item-action active ">
                        <i class="fas fa-user me-2"></i> Thông tin tài khoản
                    </a>
                    <?php if($_SESSION['account']['is_admin'] == 1){ ?>
                    <a href="dashboard.php" class="list-group-item list-group-item-action ">
                        <i class="fas fa-user me-2"></i> Đăng nhập quản trị
                    </a>
                    <?php } ?>
                    <a href="nhiem-vu.php" class="list-group-item list-group-item-action ">
                        <i class="fas fa-coins me-2" ></i> Làm nhiệm vụ
                    </a>
                    <a href="fotgot-password.php" class="list-group-item list-group-item-action">
                        <i class="fas fa-unlock me-2"></i> Đổi mật khẩu
                    </a>
                    <a href="logout.php" class="list-group-item list-group-item-action ">
                        <i class="fas fa-sign-out-alt me-2"></i> Đăng xuất
                    </a>

                </div>
            </div>
            <div class="col-md-9 pb-3 pt-2">
                <h5>Tài khoản</h5>
                <table class="table">
                    <tbody>

                    <tr>
                        <th scope="row">Tài khoản đăng nhập</th>
                        <th>
                            <div class="w-50" style='font-size:16px'><?php echo $_SESSION['account']['username'] ?></div>
                        </th>
                    </tr>
                    <tr>
                        <th scope="row">Trạng Thái Thành Viên</th>
                        <td>
                            <div class="w-50" style='font-size:16px'>Đã kích hoạt</div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Coin</th>
                        <td>
                            <?php
                            $query = "SELECT * FROM player WHERE account_id = ".$_SESSION['account']['id'];
                            $result = pdo_query_one($query);
//                            print_r(json_decode($result['data_inventory'])[2]);
//                            die();
                            if ($result != ''){
                            ?>
                                <div class="text-danger"><b><?php echo number_format(json_decode($result['data_inventory'])[2], 0, '.', ','); ?> Coin</b></div>
                        <?php }else{ ?>
                            <div class="text-danger"><b>0 Coin</b></div>
                        <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Tổng đã nạp</th>
                        <td>
                            <?php
                             $query_coin = "SELECT * FROM history_mission WHERE id_user = ".$_SESSION['account']['id']." AND status = 2";
                             $result_coin = pdo_query($query_coin);
                             if ($result_coin != ''){
                                 $total_coin = 0;
                                 foreach ($result_coin as $coin){
                                     $total_coin += $coin['coin'];
                                 }
                                 ?>
                            <div class="text-danger"><b><?php echo number_format($total_coin, 0, '.', ','); ?> Coin</b>
                                <?php }else{ ?>
                                <div class="text-danger"><b>0 Coin</b>
                                <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Địa chỉ ip</th>
                        <td>
                            <div class="w-50" style='font-size:16px'><?php echo isset($_SESSION['account']) ? $_SESSION['account']['ip_address'] : '' ?></div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Đăng xuất</th>
                        <td>
                            <a class="btn btn-outline-primary" href="logout.php" style="font-weight: 500">Đăng xuất</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="row pt-2">
                </div>

            </div>
        </div>
    </main>


    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="text-center">
            Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br>
            Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
        </div>
    </footer>
</div>


</body>
</html></div>
