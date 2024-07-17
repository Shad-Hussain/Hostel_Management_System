<?php
session_start();

$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['registerbtn']))
{
    
$enroll = $_POST['enroll'];
$name = $_POST['name'];
$faculty = $_POST['faculty'];
$course=$_POST['coursename'];
$branch = $_POST['branch'];
$room = $_POST['room'];
$filex= $_FILES['file'];
//print_r($file);
$filename= $filex['name'];
$fileerror= $filex['error'];
$filetmp=$filex['tmp_name'];
if($fileerror==0){

$destinationfile='upload/'.$filename;
move_uploaded_file($filetmp,$destinationfile); 
$query = "INSERT INTO studentdata (enroll,name,faculty,coursename,branch,room,image) VALUES('$enroll','$name','$faculty','$course','$branch','$room','$destinationfile')";
$query_run = mysqli_query($connection, $query);

         if($query_run)
         {
          
         $_SESSION['success'] = "Student Data Added";
         header('Location: studentdata.php');   

         }
         else
         {
         $_SESSION['status'] = "Student Data Not Added";
         header('Location: studentdata.php');    
         }
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
    
  
    $query = "UPDATE studentdata SET enroll='$enroll',name ='$name',faculty='$faculty', branch='$branch',room='$room', WHERE ID= '$ID'";
    $query_run = mysqli_query($connection, $query);

    if($query_run){

$_SESSION['success'] = "Student Data Updated";
header('Location: studentdata.php');   

    }else{
 $_SESSION['status'] = "Student Data NOT Updated";
         header('Location: studentdata.php');   
    }

}



?> 