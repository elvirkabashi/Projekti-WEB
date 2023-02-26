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
    <link rel="icon" href="img/logo.png" type="image/icon type">
    <link rel="stylesheet" href="css/aboutus.css">
    <title>CNN|About US</title>
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
        <li class="nav-item"><a href="news.php">News</a></li>
        <li class="nav-item"><a href="sport.php">Sport</a></li>
    </ul>
    </div>
    </div>
    <div class="nright">
        <ul>
            <a href="aboutus.php"></a><li><span>About Us</span></li></a>
            <a href="contact.php"><li>Contact Us</li></a>
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
<?php

        $modeli = new Model();
        $rows = $modeli->fetchAboutUs();
        if(!empty($rows)){
            foreach($rows as $row){  
?>
<main>
    <section class="about-us">
        <h1>About Us</h1>
        <p><?php echo $row['info']; ?></p>
        <img src="img/<?php echo $row['photo'] ?>" alt="CNN team photo">
    </section>
</main>
<?php
            }
        }
?>
<script src="script/script.js"></script>
</body>
</html>