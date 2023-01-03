<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./Others/css/admin.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="wrapper box-login">
        <div class="login">
            <p class="login-title">Đăng nhập</p>
            <form action="?act=login&xuli=login" method="post">
                <div class="login-item">
                    <label for="">Tài khoản</label>
                    <input type="text" name="username" required>
                </div>
                <div class="login-item">
                    <label for="">Mật khẩu</label>
                    <input type="password" name="password" required>
                </div>
                <div class="login-item login-btn">
                    <button>Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

