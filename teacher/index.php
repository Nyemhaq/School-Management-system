<?php
    include_once('../config.php');
    include_once(CON_FRONT . 'TeacherController.php');
    $teachers = index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
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
    <h1 style="text-align: center;">Teacher's List</h1>
    <br>
    <br>
    <table class="table table-hover table-success">
        <tr>
            <th>ID</th>
            <th>TEACHERS_NAME</th>
            <th>PERSONAL_ID</th>
            <th>DESIGNATION</th>
            <th>JOIN_DATE</th>
            <!-- <th>YEAR</th> -->
            <!-- <th>PASS</th> -->
        </tr>
        <?php 
            foreach($teachers as $t)
            {
        ?>
                <tr>
                    <td><?php echo $t->id; ?></td>
                    <td><?= $t->teachers_name ?></td>
                    <td><?= $t->personal_id ?></td>
                    <td><?= $t->designation ?></td>
                    <td><?= $t->join_date ?></td>
                
                    <!-- <td><?= $r->year ?></td> -->
    
                </tr>
        <?php
            }
        ?>
    </table>
    
<footer style="text-align:center;margin-top:5%;margin-bottom:5%;">© Created By Nyem & Sakib @2022</footer>
</body>
</html>

