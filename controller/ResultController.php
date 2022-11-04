<?php
    include_once("BaseController.php");

    if(isset($_REQUEST['save']))
    {
        store();
    }

    function index()
    {
        $s = "SELECT year, SUM(total) total_student, SUM(pass)/6 pass, SUM(scholarship) scholarship FROM result GROUP BY year order by year desc";

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
        $class = $_REQUEST['class'];
        $boy = $_REQUEST['boy'];
        $girl = $_REQUEST['girl'];
        $total = $_REQUEST['total'];
        $scholarship = $_REQUEST['scholarship'];
        $year = $_REQUEST['year'];
        $pass = $_REQUEST['pass'];

        $s = "INSERT INTO `employees`(`id`, `class`, `boy`, `girl`, `total`,`scholarship`,`year`,`pass`) VALUES (NULL,'$class','$boy','$girl','$total','$scholarship','$year','$pass')";
        $r = executeQuery($s);

        print_r($r);
    }

    function show()
    {
        $year = $_REQUEST['year'];
        $s = "select * from result where year=".$year;

        $jsonData = readQuery($s);

        // print_r($jsonData);

        $emp = json_decode($jsonData);

        // echo "<br>";
        // print_r($emp);

        return $emp;
    }

    function delete()
    {

    }