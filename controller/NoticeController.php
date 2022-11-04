<?php
    include_once("BaseController.php");

    if(isset($_REQUEST['SAVE']))
    {
        store();
    }

    function index()
    {
        $s = "select * from notices";

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
        // $id =  $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $description = $_REQUEST['description'];
        // $date = $_REQUEST['date'];
        // $status = $_REQUEST['status'];

        $s = "INSERT INTO `notices`(id,`title`, `description`) VALUES (NULL,'$title','$description')";
        $r = executeQuery($s);

        // print_r($r);
        header('location: show.php?id='.$r);
    }

    function show()
    {
        $id = $_REQUEST['id'];
        $s = "select * from notices where id = " .$id;
        $jsonData = readQuery($s);

        $data = json_decode($jsonData);
        return $data;
    }

    function delete()
    {

    }