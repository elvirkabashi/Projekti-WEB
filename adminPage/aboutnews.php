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
    <link rel="stylesheet" href="css/about.css">
    <link rel="icon" href="../img/logo.png" type="image/icon type">
    <title>CNN|</title>
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

        $id = $_GET['id'];
        $model = new Model();
        $rows = $model->fetchByID($id);
        $date = $model->getDate($id);
        $time = $model->getTime($id);
        $postedby= $model->fetchAdminPost($id);
        
    ?>
    
    <?php
        if(!empty($rows)){
            foreach($rows as $row){
            $title = $row['chapter'];
    ?>
    <div id="new">
        <h1><?php echo $row['title']; ?></h1><br><br>
        <p>By <b><?php echo $postedby[0]['name'];?> <?php echo $postedby[0]['surname'];?></b>, CNN <br>
            Published <?php echo $time ?>, <?php echo $date ?></p><br>
        <img src="../img/<?php echo $row['photo']; ?>" alt=""><br><br><br>

        <p id="about"><?php echo $row['about'] ?></p>
    </div>
    <?php
        }
    }
        ?>

<script src="script/navScript.js"></script>
</body>
</html>