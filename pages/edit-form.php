<?php
include('../config.php');
include('../components/header.php');

if (!isset($_GET['id'])) {
    header('Location: ../pages/list-student');
}

$id = $_GET['id'];

$sql = "SELECT * FROM prospective_students WHERE id=$id";
$query = mysqli_query($con, $sql);
$student = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data not found");
}
?>

<form action="../handlers/process-edit.php" method="POST" class="container-cstm flex flex-col justify-center h-screen">
    <div class="flex flex-col gap-y-3 bg-slate-200 p-7 rounded-md">
        <h3 class="text-xl font-semibold">Register</h3>
        <input type="hidden" name="id" value="<?php echo $student['id'] ?>">
        <div>
            <label for="nama">Name</label>
            <br>
            <input type="text" name="name" class="h-10 border-2 rounded-md px-4 w-full" value="<?php echo $student['name'] ?>" />
        </div>
        <div>
            <label for="alamat">Address</label>
            <br>
            <input name="address" class="h-10 w-full border-2 rounded-md px-4" value="<?php echo $student['address'] ?>"></input>
        </div>
        <div>
            <label for="gender">Gender</label>
            <br>
            <label><input type="radio" name="gender" value="men" <?php echo $student['gender'] == 'men' || $student['gender'] == 'laki-laki' ? "checked" : "" ?>> Men</label>
            <label><input type="radio" name="gender" value="women" <?php echo $student['gender'] == 'women' || $student['gender'] == 'perempuan' ? "checked" : "" ?>> Women</label>
        </div>
        <div>
            <label>Religion</label>
            <br>
            <select name="religion" class="border-2 rounded-md py-1 px-2 w-full">
                <option <?php echo $student['religion'] == 'Islam' ? "selected" : "" ?>>Islam</option>
                <option <?php echo $student['religion'] == 'Kristen' ? "selected" : "" ?>>Kristen</option>
                <option <?php echo $student['religion'] == 'Hindu' ? "selected" : "" ?>>Hindu</option>
                <option <?php echo $student['religion'] == 'Budha' ? "selected" : "" ?>>Budha</option>
                <option <?php echo $student['religion'] == 'Konghucu' ? "selected" : "" ?>>Konghucu</option>
            </select>
        </div>
        <div>
            <label>Origin School</label>
            <br>
            <input type="text" name="origin_school" class="h-10 w-full border-2 rounded-md px-4 w-80" value="<?php echo $student['origin_school'] ?>"/>
        </div>
        <input type="submit" value="Save" name="save" class="py-3 px-5 rounded-md bg-green-500 text-white w-max" />
    </div>
</form>