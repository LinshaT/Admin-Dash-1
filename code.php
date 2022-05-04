<?php

    $host="localhost";
    $username="erebs123";
    $password="Erebs@123";
    $db="esm";

    $conn  =mysqli_connect($user,$username,$password,$db);

    if(!$conn)
    {
        die("not Connected");
    }


    IF($_SERVER["REQUEST_METHOD"]=="POST")
    {
    $user=$_POST['username'];
    $pass=$_POST['password'];

    $qry = "select * from login where username='".$user."' AND password='".$pass."' ";

    $result=mysqli_query($conn,$qry);
    $row=mysqli_fetch_array($result);

    if($row['usertype']=='user')
    {
      //echo '<h1 style=color:white>'.$user.'</h1>';
      header("location:userhome.php");
    }
    else if($row['username']=='admin')
    {
        //echo $user;
        header("location:adminhome.php");
    }
    else
    {
        header("location:register.php");
    }
    }

    if (isset($_POST['submit']))
    {
        header("location:register.php");
        /*$user=$_POST['username'];
        $pass=$_POST['password'];
        $ins   = "insert into login(username,password,usertype) values ($user,$pass)";
        $insqry= mysqli_query($conn,$ins);*/
        
    }