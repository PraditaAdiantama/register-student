<?php
include('../components/header.php');
include('../config.php');
?>
<main>
    <div class="container-cstm pt-32">
        <a href="register-form.php" class="text-white p-3 rounded-md bg-blue-500 text-right">Add New</a>
        <table class="w-full text-center mt-5">
            <thead class="bg-green-400">
                <th class="px-3 py-3">Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Religion</th>
                <th>School Origin</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM prospective_students";
                $query = mysqli_query($con, $sql);
                $no = 1;

                if (!$query) {
                    echo "Somthing Went Wrong";
                } else {
                    while ($student = mysqli_fetch_array($query)) { ?>
                        <tr class="border-b-2 <?php echo $no % 2 == 0 ? "bg-slate-100" : "bg-white" ?>">
                            <td class="py-3"><?php echo $no++ ?></td>
                            <td><?php echo $student['name'] ?></td>
                            <td><?php echo $student['address'] ?></td>
                            <td><?php echo $student['gender'] ?></td>
                            <td><?php echo $student['religion'] ?></td>
                            <td><?php echo $student['origin_school'] ?></td>
                            <th>
                                <?php
                                echo "<a href='./edit-form.php?id=" . $student['id'] . "' class='mr-5 px-3 py-2 bg-yellow-400 text-white font-normal rounded-md'>Edit</a>";
                                echo "<a href='../handlers/delete.php?id=" . $student['id'] . "' class='p-2 bg-red-500 text-white rounded-md font-normal'>Delete</a>";
                                ?>
                            </th>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</main>