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
    <title>Edit admin data | CNN</title>
</head>
<body>
<?php

              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->editAdmin($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])) {
                     
                    $data['id'] = $id;
                    $data['name'] = $_POST['name'];
                    $data['surname'] = $_POST['surname'];
                    $data['email'] = $_POST['email'];
 
                    $update = $model->updateAdmin($data);
 
                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'user.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'user.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    
                  }
                }
?>


    <div class="bg">
        <div class="login">
            <form class="logo" method="POST" id="form" action="">
                <a href="user.php"><img src="../Login form/loginlogo.png" alt=""></a>
                <h1>Edit Administrator data</h1>
                <br>
                <div class="input-control">
                    <input type="text" placeholder="Name" name="name" id="name" value="<?php echo $row['name']; ?>"><br>
                    <div class="error"></div>
                </div><br>
                <div class="input-control">
                    <input type="text" placeholder="Surname" name="surname" id="surname"  value="<?php echo $row['surname']; ?>"><br>
                    <div class="error"></div>
                </div><br>
                <div class="input-control">
                    <input type="text" placeholder="Email address" name="email" id="email" value="<?php echo $row['email']; ?>"><br>
                    <div class="error"></div>
                </div><br>


                <br><br>
                <button type="submit" name="update">Update</button>
            </form>
    
        </div>
    </div>
    <!-- <script src="script/scriptt.js"></script> -->
</body>
</html>