<?php
include_once('../config.php');
include_once(CON_FRONT.'LoginController.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="1111.png" type="image/x-icon">
  <!-- links -->
  <?php include_once('../layout/links.php'); ?>
  <!-- end of links -->
</head>

<body>

  <!-- content -->
  <form action="" method="post" style="margin-left:160px;margin-right:160px;margin-top:60px;padding:40px">

    <div class="container" style="padding-left:80px;padding-right:80px;">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required="required">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required="required">
      <div class="form-group">
        <div class="row">
          <div class="col col-12 col-sm-12 col-md-2">
          <button type="button" class="btn btn-warning">Cancel</button>
          </div>
          <div class="col col-12 col-sm-12 col-md-8">
          </div>
          <div class="col col-12 col-sm-12 col-md-2">
          <input type="submit" class="btn btn-primary float-end" name="submit" style="width:100%">
          </div>
        </div>
        <!-- <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button> -->
        <div class="clearfix">
          <label class="float-left form-check-label">
            <!-- <input type="checkbox"> Remember me -->
          </label>
        </div>

        <div class="container">
          <!-- <span style="padding-right:70px;" class="psw">Forgot <a href="#">password?</a></span> -->
        </div>
  </form>
  <footer style="padding-left: 45%;margin-top:120px;">Created by Pentagon @2022</footer>
</body>

</html>