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

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

    <link rel="stylesheet" href="css/contact.css">
    <title>CNN|Contact US</title>
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
            <a href="aboutus.php"><li>About Us</li></a>
            <a href="contact.php"><li><span>Contact Us</span></li></a>
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

<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">Contact us</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Get in Touch</div>
                <p>If you have any questions, thanks or have knowledge about any news, we will be grateful for contacting us.</p>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Name</div>
                            <div class="sub-title">CNN Company</div>
                        </div>
                    </div>

                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">Prishina, Kosovo</div>
                        </div>
                    </div>

                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">cnnnews@gmail.com</div>
                        </div>
                    </div>

                </div>
            </div>
            <?php

                $model = new Model();
                $insert = $model->insertContact();
            
            ?>
            <div class="column right">
                <div class="text">Message</div>
                <form  method="POST">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="Name" name="name" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Subject" name="subject" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" placeholder="Message.." name="message" required></textarea>
                    </div>
                    <div class="button">
                        <button type="submit" name="send">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="script/script.js"></script>
</body>
</html>