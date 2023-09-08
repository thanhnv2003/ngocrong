<?php session_start(); ?>
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
    <script type="text/javascript" src="https://me.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=1ZIJh1cLffivzWpFEt6ioz0i-1hdANwb3Kgmmt52ToDntylIk-m8MYvuEvY6oSCjTBSx-54d2CO_TifJdEXV5A" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://me.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9ucm96b2VlLm9ubGluZS9kb2ktbWF0LWtoYXUucGhw"/><script src="assets/js/jquery.min.js"></script>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
    <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<style>
    @import url(./css/main.css);

    body {
        background-image: url('./assets/images/back.jpg');
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
<main class="flex-grow-1 flex-shrink-1">
    <script type="text/javascript">
        new WOW().init();
    </script>
    </br>
    <div class="container py-3">
        <main>
            <div class="row">
                <div class="col-md-3 pb-3 pt-2">
                    <div class="list-group d-none d-sm-block">
                        <a href="profile.php" class="list-group-item list-group-item-action  ">
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
                        <a href="fotgot-password.php" class="list-group-item list-group-item-action active">
                            <i class="fas fa-unlock me-2"></i> Đổi mật khẩu
                        </a>
                        <a href="logout.php" class="list-group-item list-group-item-action ">
                            <i class="fas fa-sign-out-alt me-2"></i> Đăng xuất
                        </a>

                    </div>
                </div>
                <div class="col-md-9 pb-3 pt-2">
                    <h5>Đổi mật khẩu</h5>
                    <table class="table">
                        <div class="row">
                        </div>
                        <div class="col-4 text-right">
                        </div>
                </div>
            </div>
            <div class="card-body">
                <!-- // Đổi mật khẩu -->
                <form method="POST" id="fupForm" action="">
                    <tbody>
                    <label>Mật khẩu cũ:</label>
                    <input type="password" class="form-control form-control-alternative" name="oldpassword" id="oldpassword" required />
                    <label>Mật khẩu mới:</label>
                    <input type="password" class="form-control form-control-alternative" name="pass" id="pass" required />
                    <label>Nhập lại mật khẩu mới:</label>
                    <input type="password" class="form-control form-control-alternative" name="repass" id="repass" required /><br>
                    <div class="msg-error"></div>
                    <button type="submit" class="btn btn-outline-primary" name="submit">ĐỔI MẬT KHẨU</button>
                    </tbody>
                </form>
            </div>
    </div>
    </div>
    <div id="status"></div>
    <script>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
    <!-- Code made in tui 127.0.0.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <footer class="pt-2 my-md-2 pt-md-2 border-top">
        <div class="text-center">
            Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br> Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
        </div>
    </footer>

    </div>
    <!-- Code made in tui 127.0.0.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">

        $("#fupForm").on('submit', function(e) {

            e.preventDefault();
            // var formData = new FormData(this);
            var oldPassword = $('#oldpassword').val();
            var pass = $('#pass').val();
            var passConfirm = $('#repass').val();


            const dataform = {
                oldPassword : oldPassword,
                pass : pass,
                passConfirm : passConfirm,
            }
            // console.log(dataform)
            if(oldPassword !== "" && pass !== "" && pass === passConfirm){
                $.ajax({
                    type: 'POST',
                    url: './data/forgot-data.php',
                    data: dataform,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response)
                        $('.msg-error').html('');
                        if (response.status == 1) {
                            $('.msg-error').html('<p class="alert alert-success">' + response.message +
                                '</p>');

                            window.location.href = 'fotgot-password.php';
                        } else {
                            $('.msg-error').html('<p class="alert alert-danger">' + response.message +
                                '</p>');
                        }
                    }
                });
            }else{
                $('.msg-error').html('<p class="alert alert-danger">Vui lòng không để trống</p>');
            }
        });

    </script>
    </body>

    </html>  </div>
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
</main>