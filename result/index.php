<?php
    include_once('../config.php');
    include_once(CON_FRONT . 'ResultController.php');
    $results = index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link rel="shortcut icon" href="../../resources/image/2222.png" type="image/x-icon">
    <!-- links -->
    <?php include_once('../layout/links.php'); ?>
    <!-- end of links -->
</head>

<body>
    <!-- navBar -->
    <?php include_once('../layout/navBar.php'); ?>
    <!-- end of navBar -->
    <div class="container-fluid mt-3">
        <h1 style="text-align: center;">Student's Annual Exam Result</h1>
        <table class="table table-hover table-success table-striped">
            <thead>
            <tr> 
                <th>YEAR</th>
                <th>TOTAL</th>
                <th>PASS</th>
                <th>SCHOLARSHIP</th>
                <th>OPTION</th>
                
            </tr>
            </thead>
            <tbody>
                <?php 
            foreach($results as $r)
            {
                ?>
            <tr>
                <td><?= $r->year ?></td>
                <td><?= $r->total_student ?></td>
                <td><?= round($r->pass , 2)?>%</td>
                <td><?= $r->scholarship ?></td>

                <td><a class="btn-sm btn-warning float" href="show.php?year=<?= $r->year ?>">Details</a></td>
           
            </tr>
            <?php
            }
        ?>
            </tbody>
        </table>

    </div>
    <footer style="padding-left: 45%;margin-top:120px;">Created by Pentagon @2022</footer>
</body>

</html>