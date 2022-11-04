<?php
    include_once("BaseController.php");

    if(isset($_REQUEST['submit']))
    {
        login();
    }
    function login()
    {
        $username =  $_REQUEST['username'];
        $password =  $_REQUEST['password'];
        // print_r($username . ' ' . $password);
        // $s="select * from admin where username='$username' and password='$password'";
        $s="SELECT * FROM `admin` WHERE username = '$username' and password = '$password';";
        $jasonData= readQuery($s);
        $data=json_decode($jasonData);
        print_r($data);
        if(count($data)>0)
        {
           header('Location: ../notice/index.php');
            return;
        }


    
    }
?>

    