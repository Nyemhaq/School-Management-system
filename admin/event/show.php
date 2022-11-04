<?php
include_once('../config.php');
include_once(CON_FRONT.'EventController.php');
$event = show();
// print_r($event);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event</title>
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
        <h2><?= $event[0]->title ?><small style="text-align: right;"></small></h2>
      </div>
      <div class="row" style="text-align: center;" >
        <div class="col col-12 col-sm-12 col-md-4">
          <img src="<?=RSR?>images/events/<?= $event[0]->image_1 ?>" alt="" style="height: 100%;width:300px;">
        </div>
        <div class="col col-12 col-sm-12 col-md-4">
          <img src="<?=RSR?>images/events/<?= $event[0]->image_2 ?>" alt="" style="height: 100%;width:300px;">
        </div>
        <div class="col col-12 col-sm-12 col-md-4">
          <!-- <div class="card-body"> -->
          <img src="<?=RSR?>images/events/<?= $event[0]->image_3 ?>" alt="" style="height: 100%;width:300px;">
          <!-- </div> -->
        </div>
      </div>
      <br>
      <div class="row" style="text-align: center;">
        <div class="col col-12 col-sm-12 col-md-4" >
          <img src="<?=RSR?>images/events/<?= $event[0]->image_4  ?>" alt="" style="height: 200px;width:300px;">
        </div>
        <div class="col col-12 col-sm-12 col-md-4">
          <img src="<?=RSR?>images/events/<?= $event[0]->image_5  ?>" alt="" style="height: 200px;width:300px;">
        </div>
        <div class="col col-12 col-sm-12 col-md-4">
          <!-- <div class="card-body"> -->
          <img src="<?=RSR?>images/events/<?= $event[0]->image_6  ?>" alt="" style="height: 200px;width:300px;">
          <!-- </div> -->
        </div>
      </div>
      <br>
      <div class="card-footer">
        <p><?= $event[0]->description ?></p>
      </div>
    </div>
  </div>
  <a class="btn btn-warning float-start" style="margin-left:12px; margin-top:12px;" href="../../../views/admin/event/index.php">Back</a>




  <!-- end of editable -->

  <!-- end of content -->

  <!-- footer -->
  <!-- <?php include_once('../layout/footer.php'); ?> -->
  <!-- end of footer -->
  <footer style="padding-left: 45%;margin-top:120px;">Created by Pentagon @2022</footer>
</body>

</html>