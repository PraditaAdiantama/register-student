<?php 
include('../config.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM prospective_students WHERE id=$id";
    $query = mysqli_query($con, $sql);


    if($query){
        header('Location: ../pages/list-student.php');
    }else{
        die("Failed to delete");
    }
}else{
    die('Unauthorize');
}