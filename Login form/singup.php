<?php
    include '../modeli.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="../img/logo.png" type="image/icon type">
    <title>Create your  account | CNN</title>
</head>
<body>
    <?php
        
        $model = new Model();
        $insert = $model->insertUserData();
    ?>
    <div class="bg">
        <div class="login">
            <form class="logo" method="POST" id="form" action="">
                <a href="../index.php"><img src="loginlogo.png" alt=""></a>
                <h1>Create your CNN account</h1>
                <p>Already have an account? <a href="login.php"><span id="span">Log In</span></a></p>
                <br>
                <div style="background-color:red;color:white;font-size:12px;border-radius:10px;" class="error" id="error-div"></div>
                <div class="input-control">
                    <input type="text" placeholder="Email address" name="email" id="email"><br>
                    <div class="error"></div>
                </div><br>
                <div class="input-control">
                    <input type="password" placeholder="Password" name="password" id="password"><br>
                    <div class="error"></div>
                </div><br>
                <div class="input-control">
                    <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword">
                    <div class="error"></div>
                </div>
                <br><br>
                <button type="submit" name="submit">Create Account</button>
            </form>
    
        </div>
    </div>
    <!-- <script src="script/scriptt.js"></script> -->
</body>
</html>