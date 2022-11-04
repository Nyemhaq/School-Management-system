<?php
    include_once('../config.php');
    include_once(CON_FRONT . 'TeacherController.php');
    $teachers = show();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
     <!-- links -->
  <?php include_once('../layout/links.php'); ?>
  <!-- end of links -->
</head>
<body>
      <!-- navBar -->
      <?php include_once('../layout/navBar.php'); ?>
    <!-- end of navBar -->
    <h1><?= $teachers ?></h1>
    <h1></h1>
    <a href="index.php">LIST</a>
    <br>
    <br>
<form action="" method="POST">
        <label for="teachers_name">Teachers_name:</label>
        <input type="text" name="teachers_name" id="">
        <br>
        <br>
        <label for="personal_id">personal_id:</label>
        <input type="number" name="personal_id" id="">
        <br>
        <br>
        <label for="designation">designation:</label>
        <input type="number" name="designation" id="">
        <br>
        <br>
        <label for="join_date">join_date:</label>
        <input type="number" name="join_date" id="">
        <br>
        <br>
        <label for="image"></label>
        <input type="number" name="image" id="">
        <br>
        <br>
        <!-- <label for="year">Year:</label>
        <input type="number" name="year" id="">
        <br>
        <br>
        <label for="pass">Pass:</label>
        <input type="number" name="pass" id="">
        <br>
        <br> -->
        <input type="submit" name="save" id="">
    </form>
</body>
</html>