<?php
    include '../modeli.php';
    session_start();
    if(!isset($_SESSION['ID'])){
        header("location: ../Login form/loginAdmin.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabela e lajmeve</title>
	<link rel="stylesheet" type="text/css" href="css/newsposteda.css">
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

<footer>
<div id="table">
	<h1>Tabela e lajmeve</h1>
	<table>
		<thead>
			<tr>
				<th>Chapter</th>
				<th>Photo</th>
				<th>Title</th>
				<th>Category</th>
				<th>SubCategory</th>
				<th>Date</th>
                <th id="action">Action</th>
                <th><a href="addnews.php"><button id="b">Add news</button></a> </th>
			</tr>
		</thead>
		<tbody>
        <?php

            $modeli = new Model();
            $rows = $modeli->fetchNews();

            if(!empty($rows)){
                foreach($rows as $row){  
        ?>
			<tr>
				<td><?php echo $row['chapter'] ?></td>
				<td><img src="../img/<?php echo $row['photo'] ?>" style="width: 80px; height:40px;"></td>
				<td><?php echo $row['title'] ?></td>
				<td><?php echo $row['category'] ?></td>
				<td><?php echo $row['subCategory'] ?></td>
				<td><?php echo $row['date'] ?></td>

                <td colspan="2"><a href="aboutnews.php?id=<?php echo $row['ID']; ?>" style="color:black"><button id="read">Read</button></a> <a href="editnews.php?id=<?php echo $row['ID']; ?>"><button id="edit">Edit</button></a> <button onclick="checkDelete(<?php echo $row['ID']; ?>)" id="delete">Delete</button></td>
			</tr>
            <?php
                }
            }
            ?>
		</tbody>
	</table>
</div>
</footer>
    <script src="script/scriptnav.js"></script>
    <script>
    function checkDelete(delId){
        if(confirm('Deshironi te fshini lajmin?')){
            document.location.href = 'deleteNews.php?id='+delId;
            return true;
        }
    }
    </script>
</body>
</html>
