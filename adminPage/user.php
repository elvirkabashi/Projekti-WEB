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
    <title>Admins</title>
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    text-decoration:none;

}
body {
    font-family: Arial, sans-serif;
    color: #333;
    background-color: #f5f5f5;
}
ul,li,a,img {
    text-decoration: none;
    display: inline;
}
a{
    color: white;
}
li{
    padding: 19px;
    font-size: 15px;
    cursor: pointer;
}
header{
    position: fixed;
    width: 100%;
    top: 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0px 160px;
    background-color: black;
    color: aliceblue;
    height: 42px;
    z-index: 1;
}

.logo{
    display: flex;
    align-items: center;
}
.logo img{
    width: 43px;
    height: 43px;
}

.nright button{
    background-color: black;
    color:white;
    border: 1px solid white;
    min-height: 27px;
    min-width: 60px;
    font-weight: bolder;
    border-radius: 8px;
    cursor: pointer;
}

li a:hover{
    color: rgb(221, 221, 221);
}
.nright button:hover{
    background-color:rgb(59, 59, 59);
}
button a{
    color: white;
}

.nav-rez{
    display: none;
    cursor: pointer;
}

.bar{
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    background-color: white;
}


@media screen and (max-width:1220px){
    header{
        padding: 0px 10px;
    }
}


@media screen and (max-width:776px){

    .nav-rez{
        display: block;
        padding-right: 7px;
      }
    
      .nav-rez.active .bar:nth-child(2){
        opacity: 0;
      }
      .nav-rez.active .bar:nth-child(1){
        transform: translateY(8px) rotate(45deg);
      }
      .nav-rez.active .bar:nth-child(3){
        transform: translateY(-8px) rotate(-45deg);
      }

      .nav-menu{
        position: fixed;
        left: -100%;
        top: 41px;
        gap: 0;
        display: flex;
        flex-direction: column;
        background-color: #262626;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: 0.3s;
      }
    
      .nav-item{
        font-size: 17px;
        margin: 10px 0;
      }
    
      .nav-menu.active{
        left: 0;
      }
    }
table {
      border-collapse: collapse;
      width: 100%;
      margin: 20px 0;
      font-size: 16px;
    }

    thead {
      background-color: #f2f2f2;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    th {
      font-weight: bold;
      background-color:grey;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    tr:nth-child(even) button{
      background-color: white;
    }
    button{
        border:none;
        padding:5px;
        width: 50px;
    }
    #edit-btn:hover{
        color:white;
        background-color:green; 
    }
    #delete-btn:hover{
        color:white;
        background-color:red; 
    }
    #table{
      max-width:1300px;
    }
    footer{
      padding-top: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    th{
      color:white;
    }
    #add-btn{
      background-color:#9ECEA3;
      cursor: pointer;
    }
    #add-btn:hover{
      background-color:white;

    }
    #usr-btn:hover{
      background-color:white;
    }
    #b{
      width:auto;
    }
    </style>
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
                echo '<button id="b"><a href="../Login form/logoutUser.php">Log out</a></button>';
            }
  ?>

</div>
</header>

<footer>
<table id="table">
  <thead>
    
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Surname</th>
      <th>Email</th>
      <th>Edit</th>
      <th>Delete</th>
      <th><a href="addNewAdmin.php"><button id="add-btn" style="width:auto;">Add new Admin</button></a><a href="users.php"><button style="margin-left:5px" id="usr-btn">Users</button></a></th>
    </tr>
  </thead>
  <tbody>


<tr>
<?php

        $modeli = new Model();
        $rows = $modeli->fetchAdmin();
        if(!empty($rows)){
            foreach($rows as $row){  
?>
<tr>
  <td><?php echo $row['ID'] ?></td>
  <td><?php echo $row['name'] ?></td>
  <td><?php echo $row['surname'] ?></td>
  <td><?php echo $row['email'] ?></td>
  <td><a href="editAdmin.php?id=<?php echo $row['ID']; ?>"><button id="edit-btn">Edit</button></a></td>
  <td><button id="delete-btn" onclick="checkDelete(<?php echo $row['ID']; ?>)">Delete</button></td>
  </tr>
  <?php
            }
        }else{
            echo '<tr><td colspan="8" align="center">No Data</td></tr>';
        }
?>

 </tbody>  
</table> 
 
  </footer>  
  <script src="script/scriptnav.js"></script>
  <script>
  function checkDelete(delId){
      if(confirm('Deshironi te fshini Adminin?')){
          document.location.href = 'deleteAdmin.php?id='+delId;
          return true;
      }
  }
</script>
</body>
</html>