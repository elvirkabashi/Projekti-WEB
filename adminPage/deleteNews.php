<?php 
    include '../modeli.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $delete = $model->deleteNews($id);
 
    if ($delete) {
        echo "<script>alert('delete successfully');</script>";
        echo "<script>window.location.href = 'newsposted.php';</script>";
    }
 ?>