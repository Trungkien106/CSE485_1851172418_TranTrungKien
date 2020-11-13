<?php include("app/controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f3a95a8473.js" crossorigin="anonymous"></script> 
    <!-- Font google -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="css/style.css">
    <title>Đăng kí</title>
</head>

<body>
<?php include( "app/includes/header.php");?>

    <div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Đăng kí</h2>
            

            <?php include("app/helpers/formErrors.php"); ?>

            <div>
                <label>Tài khoản</label>
                <input type="text" name="username" value="<?php echo $username;?>" class="text-input">
            </div>
            <div>
                <label>Email</label>
                <input  type="email" name="email" value="<?php echo $email;?>" class="text-input">
            </div>
            <div>
                <label>Mật khẩu</label>
                <input type="password" name="password" value="<?php echo $password;?>" class="text-input">
            </div>
            <div>
                <label>Xác nhận mật khẩu</label>
                <input type="password" name="passwordConf" value="<?php echo $passwordConf;?>" class="text-input">
            </div>
            <div>
                <button type="submit" name="register-btn" class="btn btn-big">Đăng kí</button>
            </div>
            <p>Hoặc <a href="login.php">Đăng nhập</a></p>
        </form>
    </div>



    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <!-- Slick carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Custom Script -->
    <script src="js/scripts.js"></script>
</body>