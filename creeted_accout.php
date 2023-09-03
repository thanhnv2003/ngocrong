<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Kí</title>
    <head>
        <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdFKesnAAAAAPcXLdk63RVDLzmoqJK-U0mlhe-R"></script>
    <link rel="stylesheet" href="./style/stye.css">
    <link rel="shortcut icon" href="./assets/favicon-48x48.ico" type="image/x-icon">
</head>
<body>
    <div class="container-form">
        <form id="fupForm" class="sig-form" action="" method="POST">
            <div class="form-group">
                <label for="">Tài khoản</label>
                <input type="email" name="user" id="email" placeholder="Tài khoản đăng kí là email của bạn">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" name="pass" id="pass" placeholder="Mật khẩu của bạn" >
            </div>
            <div class="note">
                <span>Lưu ý: Sau khi tạo tài khoản thành công hãy đăng nhập vào game để tạo nhân vật</span>
            </div>
            <div class="msg-error"></div>
            <div class="form-group">

               <button type="submit">Đăng kí</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">

        $("#fupForm").on('submit', function(e) {

        e.preventDefault();
            // var formData = new FormData(this);
            var user = $('#email').val();
            var pass = $('#pass').val();
            const dataform = {
                user : user,
                pass : pass
            }
            // console.log(dataform)
        if(user !=="" && pass!==""){
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