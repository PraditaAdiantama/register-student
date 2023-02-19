<?php include('./components/header.php') ?>
<div class="container-cstm flex flex-col justify-center items-center h-screen">
    <h4 class="menu-header">Menu</h4>
    <ul class="flex gap-5 text-white my-5">
        <li><a href="pages/register-form.php" class="p-3 bg-blue-500 rounded-md">New Register</a></li>
        <li><a href="pages/list-student.php" class="p-3 bg-green-500 rounded-md">Registered</a></li>
    </ul>
    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'Success'){
                    echo "Register Succesfully";
                }else{
                    echo "Register Failed";
                }
            ?>
        </p>
    <?php endif; ?>
</div>