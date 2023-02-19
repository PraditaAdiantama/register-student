<?php include('../components/header.php') ?>

<form action="../handlers/process-register.php" method="POST" class="container-cstm flex flex-col justify-center h-screen">
    <div class="flex flex-col gap-y-3 bg-slate-200 p-7 rounded-md">
        <h3 class="text-xl font-semibold">Register</h3>
        <div>
            <label for="nama">Name</label>
            <br>
            <input type="text" name="name" class="h-10 border-2 rounded-md px-4 w-full" />
        </div>
        <div>
            <label for="alamat">Address</label>
            <br>
            <input name="address" class="h-10 w-full border-2 rounded-md px-4"></input>
        </div>
        <div>
            <label for="gender">Gender</label>
            <br>
            <label><input type="radio" name="gender" value="men"> Men</label>
            <label><input type="radio" name="gender" value="women"> Women</label>
        </div>
        <div>
            <label>Religion</label>
            <br>
            <select name="religion" class="border-2 rounded-md py-1 px-2 w-full">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Konghucu</option>
            </select>
        </div>
        <div>
            <label>Origin School</label>
            <br>
            <input type="text" name="origin_school" class="h-10 w-full border-2 rounded-md px-4 w-80" />
        </div>
        <input type="submit" value="Register" name="register" class="py-3 px-5 rounded-md bg-green-500 text-white w-max" />
    </div>
</form>