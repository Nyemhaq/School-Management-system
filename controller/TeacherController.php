<?php
    include_once("BaseController.php");

    if(isset($_REQUEST['save']))
    {
        store();
    }

    function index()
    {
        $s = "select * from teachers";


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
        $id =  $_REQUEST['id'];
        $teacher_name = $_REQUEST['teacher_name'];
        $personal_id = $_REQUEST['personal_id'];
        $designation = $_REQUEST['designation'];
        $join_date = $_REQUEST['join_date'];
        $image = $_REQUEST['image'];
       // $year = $_REQUEST['year'];
        //$pass = $_REQUEST['pass'];

        $s = "INSERT INTO `employees`(`id`, `teacher_name`, `personal_id`, `designation`, `join_date`,`image`) VALUES (NULL,'$teacher_name','$personal_id','$designation','$join_date','$image')";
        $r = executeQuery($s);

        print_r($r);
    }

    function show()
    {
        $id = $_REQUEST['id'];
        $s = "select * from teachers where id = " .$id;
        $jsonData = readQuery($s);

        $data = json_decode($jsonData);
        return $data;
    }

    function delete()
    {

    }