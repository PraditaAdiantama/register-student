<?php 
$pageName = basename($_SERVER['PHP_SELF']);
$headerText = '';

switch ($pageName) {
    case 'index.php':
        $headerText = 'Simple CRUD';
        break;
    case 'edit-form.php':
        $headerText = 'Edit Student';
        break;
    case 'list-student.php':
        $headerText = 'All Registered Student';
        break;
    case 'register-form.php':
        $headerText = 'Register Student';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/main.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins';
        }

        .container-cstm {
            max-width: 1000px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <header class="border-b-2 mb-5 fixed w-full z-10">
        <div class="flex justify-between container-cstm py-5">
            <h1 class="font-semibold text-xl"><a href="../index.php">SMK Coding</a></h1>
            <h3><?php echo $headerText ?></h3>
        </div>
    </header>