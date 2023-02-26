<?php 
    include '../modeli.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $delete = $model->deleteUser($id);
 
    if ($delete) {
        echo "<script>alert('delete successfully');</script>";
        echo "<script>window.location.href = 'users.php';</script>";
    }
 ?>