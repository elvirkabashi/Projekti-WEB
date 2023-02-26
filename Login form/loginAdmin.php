<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="../img/logo.png" type="image/icon type">
    <title>Log in to your account | CNN</title>
</head>
<body>
    <div class="bg">
        <div class="login">
            <form class="logo" id="form" action="" method="POST">
                <a href="../index.php"><img src="loginlogo.png" alt=""></a>
                <h1>Log in to Administrator page</h1>
                <p>Login as User? <a href="login.php"><span id="span">Login</span></a></p>
                <br><br>
                <?php
                    include '../modeli.php';
                    $model = new Model();
                    $insert = $model->loginAdmin();  
                ?>

                <div class="input-control">
                    <input type="text" placeholder="Email address" name="email" id="email"><br>
                    <div class="error"></div>
                </div><br>
                <div class="input-control">
                    <input type="password" placeholder="Password" name="password" id="password"><br>
                    <div class="error"></div>
                </div>
                
                <p id="forgot"><a href="">Forgot password?</a></p>
                <br><br>
                <button type="submit" name="login">Log In</button>
        </form>
        </div>
    </div>
    
    <!-- <script src="script/script2.js"></script> -->
</body>
</html>