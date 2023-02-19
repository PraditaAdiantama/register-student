<?php 
include('../config.php');

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $origin_school = $_POST['origin_school'];

    $sql = "INSERT INTO prospective_students (name, address, gender, religion, origin_school) VALUE ('$name', '$address', '$gender', '$religion', '$origin_school')";
    $query = mysqli_query($con,$sql);

    if($query){
        header('Location: ../index.php?status=Success');
    }else{
        header('Location: ../index.php?status=Failed');
    }
}else{
    die("Unauthorize");
}
?>