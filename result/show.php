<?php
    include_once('../config.php');
    include_once(CON_FRONT . 'ResultController.php');
    $results = show();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="shortcut icon" href="../../resources/images/logo/2222.png" type="image/x-icon">
    <!-- links -->
    <?php include_once('../layout/links.php'); ?>
    <!-- end of links -->
</head>

<body>
    <!-- navBar -->
    <?php include_once('../layout/navBar.php'); ?>
    <!-- end of navBar -->
    <div class="container-fluid mt-3">
        <h1 style="text-align: center;">Student's Annual Exam Result - <?= $results[0]->year ?></h1>
        <table class="table table-hover table-success table-striped">
            <thead>
            <tr> 
                <th>ID</th>
                <th>CLASS</th>
                <th>BOY</th>
                <th>GIRL</th>
                <th>TOTAL</th>
                <th>SCHOLARSHIP</th>
                <!-- <th>YEAR</th> -->
                <th>PASS</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            foreach($results as $r)
            {
        ?>
            <tr>
                <td><?php echo $r->id; ?></td>
                <td><?= $r->class ?></td>
                <td><?= $r->boy ?></td>
                <td><?= $r->girl ?></td>
                <td><?= $r->total ?></td>
                <td><?= $r->scholarship ?></td>
                <!-- <td><?= $r->year ?></td> -->
                <td><?= $r->pass ?></td>
            </tr>
            <?php
            }
        ?>
            </tbody>
        </table>
        <a class="btn btn-primary " href="index.php">Back to list</a>
    </div>
    <footer style="padding-left: 45%;margin-top:120px;">Created by Pentagon @2022</footer>
</body>

</html>