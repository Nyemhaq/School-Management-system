<?php
include_once('../config.php');
include_once(CON_FRONT.'NoticeController.php');
$notices = index();
// print_r($events);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link rel="shortcut icon" href="2222.png" type="image/x-icon">
    <!-- links -->
    <?php include_once('../layout/links.php'); ?>
    <!-- end of links -->
</head>

<body>
    <!-- navBar -->
    <?php include_once('../layout/navBar.php'); ?>
    <!-- end of navBar -->

    <!-- content -->
    <form action="" method="POST" class="card-body" style="width:50%;margin-left:20%;padding-left:15%;" enctype="multipart/form-data">
        <label for="name">Title:</label>
        <input type="text" name="title" class="form-control" id="" placeholder="Title">
        <br>
        <br>
        <label for="name">Description:</label>
        <input type="textarea" name="description" class="form-control" id="" placeholder="Description">
        <!-- <br>
        <input type="file" name="image_1" id="">
        <br>
        <input type="file" name="image_2" id="">
        <br>
        <input type="file" name="image_3" id="">
        <br>
        <input type="file" name="image_4" id="">
        <input type="file" name="image_5" id="">
        <input type="file" name="image_6" id=""> -->
        <br>
        <br>
        <a href="../../../views/event/index.php" class="btn btn-warning">BACK TO LIST</a>
        <input class="btn btn-success float-end" type="submit" name="SAVE" id="" value="SAVE" class="float-right"
            class="rounded-circle">
        <br>
        <br>
    </form>

    </form>
</body>