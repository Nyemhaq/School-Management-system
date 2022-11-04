<?php
    include_once("BaseController.php");

    function notice()
    {
        $s = "select * from notices order by date desc limit 4";

        $jsonData = readQuery($s);

        // print_r($jsonData);

        $emp = json_decode($jsonData);

        // echo "<br>";
        // print_r($emp);

        return $emp;
    }
    function event()
    {
        $s = "select * from events order by date desc limit 3";

        $jsonData = readQuery($s);

        // print_r($jsonData);

        $event = json_decode($jsonData);

        // echo "<br>";
        // print_r($emp);

        return $event;
    }

    