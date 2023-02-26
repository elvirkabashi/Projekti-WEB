<?php
    session_start();
    include 'modeli.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/news.css">
    <link rel="icon" href="img/logo.png" type="image/icon type">
    <title>CNN International-News</title>
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
            <li class="nav-item"><a href="index.php">World</a></li></a>
            <li class="nav-item"><a href="news.php"><span>News</span></a></li>
            <li class="nav-item"><a href="sport.php">Sport</a></li>
        </ul>
        </div>
        </div>
        <div class="nright">
            <ul>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>  
                <li><?php if(isset($_SESSION['email'])){
                        echo $_SESSION['email'];
                        echo '<a href="./Login form/logoutUser.php"><button style="margin-left:5px;">Log out</button></a>';
                    }else{ ?> </li>
                </ul>
                <?php 
                   echo '<a href="./Login form/login.php"><button>Log In</button></a>'; 
                    }
                ?>
        </div>
    </header>


    <div class="contanier">
        <div class="right">
            <h1>US to send Patriot missile defense system to Ukraine</h1>
            <img src="imgNews/ukraine.jpg" alt="">
            <h3>The Biden administration is completing plans to send the system to Ukraine and announce it as soon as this week, US officials say</h3>
        </div>
        <?php

            $model = new Model();
            $rows = $model->fetch('news','head');
        ?>
            <div class="left">
            <?php
                if(!empty($rows)){
                    foreach($rows as $row){
            ?>
                <div class="child">
                <a href="aboutnews.php?id=<?php echo $row['ID']; ?>" style="color:black">
                <p><?php echo $row['chapter']; ?></p>
                    <img src="img/<?php echo $row['photo']; ?>" alt="">
                    <h2><?php echo $row['title']; ?></h2>
                    </a>
                </div>
                <?php 
                    }
                }else{
                    echo 'No recorded news';
                }
                ?>
            </div>  

    <div class="around">
    <?php
        $rows2 = $model->fetch('news','news');
        if(!empty($rows2)){
            foreach($rows2 as $row){
    ?>
        <div class="world">
        <a href="aboutnews.php?id=<?php echo $row['ID']; ?>" style="color:black">
            <p><?php echo $row['chapter']; ?></p>
            <img src="img/<?php echo $row['photo']; ?>" alt="">
            <h2><?php echo $row['title']; ?></h2>
            </a>
        </div>
    <?php 
        }
    }else{
            echo 'No recorded news';
        }
    ?>    
    </div>
</div>

<script src="script/script.js"></script>
</body>
</head>