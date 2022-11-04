<?php
include_once('../config.php');
include_once(CON_FRONT.'NoticeController.php');
$notices = index();
// print_r($notices);
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
        <div class="row">
            <?php foreach($notices as $n)
            { ?>
            <div class="col col-12 col-sm-12 col-md-4">
                <!-- <h2>Card Image</h2>
                <p>Image at the top (card-img-top):</p> -->
                <div class="card" style="width:400px">
                    <div class="card-body">
                        <h5 class="card-title textLimitHead"><b><?= $n->title ?></b>
                    <br>
                <small>[<?= $n->date ?>]</small>
            </h5>
                        <p class="card-text textLimitDesc"><?= $n->description ?></p>
                        <a href="show.php?id=<?= $n->id ?>" class="btn btn-primary">আরোও দেখুন</a>
                    </div>
                </div>
                <br>
            </div>
            <?php } ?>


        </div>





    </div>
    <!-- end of editable -->

    <!-- end of content -->

    <!-- footer -->
    <!-- <?php include_once('../layout/footer.php'); ?> -->
    <!-- end of footer -->
    <footer style="padding-left: 45%;margin-top:120px;">Created by Pentagon @2022</footer>
</body>

</html>