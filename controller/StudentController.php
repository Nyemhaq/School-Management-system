<?php
    include_once("BaseController.php");

    if(isset($_REQUEST['save']))
    {
        store();
    }

    function index()
    {
        $s = "select * from total_student_2021";

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
        $class = $_REQUEST['class'];
        $boy = $_REQUEST['boy'];
        $girl = $_REQUEST['girl'];

        $s = "INSERT INTO `employees`(`class`, `boy`, `girl`) VALUES (NULL,'$class','$boy','$girl')";
        $r = executeQuery($s);

        print_r($r);
    }

    function show()
    {
        $id = $_REQUEST['id'];
        $s = "select * from total_student_2021 where id = " .$id;
        $jsonData = readQuery($s);

        $data = json_decode($jsonData);
        return $data;
    }

    function delete()
    {

    }