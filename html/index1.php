<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>R.M.- Allotment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logos.png" rel="icon">
  <link href="assets/img/logos.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="../css/halllist.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/feedback.css">
    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="../js/script.js"></script>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span><b>&nbsp&nbsp&nbspAMU HALLS</b></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="home.html">Home</a></li>
          <li class="drop-down"><a href="">HALLS</a>
            <ul>
              <li><a href="#">BOYS HOSTELS</a></li>
              <li><a href="#">GIRLS HOSTELS</a></li>
              </ul>
                </li>
                
          <li><a href="team.html">Meet the Team</a></li>
          <li><a href="feed.php">Feedback </a></li>
          <li class="items admin-button" onclick="document.getElementById('id01').style.display='block'"> <a>Login</a></li>
           
         
        
         
      </nav><!-- .nav-menu -->
<!-- The Admin Login -->
<div id="id01" class="modal">
  <div class="modal-content">
    
     <span onclick="document.getElementById('id01').style.display='none'"
     class="close" title="Close Modal">&times;</span>  
         
            <img src="../images/loginimg.jpeg"><br><br>
        
  
            <form action="validation.php" method="POST"  target="_blank" class="login100-form validate-form">
                
              <span class="login100-form-title">
             <br>  <b> ADMIN LOGIN</b>
              </span>
    
              <div class="wrap-input100 validate-input" data-validate = "Username is required">
                <input class="input100" type="text" name="user" placeholder="Username" required>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </span>
              </div>
    
              <div class="wrap-input100 validate-input" data-validate = "Password is required">
                <input class="input100"  type="password" name="password" placeholder="Password" required>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
              </div>
              
              <div class="container-login100-form-btn">
                <!-- href="../admin/index.php"  -->
                    <button type="submit"  class="login100-form-btn"> LOGIN </button>
                  
               <br><br>
              </div>
           </form>
       </div>
      </div>
    </div>

<script>

var modal = document.getElementById('id01');

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
 <!-- The Admin Login -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>AMU</span></h2>
          <p class="animate__animated animate__fadeInUp">A special feature of the University is its residential character with most of the staff and students residing on the campus. AMU is truly representative of the country's multi-religious, multi-racial and multi-lingual character. At Aligarh, Muslims, Hindus, Sikhs and Christians come from all parts of the country - right from Kashmir to Kerala and from Gujarat to Assam - bringing with them different cultural traditions.This traditional and harmonious corporate living has made a major contribution to the development of a broad, cosmopolitan and secular attitude in Aligarh.</p>
        </div>
      </div>

    
    </div>
    
  </section><!-- End Hero -->

  <main id="main">
<!-- Form Starts -->
<div class="feed-section height">
	
	<h1 style="color: black;">Allotment</h1>
	<p>Enter given detail to allot your room</p>
	<div class="border"></div>
	<form class="feed-form"  method="POST" enctype="multipart/form-data">
		<label for="Enrollmentno">Enrollment</label>
	  <input type="text" class="feed-form-text" placeholder="Your Enrollmentno" name="enroll" required>
		<label for="name">Name</label>
	  <input type="text" class="feed-form-text" placeholder="Your name" name="name" required>
	  <label for="name">Faculty No</label>
	   <input type="text" class="feed-form-text" placeholder="Enter your Faculty number" name="faculty">
	  <label for="problem">Select your Course</label>
         <select class="feed-form-text" name="coursename" id="course">
         <option value="" disabled selected hidden>Select any one</option>
         <option class="feed-form-text" value="be">B.E</option>
                  <option class="feed-form-text" value="dip">Diploms engg</option>
          </select> 
	 
	   <label for="name">Branch</label>
	  <input type="text" class="feed-form-text" placeholder="Enter your Branch" name="branch">
	  <label for="file">Choose Pic</label>
	  <input type="file" class="feed-form-text" placeholder="Choose your pic" name="file" id="file">
	  <input type="submit" class="feed-form-btn" value="Submit" name="submit">

	</form>
  </div>
<!-- Form Ends -->
<?php
include "connection.php";
if(isset($_POST['submit'])){
	$enroll = $_POST['enroll'];
$name = $_POST['name'];
$faculty = $_POST['faculty'];
$course=$_POST['coursename'];
$branch = $_POST['branch'];
$filex= $_FILES['file'];
//print_r($file);
$filename= $filex['name'];
$fileerror= $filex['error'];
$filetmp=$filex['tmp_name'];
if($fileerror==0){

$destinationfile='upload/'.$filename;
move_uploaded_file($filetmp,$destinationfile);

}



	$fac=mysqli_real_escape_string($con,$_POST['faculty']);
	$facquery=" select * from studentdata where faculty='$fac'";
	$query=mysqli_query($con,$facquery);
	$faccount=mysqli_num_rows($query);
	if($faccount>0){
	?>
	<script>
		alert("Faculty number already exists in record");
	</script>
<?php

}
else{
for($i=1;$i<=70;$i++){
	$fac=mysqli_real_escape_string($con,$_POST['faculty']);
	$facquery=" select * from studentdata where faculty='$fac'";
	$query=mysqli_query($con,$facquery);
	$faccount=mysqli_num_rows($query);
	if($faccount==0){
$ran=rand(1,70);
$random=mysqli_real_escape_string($con,$ran);
if($course=="dip"){
if((($random>=10)&&($random<=30))||(($random>=40)&&($random<=60))){
$roomquery=" select * from studentdata where room='$random'";
$quer=mysqli_query($con,$roomquery);
$roomcount=mysqli_num_rows($quer);
if($roomcount<4){
	if($fileerror==0){
$destinationfile='upload/'.$filename;
move_uploaded_file($filetmp,$destinationfile);
$insertquery= "insert into studentdata(enroll,name,faculty,coursename,branch,room,image) values('$enroll','$name','$faculty','$course','$branch','$random','$destinationfile')";
$res=mysqli_query($con,$insertquery);
if($res){
?>
<script>
	 alert("Data inserted and room alloted");
</script>
<p class="result">
	<?php
	echo "You have been alloted a 4-seater room.Your Room no is ".$ran;
	?>
</p>
<?php
}
}
}
else{
	?>
	<script>
		alert("wait for some time");
	</script>
<?php
}
}
}
if($course=="be"){
if((($random>=0)&&($random<=10))||(($random>=30)&&($random<=40))||(($random>=60)&&($random<=70))){
$roomquery=" select * from studentdata where room='$random'";
$quer=mysqli_query($con,$roomquery);
$roomcount=mysqli_num_rows($quer);
if($roomcount<2){
if($fileerror==0){
$destinationfile='upload/'.$filename;
move_uploaded_file($filetmp,$destinationfile);
$insertquery= "insert into studentdata(enroll,name,faculty,coursename,branch,room,image) values('$enroll','$name','$faculty','$course','$branch','$random','$destinationfile')";
$res=mysqli_query($con,$insertquery);
if($res){
?>
<script>
	 alert("Data inserted and room alloted");
</script>
<p class="result">
	<?php
	echo "You have been alloted a 2-seater room.Your Room no is ".$ran;
	?>
</p>
<?php
}
}
}
else{
	?>
	<script>
		alert("wait for some time");
	</script>
<?php
}
}
}
}
}
}
}


?>
   
  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    

    <div class="footer-top">
      <div class="container">
        <div class="row">


          <div class="col-lg-3 col-md-6 footer-info">
            <h3>AMU HALLS</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
           
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Meat the Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Current Page Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Meat the Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
             AMU, Aligarh<br>
              Uttar Pradesh, India<br>
                
              <strong>Phone:</strong> 1234567890<br>
              <strong>Email:</strong> supportsfay@group3.com<br>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </p>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright  &copy;<strong><span>  S A F Y  </span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>