<?php 
    include '../modeli.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $delete = $model->deleteAdmin($id);
 
    if ($delete) {
        echo "<script>alert('delete successfully');</script>";
        echo "<script>window.location.href = 'user.php';</script>";
    }
 ?>