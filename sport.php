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
    <link rel="stylesheet" href="css/sportt.css">
    <link rel="icon" href="img/logo.png" type="image/icon type">
    <title>CNN International-Sport</title>
</head>
<body>
    <div class="container">

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
                    <li class="nav-item"><a href="sport.php"><span>Sport</span></a></li>
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

        <div class="home">
            <h1>Sport</h1>

            
            <div class="h">
                <div>
                    <h1>World Cup champion France edges out England to reach semifinals as Harry Kane misses penalty</h1>
                </div>
                    
            </div>
            <p>More Than A Game</p><hr><hr>
            <?php

                $model = new Model();
                $rows = $model->fetch('sport','more-than-a-game');
            ?>
            <div class="around">
            <?php
                if(!empty($rows)){
                    foreach($rows as $row){
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
        <div class="home home-color">
            <div class="home hom">
            <p id="black">Beyond The White Line</p><hr><hr>
            <div class="around color">
            <?php
                $rows2 = $model->fetch('sport','beyond-the-white-line');
                if(!empty($rows2)){
                    foreach($rows2 as $row){
                ?>
                <div class="world world-color">
                <a href="aboutnews.php?id=<?php echo $row['ID']; ?>" style="color:black">
                    <p><?php echo $row['chapter']; ?></p>
                    <img src="img/<?php echo $row['photo']; ?>" alt="">
                    <h2><?php echo $row['title']; ?></h2>
                    </a>
                </div>
                <?php 
                    }
                }else{
                    echo '<div style="color:red">No recorded news</div>';
                }
                ?>


            </div>
        </div>
        </div>

    </div>
    <script src="script/script.js"></script>
</body>
</html>