<?php
include_once('../config.php');
include_once(CON_FRONT.'DashboardController.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="shortcut icon" href="../../resources/images/logo/10.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="10.jpg" type="image/x-icon">
    <!-- links -->
    <?php include_once('../layout/links.php'); ?>
    <!-- end of links -->
</head>

<body>
    <!-- navBar -->
    <?php include_once('../layout/navBar.php'); ?>
    <!-- end of navBar -->
    
    <!-- content -->
    <h3 style="margin-left:30%;margin-top:40px;"><b>এক নজরে বিদ্যালয়ের পরিচিতি</b></h3>
    <div class="row">
        <div class="col col-md-2">
            
            </div>
        <div class="col col-md-8">
            <table class="table table-success">
                <tr>
                    <td>বিদ্যালয়ের EIIN নাম্বার</td>
                    <td>১০৬৭৭০</td>
                </tr>
                <tr>
                    <td>বিদ্যালয়ের নাম</td>
                    <td>শালধর সরকারি প্রাথমিক বিদ্যালয়</td>
                </tr>
                <tr>
                    <td>স্থাপিত</td>
                    <td>১৯৩৭ইং</td>
                </tr>
                <tr>
                    <td>ঠিকানা</td>
                    <td>মুন্সিরবাজার ক্লাস্টার,শালধর</td>
                </tr>
                <tr>
                    <td>উপজেলা</td>
                    <td>আদর্শ সদর</td>
                </tr>
                <tr>
                    <td>জেলা</td>
                    <td>কুমিল্লা</td>
                </tr>
                <tr>
                    <td>পোস্টঅফিস</td>
                    <td>কুমিল্লা</td>
                </tr>
                <tr>
                    <td>পোস্টাল কোড</td>
                    <td>৩৫০০</td>
                </tr>
                <tr>
                    <td>বিভাগ</td>
                    <td>চট্টগ্রাম</td>
                </tr>
                <tr>
                    <td>মোবাইল ফোন</td>
                    <td>+৮৮০ ১৫৫৪৩৩৯৩৬৬</td>
                </tr>
                <tr>
                    <td>শ্রেনী কার্যক্রম</td>
                    <td>প্রাক-প্রাথমিক থেকে পঞ্চম</td>
                </tr>
                <tr>
                    <td>মোট শ্রেণিকক্ষ সংখ্যা</td>
                    <td>৫</td>
                </tr>
                <tr>
                    <td>মোট শিক্ষার্থী</td>
                    <td>৩৪৮</td>
                </tr>
                <tr>
                    <td>ভবন সংখ্যা</td>
                    <td>২</td>
                </tr>
            </table>
        </div>
    </div>
    <footer style="padding-left: 45%;margin-top:120px;">Created by Pentagon @2022</footer>
</body>
<style>
    td{
        font-weight: bold;
    }
</style>