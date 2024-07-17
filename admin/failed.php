<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:formlogin.php');
}

?>

<html>
<head>
    <title> Home Page </title>
    <link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <a class="logout float-right" href="logout.php"> RETURN TO REGISTER</a>
   <h1> USERNAME ALREADY TAKEN </h1>

   </div>

</body>
</html>