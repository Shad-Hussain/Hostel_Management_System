<?php
session_start();

$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['feedsubmit']))
{
    $name = $_POST['name']; 
    $email = $_POST['email'];  

$phone = $_POST['phone'];
$message = $_POST['message'];

 
$query = "INSERT INTO feedform (name,email,phone,message) VALUES('$name','$email','$phone','$message')";
$query_run = mysqli_query($connection, $query);

         if($query_run)
         {
          
         $_SESSION['success'] = "YOUR FORM HAS BEEN SUBMITTED";
         header('Location: feed.php');   

         }


         else
         {
         $_SESSION['status'] = "YOUR FORM HAS BEEN SUBMITTED";
         header('Location: feed.php');    
         }

   
}
