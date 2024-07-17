<?php
session_start();

$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['registerbtn']))
{
    

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];


 
$query = "INSERT INTO admindata (name,email,pass) VALUES($name','$email','$pass')";
$query_run = mysqli_query($connection, $query);

         if($query_run)
         {
          
         $_SESSION['success'] = "Admin Profile Data Added";
         header('Location: admin.php');   

         }


         else
         {
         $_SESSION['status'] = "Admin Profile Data Not Added";
         header('Location: admin.php');    
         }

   
}

if(isset($_POST['updatebtn']))
{
    $ID = $_POST['edit_ID']; 
   
    $edit_name = $_POST['edit_name']; 
    $edit_email = $_POST['edit_email']; 
    $edit_pass = $_POST['edit_pass']; 
 
  
    $query = "UPDATE admindata SET name ='$name',email='$email', pass='$pass', WHERE ID= '$ID'";
    $query_run = mysqli_query($connection, $query);

    if($query_run){

$_SESSION['success'] = "Admin Profile Data Updated";
header('Location: admin.php');   

    }else{
 $_SESSION['status'] = "Admin Profile Data NOT Updated";
         header('Location: admin.php');   
    }

}



?> 