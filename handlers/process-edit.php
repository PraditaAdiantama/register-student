<?php

include("../config.php");

if(isset($_POST['save'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $origin_school = $_POST['origin_school'];

    $sql = "UPDATE prospective_students SET name='$name', address='$address', gender='$gender', religion='$religion', origin_school='$origin_school' WHERE id=$id";
    $query = mysqli_query($con, $sql);

    if( $query ) {
        header('Location: ../pages/list-siswa.php');
    } else {
        die("Failed to save change...");
    }


} else {
    die("Unaothorize");
}

?>