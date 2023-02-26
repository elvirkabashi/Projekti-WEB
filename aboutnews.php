<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css">
    <link rel="icon" href="img/logo.png" type="image/icon type">
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

            <a href="index.php"><img src="img/logo.png" alt=""></a>
        <div class="nleft">
            
            <ul  class="nav-menu">
                <li class="nav-item"><a href="index.php"><span>World</span></a></li></a>
                <li class="nav-item"><a href="news.php">News</a></li>
                <li class="nav-item"><a href="sport.php">Sport</a></li>
            </ul>
        </div>
        </div>
        <div class="nright">
            <ul>
                <li><a href="index.php">About Us</a></li>
                <li><a href="index.php">Contact Us</a></li>  
            </ul>
            <button><a href="./Login form/login.html">Log In</a></button>
        </div>
        </header>
    <?php
        include 'modeli.php';
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
        <img src="img/<?php echo $row['photo']; ?>" alt=""><br><br><br>

        <p id="about"><?php echo $row['about'] ?></p>
    </div>
    <?php
        }
    }
        ?>

<script src="script/script.js"></script>
</body>
</html>