<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<script src="https://kit.fontawesome.com/6ddeedc0cf.js" crossorigin="anonymous"></script>

    <div class="grid grid-cols-10">

        <!-- sidebar -->
        <?php include "../sidebar.php"; ?>

        <!-- Header -->
        <?php include "../header.php"; ?>
        
        <!-- =============================================================== -->
        <!-- //////////////////////////NEW INVOICE///////////////////////////-->
        <!-- =============================================================== -->
        <?php include "php/new-invoice.php"; ?>
        
        
</body>

</html>