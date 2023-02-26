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
    <title>Edit</title>
    <link rel="icon" href="../img/logo.png" type="image/icon type">
    <link rel="stylesheet" href="css/addnewss.css">
</head>
<body>

<header>

    <div class="logo">
        <div class="nav-rez">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

        <a href="index.php"><img src="../img/logo.png" alt=""></a>
    <div class="nleft">
        
        <ul  class="nav-menu">
            <li class="nav-item"><a href="user.php">Users</a></li></a>
            <li class="nav-item"><a href="newsposted.php">News</a></li>
            <li class="nav-item"><a href="readcontact.php">Contact</a></li>
            <li class="nav-item"><a href="aboutus.php">About Us</a></li>
        </ul>
    </div>
    </div>
    <div class="nright">


    <?php
            if(isset($_SESSION['ID'])){?>
            <b>Admin: </b>
                <b><?php echo $_SESSION['name']; ?> </b>
                <b><?php echo $_SESSION['surname']; ?> </b>
            <?php 
                echo '<button><a href="../Login form/logoutUser.php">Log out</a></button>';
            }
        ?>


    </div>
</header>
<?php   
              

              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['chapter']) && isset($_POST['title']) && isset($_POST['about'])) {
                     
                    $data['id'] = $id;
                    $data['chapter'] = $_POST['chapter'];
                    $data['title'] = $_POST['title'];
                    $data['about'] = $_POST['about'];



                    if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] !='')){

                        $data['photo']=$_FILES['photo']['name'];
                        $tmp_name = $_FILES['photo']['tmp_name'];

                        if (!file_exists('img')){
                            mkdir('img', 0777, true);
                        }
                        if ($image) {
                            move_uploaded_file($tmp_name, "../img/$photo");
                        }
                        
                    }else{
                        $data['photo'] = $row['photo'];
                    }
                    
 
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'newsposted.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'newsposted.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    
                  }
                }
          ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Edit news</h1>


        <label>Chapter:</label>
        <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>"><br><br>
        <label>Photo:</label>
        <input type="file" name="photo" ><img src="../img/<?php echo $row['photo']; ?>" style="width: 100px; height:70px;"><br><br>
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $row['title']; ?>"><br><br>
        <textarea cols="30" rows="10" placeholder="more about the news.." name="about" maxlength="1500"><?php echo $row['about']; ?></textarea><br><br>
        <input type="submit" value="Update" name="update">
    </form>

    <script src="script/radioScriptt.js"></script>
    <script src="script/scriptnav.js"></script>
</body>
</html>