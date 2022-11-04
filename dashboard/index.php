<?php
include_once('../config.php');
include_once(CON_FRONT.'DashboardController.php');
$notices = notice();
$events = event();
// print_r($notices);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../resources/images/logo/10.jpg" type="image/x-icon">
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
        <div>
            <h1 class="bg-success text-light" style="text-align: center; padding:10px;"><b>শালধর সরকারি প্রাথমিক
                    বিদ্যালয়</b></h1>
        </div>
        <!-- Carousel -->
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-8 col-lg-8">
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../resources/images/carousel/1.jpg" alt="shaldhar school" class="d-block"
                                style="width:100%; height: 635px;">
                            <div class="carousel-caption">
                                <h2 style="color:black;font:bolder"><b>শালধর সরকারি প্রাথমিক বিদ্যালয়</b></h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../../resources/images/carousel/22.jpg" alt="mother langage day" class="d-block"
                                style="width:100%; height: 635px;">
                            <div class="carousel-caption">
                                <h2>আন্তর্জাতিক মাতৃভাষা দিবস উৎযাপন</h2>
                                <p>২০২২ইং</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../../resources/images/carousel/3.jpg" alt="shahid minar" class="d-block"
                                style="width:100%; height: 635px;">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../../resources/images/carousel/22.jpg" alt="class room" class="d-block"
                                style="width:100%; height: 635px;">
                            <div class="carousel-caption">
                                <h2>শ্রেনিকক্ষে পাঠদান</h2>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
                <!-- end carosel -->
            </div>
            <div class="col col-12 col-sm-12 col-md-4 col-lg-4">
                <div class="row">
                    <div class="col col-6 col-sm-6 col-md-6">
                        <img src="../../resources/images/7.png" alt="" style="width:110% ; height:90%">
                        <h7>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspজাতির জনক</h7><br>
                        <h7>বঙ্গবন্ধু শেখ মুজিবুর রহমান</h7>
                    </div>
                    <div class="col col-6 col-sm-6 col-md-6">
                        <img src="../../resources/images/8.jpg" alt="" style="width:95%;height:90%">
                        <h7>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspমাননীয় প্রধানমন্ত্রী</h7><br>
                        <h7>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspশেখ হাসিনা</h7>

                    </div>
                </div>
                <div class="card" style="margin-top:25px;">
                    <div class="card-header bg-dark text-light" style="font: 900;">নোটিশ বোর্ড <a class="btn-sm btn-success float-end" href="../notice/index.php">VIEW ALL</a></div>
                    <div class="card-body bg-dark">
                        <table class="table table-bordered table-striped table-dark">
                            <tbody>

                                <?php foreach($notices as $n)
                                { ?>
                                <tr>
                                    <td>
                                        <?= $n->title ?><br><small>[<?= $n->date ?>]</small>
                                        <a class="btn-sm btn-warning float-end" href="../notice/show.php?id=<?= $n->id ?>">Details</a>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="card-footer"></div> -->
                </div>
            </div>
        </div>
        <!-- edititable -->
        <!-- event -->
        <br>
        <br>
        <div class="row">
            <?php foreach($events as $e)
            { ?>
            <div class="col col-12 col-sm-12 col-md-4">
                <!-- <h2>Card Image</h2>
                <p>Image at the top (card-img-top):</p> -->
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="<?=RSR?>images/events/<?= $e->image_1 ?>" alt="Card image"
                        style="width:100%;height:300px;">
                    <div class="card-body">
                        <h5 class="card-title textLimitHeader"><b><?= $e->title ?></b></h5>
                        <p class="card-text textLimitDesc"><?= $e->description ?></p>
                        <a href="../event/show.php?id=<?= $e->id ?>" class="btn btn-primary">আরোও দেখুন</a>
                    </div>
                </div>
                <br>
            </div>
            <?php } ?>


        </div>
        <!-- end of event -->
        <!-- end of editable -->
    </div>
    <!-- end of content -->

    <!-- footer -->
    <!-- <?php include_once('../layout/footer.php'); ?> -->
    <!-- end of footer -->
    <footer style="padding-left:45%;margin-top :120px;">Created by Pentagon @2022</footer>
</body>

</html>