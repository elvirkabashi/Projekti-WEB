<?php
    include '../modeli.php';
    session_start();
    if(!isset($_SESSION['ID'])){
        header("location: ../Login form/loginAdmin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Login form/login.css">
    <link rel="icon" href="../img/logo.png" type="image/icon type">
    <title>Add New Admin | CNN</title>
</head>
<body>
    <?php  
        $model = new Model();
        $insert = $model->insertAdmin();
    ?>
    <div class="bg">
        <div class="login">
            <form class="logo" method="POST" id="form" action="">
                <a href="user.php"><img src="../Login form/loginlogo.png" alt=""></a>
                <h1>Add New Administrator</h1>
                <br>
                <div class="input-control">
                    <input type="text" placeholder="Name" name="name" id="name"><br>
                    <div class="error"></div>
                </div><br>
                <div class="input-control">
                    <input type="text" placeholder="Surname" name="surname" id="surname"><br>
                    <div class="error"></div>
                </div><br>
                <div class="input-control">
                    <input type="text" placeholder="Email address" name="email" id="email"><br>
                    <div class="error"></div>
                </div><br>
                <div class="input-control">
                    <input type="password" placeholder="Password" name="password" id="password"><br>
                    <div class="error"></div>
                </div><br>

                <br><br>
                <button type="submit" name="submit">Create Account</button>
            </form>
    
        </div>
    </div>
    <!-- <script src="script/scriptt.js"></script> -->
</body>
</html>