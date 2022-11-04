<?php
    include_once("BaseController.php");
    include_once("EventController.php");

    if(isset($_REQUEST['SAVE']))
    {
        store();
    }

    function index()
    {
        $s = "select * from events";

        $jsonData = readQuery($s);

        // print_r($jsonData);

        $emp = json_decode($jsonData);

        // echo "<br>";
        // print_r($emp);

        return $emp;
    }

    function create()
    {
        return "called";
    }

    function store()
    {
    
        $title = $_REQUEST['title'];
        $description = $_REQUEST['description'];
        // $image_1 = $_REQUEST['image_1'];
        // $image_2 = $_REQUEST['image_2'];
        // $image_3 = $_REQUEST['image_3'];
        // $image_4 = $_REQUEST['image_4'];
        // $image_5 = $_REQUEST['image_5'];
        // $image_6 = $_REQUEST['image_6'];

        $file = $_FILES['image_1'];
        $file = $_FILES['image_2'];
        $file = $_FILES['image_3'];
        $file = $_FILES['image_4'];
        $file = $_FILES['image_5'];
        $file = $_FILES['image_6'];

        $fileName1 = $_FILES['image_1']['name'];
        $fileName2 = $_FILES['image_2']['name'];
        $fileName3 = $_FILES['image_3']['name'];
        $fileName4 = $_FILES['image_4']['name'];
        $fileName5 = $_FILES['image_5']['name'];
        $fileName6 = $_FILES['image_6']['name'];

        $fileTmpName1 = $_FILES['image_1']['tmp_name'];
        $fileTmpName2 = $_FILES['image_2']['tmp_name'];
        $fileTmpName3 = $_FILES['image_3']['tmp_name'];
        $fileTmpName4 = $_FILES['image_4']['tmp_name'];
        $fileTmpName5 = $_FILES['image_5']['tmp_name'];
        $fileTmpName6 = $_FILES['image_6']['tmp_name'];
        
        $fileType1 = $_FILES['image_1']['type'];
        $fileType2 = $_FILES['image_2']['type'];
        $fileType3 = $_FILES['image_3']['type'];
        $fileType4 = $_FILES['image_4']['type'];
        $fileType5 = $_FILES['image_5']['type'];
        $fileType6 = $_FILES['image_6']['type'];

        $fileError1 = $_FILES['image_1']['error'];
        $fileError2 = $_FILES['image_2']['error'];
        $fileError3 = $_FILES['image_3']['error'];
        $fileError4 = $_FILES['image_4']['error'];
        $fileError5 = $_FILES['image_5']['error'];
        $fileError6 = $_FILES['image_6']['error'];

        $file_parts1 = pathinfo($fileName1);
        $file_parts2 = pathinfo($fileName2);
        $file_parts3 = pathinfo($fileName3);
        $file_parts4 = pathinfo($fileName4);
        $file_parts5 = pathinfo($fileName5);
        $file_parts6 = pathinfo($fileName6);

        $file_ext1 = $file_parts1['extension'];
        $file_ext2 = $file_parts2['extension'];
        $file_ext3 = $file_parts3['extension'];
        $file_ext4 = $file_parts4['extension'];
        $file_ext5 = $file_parts5['extension'];
        $file_ext6 = $file_parts6['extension'];

        $file_ext1 = strtolower($file_ext1);
        $file_ext2 = strtolower($file_ext2);
        $file_ext3 = strtolower($file_ext3);
        $file_ext4 = strtolower($file_ext4);
        $file_ext5 = strtolower($file_ext5);
        $file_ext6 = strtolower($file_ext6);

        $fileNewName = uniqid('',true);

        $customNameExt1 = $fileNewName . "1." . $file_ext1;
        $customNameExt2 = $fileNewName . "2." . $file_ext2;
        $customNameExt3 = $fileNewName . "3." . $file_ext3;
        $customNameExt4 = $fileNewName . "4." . $file_ext4;
        $customNameExt5 = $fileNewName . "5." . $file_ext5;
        $customNameExt6 = $fileNewName . "6." . $file_ext6;
        
        

        $fileDestination1 = RSR.'images/events/'.$customNameExt1;
        $fileDestination2 = RSR.'images/events/'.$customNameExt2;
        $fileDestination3 = RSR.'images/events/'.$customNameExt3;
        $fileDestination4 = RSR.'images/events/'.$customNameExt4;
        $fileDestination5 = RSR.'images/events/'.$customNameExt5;
        $fileDestination6 = RSR.'images/events/'.$customNameExt6;

        move_uploaded_file($fileTmpName1, $fileDestination1);
        move_uploaded_file($fileTmpName2, $fileDestination2);
        move_uploaded_file($fileTmpName3, $fileDestination3);
        move_uploaded_file($fileTmpName4, $fileDestination4);
        move_uploaded_file($fileTmpName5, $fileDestination5);
        move_uploaded_file($fileTmpName6, $fileDestination6);



        $s = "INSERT INTO `events`(`id`, `title`, `description`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`) VALUES (null,'$title','$description','$customNameExt1','$customNameExt2','$customNameExt3','$customNameExt4','$customNameExt5','$customNameExt6')";
        $r = executeQuery($s);

        // print_r($r);
        header('location: show.php?id='.$r);
    }

    function show()
    {
        $id = $_REQUEST['id'];
        $s = "select * from events where id = " .$id;
        $jsonData = readQuery($s);

        $data = json_decode($jsonData);
        return $data;
    }

    function delete()
    {

    }