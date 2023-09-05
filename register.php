<!doctype html>
<html lang="en">


<!-- Mirrored from nrozoee.online/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 15:12:32 GMT -->
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


<!-- Mirrored from nrozoee.online/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 15:12:33 GMT -->
</html><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ngọc Rồng Tea</title>
    <link rel="icon" href="assets/images/nro.png" type="image/png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="www.google.com/recaptcha/api.html" async defer></script>
</head>
<style>
    @import url(css/main.css);

    body {
        background-image: url('assets/images/back.jpg');
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
            background-image: url('assets/images/back.jpg');
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
</style>

<body>
<div class="container py-3">
    <header>
    </header>
    <main>
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <form class="form-signin" method="POST" id="fupForm" action="">
            <h1 class="h3 mb-3 font-weight-normal text-center">Nhập thông tin đăng ký</h1>
            <div class="form-group">
                <label>Tài khoản</label>
                <input type="text" id="email" class="form-control" placeholder="Tài khoản" required="" name="user" value="">
            </div>

            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" id="pass" class="form-control" placeholder="Mật khẩu" required="" name="pass">
            </div>
            <div class="form-group">
                <label>Nhập lại mật khẩu</label>
                <input type="password" id="repass" class="form-control" placeholder="Mật khẩu" required="" name="repassword">
            </div><br>
            <div class="msg-error"></div>
            <button class="btn btn-primary w-100" type="submit">Đăng ký</button>
            <div class="text-center pt-2">
                Bạn đã có tài khoản? <a href="login.php">Đăng nhập ngay</a>
            </div>
            <div class="text-center pt-2">
                <a href="#">Quên mật khẩu</a>
            </div>
        </form>
        <style>
            .form-signin {
                width: 100%;
                max-width: 400px;
                padding: 15px;
                margin: 0 auto;
            }

            .form-signin .checkbox {
                font-weight: 400;
            }
        </style>
    </main>
    <script src="assets/js/jquery.form.min.js"></script>
    <script src="assets/js/clipboard.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/appa368a368.js?_=1668687096"></script>
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

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript">

    $("#fupForm").on('submit', function(e) {

        e.preventDefault();
        // var formData = new FormData(this);
        var user = $('#email').val();
        var pass = $('#pass').val();
        var passConfirm = $('#repass').val();


        const dataform = {
            user : user,
            pass : pass,

        }
        // console.log(dataform)
        if(user !== "" && pass !== "" && pass === passConfirm){
            $.ajax({
                type: 'POST',
                url: './data/creted-account.php',
                data: dataform,
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    $('.msg-error').html('');
                    if (response.status == 1) {
                        $('.msg-error').html('<p class="alert alert-success">' + response.message +
                            '</p>');
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

</html>