<?php 

    class Model{

        private $server = 'localhost';
        private $username = 'root';
        private $password;
        private $database = 'cnnnews';
        private $conn;

        public function __construct(){
            try{
                $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
            }catch(Exception $ex){
                echo 'connecton failed ' .$ex->getMessage();
            }
        }

    
    
        public function insertUserData(){
            if(isset($_POST['submit'])){

                $email = $_POST['email'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];

                if(empty($email)){
                    echo "<script>alert('email empty!!');</script>";
                }else if(empty($password)){
                    echo "<script>alert('password empty!!');</script>";
                }else if(empty($cpassword)){
                    echo "<script>alert('confirm password empty!!');</script>";
                }else if($password != $cpassword){
                    echo "<script>alert('password doesn\'t match!!');</script>";
                }else{
                    $query = "SELECT COUNT(*) FROM user WHERE email = '$email'";
                    $result = $this->conn->query($query);
                    $count = mysqli_fetch_array($result)[0];
                    if($count > 0){
                        echo "<script>alert('email already exists!!');</script>";
                    }else{
                        $query = "INSERT INTO user(email,password) VALUES('$email','$password')";
                        if($sql = $this->conn->query($query)){
                            echo "<script>alert('records added successfully');</script>";
                        }else{
                            echo "<script>alert('failed');</script>";
                        }
                    }
                }

            }
        }
        

            
        public function insertAdmin(){
            if(isset($_POST['submit'])){

                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                if(empty($name) && empty($surname)){
                    echo "<script>alert('name or surname is empty!!');</script>";
                }
                else if(empty($email)){
                    echo "<script>alert('email empty!!');</script>";
                }else if(empty($password)){
                    echo "<script>alert('password empty!!');</script>";
                }else{
                    $query = "SELECT COUNT(*) FROM admin WHERE email = '$email'";
                    $result = $this->conn->query($query);
                    $count = mysqli_fetch_array($result)[0];
                    if($count > 0){
                        echo "<script>alert('this admin already exist!!');</script>";
                    }else{
                        $query = "INSERT INTO admin(name,surname,email,password) VALUES('$name','$surname','$email','$password')";
                        if($sql = $this->conn->query($query)){
                            echo "<script>alert('admin added successfully');</script>";
                            header('location: user.php');
                        }else{
                            echo "<script>alert('failed');</script>";
                        }
                    }
                }

            }
        }
    
    
    public function insertnews(){
        if(isset($_POST['insert'])){
            session_start();
            $chapter = $_POST['chapter'];
            $image=$_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $title = $_POST['title'];
            $category = $_POST['category'];

            if(!empty($category)){
            $subCategory = $_POST['radio-button-group'];
            }

            $about = $_POST['about'];
            $admin= $_SESSION['ID'];
            
            if (!file_exists('img')){
                mkdir('img', 0777, true);
            }
            if ($image) {
                move_uploaded_file($tmp_name, "../img/$image");
            }
            
            if(empty($chapter) || empty($image) || empty($title) || empty($category) || empty($subCategory) || empty($about)){
                echo "<script>alert('empty feields');</script>";
            }else{

                $query = "SELECT * FROM news WHERE chapter='$chapter' AND title='$title' AND category='$category' AND subCategory='$subCategory' AND about='$about'";
                $result = $this->conn->query($query);
                if($result->num_rows > 0){
                    echo "<script>alert('This News already exists in the database.');</script>";
                }else{
                    $query = "INSERT INTO news(chapter,photo,title,category,subCategory,about,admin) VALUES('$chapter ','$image','$title','$category','$subCategory','$about','$admin')";

                    if($sql = $this->conn->query($query)){
                        echo "<script>alert('records added successfully');</script>";
                    }else{
                        echo "<script>alert('failed');</script>";
                    }
                }
            }
        }
    }


    public function fetch($where,$sub){
        $data = null;
        $query = "SELECT * FROM news WHERE category='$where' && subCategory='$sub' ORDER BY ID DESC";

        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }


    public function fetchByID($id){
        $data = null;
        $query = "SELECT * FROM news WHERE ID='$id'";
        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function fetchAdminPost($id){
        $data = null;
        $query = "SELECT a.name,a.surname FROM admin a,news n WHERE a.ID=n.admin AND n.ID='$id';";
        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function getDate($id){
        $query = "SELECT DATE_FORMAT(date, '%M %e, %Y') AS formatted_date FROM news WHERE ID='$id';";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['formatted_date'];
        } else {
            return null;
        }
    }

    public function getTime($id) {
        $query = "SELECT DATE_FORMAT(date, '%l:%i %p') AS formatted_time FROM news WHERE ID='$id';";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['formatted_time'];
        } else {
            return null;
        }
    }

    public function fetchNewNews(){
        $data = null;
        $query = "SELECT * FROM news ORDER BY ID DESC LIMIT 3";
        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }


    public function insertContact(){
        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $query = "INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
            
            if($sql = $this->conn->query($query)){
                echo "<script>alert('Message send successfully');</script>";
            }else{
                echo "<script>alert('failed');</script>";
            }
        }   
    }

    public function fetchContact(){
        $data = null;
        $query = "SELECT * FROM contact";
        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function fetchNews(){
        $data = null;
        $query = "SELECT * FROM news ORDER BY ID DESC";

        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }
    

    public function deleteContact($id){
 
        $query = "DELETE FROM contact where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }

    public function deleteNews($id){
 
        $query = "DELETE FROM news where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }

    public function deleteAdmin($id){
 
        $query = "DELETE FROM admin where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }


    public function deleteUser($id){
 
        $query = "DELETE FROM user where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }




    public function edit($id){
 
        $data = null;

        $query = "SELECT * FROM news WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data){

        $query = "UPDATE news SET chapter='$data[chapter]', photo='$data[photo]', title='$data[title]', about='$data[about]' WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }


    public function editAdmin($id){
 
        $data = null;

        $query = "SELECT * FROM admin WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }

    public function updateAdmin($data){

        $query = "UPDATE admin SET name='$data[name]', surname='$data[surname]', email='$data[email]' WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }


    public function editAboutus($id){
 
        $data = null;

        $query = "SELECT * FROM aboutus WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }

    public function updateAboutus($data){

        $query = "UPDATE aboutus SET info='$data[about]',photo='$data[photo]' WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }



    public function loginUser(){
  
        if(isset($_POST['login'])){

            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
            if($sql = $this->conn->query($query)){
                if($r=mysqli_fetch_array($sql)){      
                    session_start();              
                    $_SESSION['email']=$r['email'];
                    header('location: ../index.php');
                }else{
                    echo "Incorrect username or password.";
                }
            }

         }
    }


    public function loginAdmin(){
  
        if(isset($_POST['login'])){

            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
            if($sql = $this->conn->query($query)){
                if($r=mysqli_fetch_array($sql)){ 
                         
                    session_start();       
                    $_SESSION['ID']=$r['ID'];       
                    $_SESSION['name']=$r['name'];
                    $_SESSION['surname']=$r['surname'];
                    header('location: ../adminPage/newsposted.php');
                }else{
                    echo "Incorrect username or password.";
                }
            }

         }
    }



    public function fetchAdmin(){
        $data = null;
        $query = "SELECT * FROM admin";
        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function fetchUser(){
        $data = null;
        $query = "SELECT * FROM user";
        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function fetchAboutUs(){
        $data = null;
        $query = "SELECT * FROM aboutus";
        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }

}
?>