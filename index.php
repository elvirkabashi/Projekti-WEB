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
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.png" type="image/icon type">
    <title>CNN International-World</title>
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
                    <li class="nav-item"><a href="index.php"><span>World</span></a></li></a>
                    <li class="nav-item"><a href="news.php">News</a></li>
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

        <div class="home">
            <h1>World</h1>
            <?php
 
                $model = new Model();
                $rowss = $model->fetchNewNews();
            ?>
            
            
            <div class="slideshow">
                <?php
                    if(!empty($rowss)){
                        foreach($rowss as $row){
                    ?>
                <div class="slide">
                    <img src="img/<?php echo $row['photo']; ?>" alt="Slide 1">
                    <div class="caption"><h2><?php echo $row['title']?></h2><p style="display:inline;color:red;font-size:13px;">category: <?php echo $row['category'] ?></p></div>
                </div>
                <?php 
                    }
                }else{
                    echo 'No recorded news';
                }
                ?>
                
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
                </div>
                    
          
            <p>Around the world</p><hr><hr>
            

            <div class="around">  
                    <?php
                    $rows = $model->fetch('world','around-the-world');
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
            

            <p>Featured sections</p><hr><hr>
            <?php

                $rows2 = $model->fetch('world','featured-sections');
            ?>
            <div class="around">
            <?php
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


            <p>Special Features</p><hr><hr>
            <?php

                $rows3 = $model->fetch('world','special-feature');
            ?>
            <div class="around">
            <?php
                if(!empty($rows3)){
                    foreach($rows3 as $row){
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
    </div>

    <script src="script/script.js"></script>
</body>
</html>