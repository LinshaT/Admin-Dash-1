<?php

$host="localhost";
$username="erebs123";
$password="Erebs@123";
$db="Dashboard";

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

if($row['username']=='admin')
{
   
    header("location:index.php");
}
else
{
    header("location:register.php");
}
}
?>


<!doctype html>
<html>
<head>
  <title>Entry system</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.0-3/js/bootstrap.min.js" integrity="sha512-EDPPkTvnl5ilwG33ygi/y7ph1tGHC9CTYOc3JHVRhAmlCkB6TGZoaJ88YI8E0XfRFNMr31sCWcimdRv8Bf5wFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hot" >  
<div class="text-light  text-center p-5 my-auto  ">
<h1 class="pt-5 text-light"> Login System</h1>

<form action="login.php" method="POST">
    <div style="margin-top:100px">
        <label>Username</label>
        <input type="text" name="username" >
    </div>
    <div class="pt-3">
        <label>Password</label>
        <input type="password" name="password" ><br><br>          
    </div >
    <div class="pt-3">
        <input type="submit" name="submit" value="Login">
        <input type="submit" name="register" value="register">
      
    </div>
</div>
</form>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
