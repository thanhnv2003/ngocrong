<?php
session_start();
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from nrozoee.online/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 15:12:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/png" href="img/nro.png" />
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
    <script src='../www.google.com/recaptcha/api.js'></script>
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
            <span class="fs-5 logo-text"> NRO Zoee</span>
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


<!-- Mirrored from nrozoee.online/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 15:12:04 GMT -->
</html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ngọc Rồng NRO ZOE 5.0</title>
    <link rel="icon" href="img/nro.png" type="img/png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="www.google.com/recaptcha/api.html" async defer></script>
    <script src="../cdn.jsdelivr.net/npm/sweetalert2%4011.0.19/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="../cdn.jsdelivr.net/npm/sweetalert2%4011.0.19/dist/sweetalert2.min.css">

</head>
<style>
    @import url(css/main.css);

    body {
        background-image: url('assets/images/back.jpg');
        background-position: left top;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    html {
        height: 100%;
    }

    .logo {
        width: 250px;
    }


    h2.fw-light {
        font-weight: bold !important;
        color: #f44336;
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
        /* background: #fff; */
        box-shadow: 0 0 29px 0 rgb(18 66 101 / 8%);
        transition: all 0.3s ease-in-out;
        border-radius: 8px;
        z-index: 1;
        width: 100%;
    }

    .feature-1 {
        background-image: url('img/feature/1.png');
        background-size: cover;
        background-position: right;
    }

    .feature-2 {
        background-image: url('img/feature/2.png');
        background-size: cover;
        background-position: right;
    }

    .feature-3 {
        background-image: url('img/feature/3.png');
        background-size: cover;
        background-position: right;
    }

    .feature-4 {
        background-image: url('img/feature/4.png');
        background-size: cover;
        background-position: center;
    }

    .feature-box:hover {
        transform: scale(1.1);
    }

    .feature-icon {
        font-size: 1.8em;
        margin-bottom: 1rem;
        color: #fff;
    }

    .feature-box p {
        font-size: 16px;
        color: #fff;
    }

    .feature-title {
        font-size: 20px;
        font-weight: 500;
        padding-bottom: 0.25rem;
        text-decoration: none;
        color: #fff;
        padding: 5px 10px;
        border-radius: 10px;
    }

    .list-group-item.active {
        background-color: #f44336;
        border-color: #f44336;
    }

    a {
        text-decoration: none;
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

    .copy-text {
        cursor: pointer;
    }

    .download {
        margin-top: 10px;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }

    @media (max-width:768px) {
        html {
            height: 100%;
            overflow: unset;
        }

        body {
            background-image: url('assets/images/back.jpg');
        }

        .fw-light {
            margin-top: 10px;
        }

        .download {
            margin-top: 10px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            row-gap: 10px;
        }
    }

    /* .feature-5 {
        display: none;
    } */

    .download-item {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .download-item span {
        font-size: 12px;
        color: #f44336;
        font-weight: 600;
    }

    @-webkit-keyframes my {
        0% {
            color: #f44336;
        }

        50% {
            color: #fff;
        }

        100% {
            color: #f44336;
        }
    }

    @-moz-keyframes my {
        0% {
            color: #f44336;
        }

        50% {
            color: #fff;
        }

        100% {
            color: #f44336;
        }
    }

    @-o-keyframes my {
        0% {
            color: #f44336;
        }

        50% {
            color: #fff;
        }

        100% {
            color: #f44336;
        }
    }

    @keyframes my {
        0% {
            color: #f44336;
        }

        50% {
            color: #fff;
        }

        100% {
            color: #f44336;
        }
    }

    .modal-title {
        font-size: 24px;
        font-weight: bold;
        -webkit-animation: my 700ms infinite;
        -moz-animation: my 700ms infinite;
        -o-animation: my 700ms infinite;
        animation: my 700ms infinite;
    }
</style>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">NRO Zoee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><b style="color:red">Thông Báo : Chào Mừng Bạn Đến Với Trang Chủ Ngọc Rồng NRO Zoee</b></p>
                <b>
                    <p class="mb-0">Sever đang mở test yêu cầu ae k nạp</p>
                </b>
                <b>
                    <p class="mb-0" style="color:red">Nhóm Tin Tức Từ  Admin Hướng Đẹp Trai</p>
                </b>
                <b>
                    <p class="mb-0" style="color:red">Thân ái, Ngọc Rồng NRO Zoee</p>
                </b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            // Hiển thị thông báo ở đây
            $("#exampleModal").modal('show');
        }, 5); // Đợi 5 giây (5000 ms) trước khi hiển thị thông báo

        // Đóng modal popup khi nút 'Đóng' được nhấn
        $("#exampleModal .close, #exampleModal button[data-dismiss='modal']").click(function() {
            $("#exampleModal").modal('hide');
        });
    });
</script>
</style>
<div class="container py-3">
    <main>
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <section class="text-center container">
            <div class="row py-md-3">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <!-- <h2 class="fw-light">Ngọc Rồng NRO ZOE 5.0</h2> -->
                    <img src="img/logo.png" alt="Logo" class="logo">
                    <p class="lead text-muted">
                        <?php if (isset($_SESSION['account']) && $_SESSION['account'] != ''){
                        ?>
                            Bạn đã mở khóa thành viên
                    <?php }else{ ?>
                            Đăng ký tài khoản nhận quà tân thủ và nhiều phần thưởng hấp dẫn.
                        <?php } ?>
                    </p>
                    <nav class="my-2 my-md-0 mr-md-3">
                        <?php if (!isset($_SESSION['account'])){
                        ?>
                            <a class="btn btn-outline-primary" href="login.php" style="font-weight: 500">Đăng nhập</a>
                            <a class="btn btn-outline-primary" href="register.php" style="font-weight: 500">Đăng ký</a>
                        <?php } ?>

                        <div class="download">
                            <div class="download-item">
                                <a href="tai-pc.html"><img src="img/download/pc.png" alt="Tải xuống PC"></a>
                                <!-- <span>Phiên bản 231</span> -->
                            </div>
                            <div class="download-item">
                                <a href="tai-ios.html"><img src="img/download/ip.png" alt="Tải xuống IOS"></a>
                                <!-- <span>Phiên bản 231</span> -->
                            </div>
                            <div class="download-item">
                                <a href="tai-apk.html"><img src="img/download/android.png" alt="Tải xuống APK"></a>
                                <!-- <span>Phiên bản 231</span> -->
                            </div>
                            <div class="download-item">
                                <a href="tai-jar.html"><img src="img/download/jar.png" alt="Tải xuống JAR"></a>
                                <!-- <span>Phiên bản 231</span> -->
                            </div>
                        </div>
                </div>
            </div>
            <div class="center">
                <div class="title-behavior">
                    <marquee behavior="scroll" direction="left">Chào mừng bạn đến với máy chủ NRO ZOE 5.0, Đội ngũ Admin chúc các bạn có những trải nghiệm tuyệt vời khi tham gia vào máy chủ của NRO ZOE 5.0</marquee>
                </div>
            </div>
            <style>
                .center {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .title-behavior {
                    width: 50%;
                }
            </style>
        </section>
        <div class="row g-4 py-4 row-cols-1 row-cols-md-4">
            <div class="col d-flex align-items-stretch item">
                <div class="feature-box feature-1">
                    <div class="text-dark">
                        <i class="fas fa-coins feature-icon"></i>
                    </div>
                    <div>
                        <h3 class="feature-title ">Nạp Coin</h3>
                        <p>Thanh toán hoàn toàn tự động, xử lý nhanh sau 1 - 5 phút.</p>
                        <a href="login.php" class="btn btn-primary">
                            Nạp ngay
                        </a>
                    </div>
                </div>
            </div>
            <div class="col d-flex align-items-stretch">
                <div class="feature-box feature-2">
                    <div class="text-dark">
                        <i class="fas fa-exchange-alt feature-icon item"></i>
                    </div>
                    <div>
                        <h3 class="feature-title ">Top Máy Chủ</h3>
                        <p>Xem các mục top trong máy chủ trong server NRO ZOE 5.0</p>
                        <a href="top-suc-manh.php" class="btn btn-primary">
                            Xem ngay
                        </a>
                    </div>
                </div>
            </div>
            <div class="col d-flex align-items-stretch">
                <div class="feature-box feature-3">
                    <div class="text-dark">
                        <i class="fas fa-exchange-alt feature-icon item "></i>
                    </div>
                    <div>
                        <h3 class="feature-title">Nạp vàng</h3>
                        <p>Thanh toán hoàn toàn tự động, xử lý ngay lập tức.</p>
                        <a href="huong-dan.php" class="btn btn-primary">
                            Nạp ngay
                        </a>
                    </div>
                </div>
            </div>
            <div class="col d-flex align-items-stretch item">
                <div class="feature-box feature-4">
                    <div class="text-dark">
                        <i class="fa fa-toggle-on feature-icon " aria-hidden="true"></i>
                    </div>
                    <div>
                        <h3 class="feature-title">Mở thành viên</h3>
                        <p>Mở thành viên nhận quà vip ngay nào.</p>
                        <a href="kich-hoat.php" class="btn btn-primary">
                            Mở ngay
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-warning" style="background-color: #fdf8da;">
            <div class="topic_name">
                <div style="width: 55px; float:left; margin-right: 10px;">
                    <b data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="img/avatar1.png" style="border-color:red; width: 50px; height: 55px;">
                </div>
                <i class="fa fa-check-circle-o" aria-hidden="true" style="color:red"></i> <a id="exampleModal">Nạp Thẻ Tích Lũy
                </a>
                </b>
                <div class="box_name_eman">bởi <b><b>
                            <font style="color:red">ADMIN</font>
                        </b></b> - <span> Xem chi tiết tại đây !!! </span> </div>
            </div>
        </div>

        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nạp Thẻ Tích Lũy</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="#modal-body">
                        <div class="box_ndung_bviet"><b>CHƯA CẬP NHẬT.....</b><br>
                            <br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> -->
    </main>
    <script src="assets/js/jquery.form.min.js"></script>
    <script src="assets/js/clipboard.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/app30073007.js?_=1668687090"></script>
    <footer class="pt-2 my-md-2 pt-md-2 border-top">
        <div class="text-center">
            Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br> Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
        </div>
    </footer>

</div>
<!-- Code made in tui 127.0.0.1 -->
<script src="../ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="../www.google.com/recaptcha/api.js" async defer></script>
</body>

</html></div>