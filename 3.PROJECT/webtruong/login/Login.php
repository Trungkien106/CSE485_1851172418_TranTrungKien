
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <!-- Custom Styling-->
  <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>

<body>



  <div class="auth-content">

    <form action="login.html" method="post">
        <h2 class="form-title">Login</h2>
        <div>
            <label>Username</label>
            <input type="tetx" name="username" class="text-input">
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password" class="text-input">
        </div>

        <div>
            <button type="submit" name ="login-btn" class="btn btn-big">Login</button>
        </div>
        <p>Or <a href=" #">Sign In</a></p>

    </form>


  </div>



  <!--JQuery-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
  <!--Custom script-->
  <script src="assets/js/scripts.js"></script>

</body>


</html>
