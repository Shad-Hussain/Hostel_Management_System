<?php
session_start();

$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['servicebtn']))
{
    $name = $_POST['name']; 
    $room = $_POST['room'];  
    $enroll = $_POST['enroll'];
    $faculty = $_POST['faculty'];
    $phone = $_POST['phone'];
    $problem = $_POST['problem'];
    $message = $_POST['message'];

 
$query = "INSERT INTO serviceform (name,room,enroll,faculty,phone,problem,message) VALUES('$name','$room','$enroll','$faculty','$phone','$problem','$message')";
$query_run = mysqli_query($connection, $query);

         if($query_run)
         {
          
         $_SESSION['success'] = "YOUR FORM HAS BEEN SUBMITTED";
         header('Location: service.php');   

         }


         else
         {
         $_SESSION['status'] = "YOUR FORM HAS BEEN SUBMITTED";
         header('Location: service.php');    
         }

   
}
