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
    <link rel="icon" href="../img/logo.png" type="image/icon type">
    <link rel="stylesheet" href="../css/aboutus.css">
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

        <a href="index.php"><img src="../img/logo.png" alt=""></a>
    <div class="nleft">
        
    <ul  class="nav-menu">
    <ul  class="nav-menu">
            <li class="nav-item"><a href="user.php">Users</a></li></a>
            <li class="nav-item"><a href="newsposted.php">News</a></li>
            <li class="nav-item"><a href="readcontact.php">Contact</a></li>
            <li class="nav-item"><a href="aboutus.php">About Us</a></li>
        </ul>
    </ul>
    </div>
    </div>
    <div class="nright">
        <ul>
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

        $modeli = new Model();
        $rows = $modeli->fetchAboutUs();
        if(!empty($rows)){
            foreach($rows as $row){  
?>
<main>
    <section class="about-us">
        <h1>About Us</h1>
        <a href="editAboutus.php?id=<?php echo $row['ID']; ?>"><button>Edit</button></a>
        <p><?php echo $row['info']; ?></p>
        <img src="../img/<?php echo $row['photo'] ?>" alt="CNN team photo">
    </section>
</main>
<?php
            }
        }
?>
<script src="script/scriptnav.js"></script>
</body>
</html>