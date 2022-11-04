<?php
include_once('../config.php');
include_once(CON_FRONT.'NoticeController.php');
$notice = show();
// print_r($event);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notice</title>
  <link rel="shortcut icon" href="../../resources/images/logo/2222.png" type="image/x-icon">
  <!-- links -->
  <?php include_once('../layout/links.php'); ?>
  <!-- end of links -->
</head>

<body>
  <!-- navBar -->
  <?php include_once('../layout/navBar.php'); ?>
  <!-- end of navBar -->

  <!-- content -->
  <div class="container-fluid mt-3">
    <!-- edititable -->
    <div class="card">
      <div class="card-header">
        <h2><?= $notice[0]->title ?><small style="text-align: right;"></small></h2>
      </div>
      </div>
      <br>
      <div class="card-footer">
        <p><?= $notice[0]->description ?></p>
      </div>
    </div>
  </div>
  <a class="btn btn-warning float-start" style="margin-left:12px; margin-top:12px;" href="../../views/notice/index.php">Back to the list</a>
  <!-- end of editable -->

  <!-- end of content -->

  <!-- footer -->
  <!-- <?php include_once('../layout/footer.php'); ?> -->
  <!-- end of footer -->
  <footer style="padding-left: 45%;margin-top:120px;">Created by Pentagon @2022</footer>
</body>

</html>