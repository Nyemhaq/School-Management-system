<?php
    include_once('../config.php');
    include_once(CON_FRONT . 'StudentController.php');
    $total_student_2021 = index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="shortcut icon" href="../../resources/images/logo/1111.png" type="image/x-icon">
    <!-- links -->
    <?php include_once('../layout/links.php'); ?>
    <!-- end of links -->
</head>
<body>
      <!-- navBar -->
      <?php include_once('../layout/navBar.php'); ?>
    <!-- end of navBar -->
    <br>
    <br>
    <h1 style="text-align: center;">Student's List of 2021</h1>
    <br>
    <br>
    <table class="table table-hover table-success">
        <tr>
            <th>CLASS</th>
            <th>BOY</th>
            <th>GIRL</th>
        </tr>
        <?php 
            foreach($total_student_2021 as $t)
            {
        ?>
                <tr>
            
                    <td><?= $t->CLASS ?></td>
                    <td><?= $t->BOY ?></td>
                    <td><?= $t->GIRL ?></td>
    
                </tr>
        <?php
            }
        ?>
    </table>
    <footer style="padding-left: 45%;margin-top:120px;">Created by Pentagon @2022</footer>
</body>
</html>

