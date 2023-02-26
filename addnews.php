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
    <title>Insert</title>
    <link rel="icon" href="img/logo.png" type="image/icon type">
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

        <a href="index.php"><img src="img/logo.png" alt=""></a>
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
        $insert = $model->insertnews();
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>ADD news</h1>
        <label>Select the news category:</label>
        <select id="category" name="category">
            <option value="">Select a category</option>
            <option value="world">World</option>
            <option value="news">News</option>
            <option value="sport">Sport</option>
        </select><br><br>
        <div id="radio-div"></div><br>

        <label>Chapter:</label>
        <input type="text" name="chapter"><br><br>
        <label>Photo:</label>
        <input type="file" name="image"><br><br>
        <label>Title:</label>
        <input type="text" name="title"><br><br>
        <textarea cols="30" rows="10" placeholder="more about the news.." name="about" maxlength="1500"></textarea><br><br>
        <input type="submit" value="Submit" name="insert">
    </form>

    <script src="script/radioScriptt.js"></script>
    <script src="script/scriptnav.js"></script>
</body>
</html>