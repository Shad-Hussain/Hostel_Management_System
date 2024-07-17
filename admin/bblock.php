<?php
session_start();

$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['registerbtn']))
{
    
$enroll = $_POST['enroll'];
$name = $_POST['name'];
$faculty = $_POST['faculty'];
$branch = $_POST['branch'];
$room = $_POST['room'];

 
$query = "INSERT INTO bblock (enroll,name,faculty,branch,room) VALUES('$enroll','$name','$faculty','$branch','$room')";
$query_run = mysqli_query($connection, $query);

         if($query_run)
         {
          
         $_SESSION['success'] = "Student Data Added";
         header('Location: bblockdata.php');   

         }


         else
         {
         $_SESSION['status'] = "Student Data Not Added";
         header('Location: bblockdata.php');    
         }

   
}

if(isset($_POST['updatebtn']))
{
    $ID = $_POST['edit_ID']; 
    $edit_enroll = $_POST['edit_enroll']; 
    $edit_name = $_POST['edit_name']; 
    $edit_faculty = $_POST['edit_faculty']; 
    $edit_branch = $_POST['edit_branch']; 
    $edit_room = $_POST['edit_room']; 
    
  
    $query = "UPDATE bblock SET enroll='$enroll',name ='$name',faculty='$faculty', branch='$branch',room='$room', WHERE ID= '$ID'";
    $query_run = mysqli_query($connection, $query);

    if($query_run){

$_SESSION['success'] = "Student Data Updated";
header('Location: bblockdata.php');   

    }else{
 $_SESSION['status'] = "Student Data NOT Updated";
         header('Location: bblockdata.php');   
    }

}



?> 