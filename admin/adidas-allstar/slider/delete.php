<?php 
    include 'model.php';
    $model = new Model1();
    $id = $_REQUEST['id'];
    $delete = $model->delete($id);
 
    if ($delete) {
        echo "<script>alert('delete successfully');</script>";
        echo "<script>window.location.href = 'slider.php';</script>";
    }
 ?>