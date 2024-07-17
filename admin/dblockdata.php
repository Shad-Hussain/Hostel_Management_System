<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SAFY - Student Database</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

 <!--  Including Navbar.php   -->
<?php
session_start();
include('includes/navbar.php');

?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Shad Hussain</span>
                <img class="img-profile rounded-circle" src="img/loginimg.jpeg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

       <!--  Student Databse Starts -->
           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">&nbsp&nbsp&nbsp&nbspR.M. Hall 'C' Block Student Database</h1>
          <p class="mb-4">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThis contains list of students, enrolled in AMU and are residing in 'C' Block of R.M. Hall.  </p>

          <!-- Modal -->
<div class="modal fade" id="studentdatabase" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="studentdatabase">Please Enter Students Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="dstore.php" method="POST">
      <div class="modal-body">

        <div class="form group">
        <label>Enrollment No. </label>
        <input type="text" name="enroll" class="form-control" placeholder="Enter Students Enrollment No" required>
        </div>
        <div class="form group">
        <label>Name </label>
        <input type="text" name="name" class="form-control" placeholder="Enter Students Name" required>
        </div>
        <div class="form group">
        <label>Faculty No. </label>
        <input type="text" name="faculty" class="form-control" placeholder="Enter Students Faculty No." required>
        </div>
        <div class="form group">
        <label>Branch </label>
        <input type="text" name="branch" class="form-control" placeholder="Enter Branch Of Student" required>
        </div>
        <div class="form group">
        <label>Room Alloted </label>
        <input type="text" name="room" class="form-control" placeholder="Enter The Room Number Alloted To Student" >
        </div>
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="sumbit" name="registerbtn" class="btn btn-primary">Add Details</button>
      </div>
</form>
    </div>
  </div>
</div>
<div class="container-fluid">
 <!-- Modal Ends -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentdatabase">
 Add Student Details
</button>

              </h6>
            </div>
            <div class="card-body">

<?php
  if(isset($_SESSION['success']) && $_SESSION['success'] !='')
  {
echo '<h2> '.$_SESSION['success'].' </h2>';
unset($_SESSION['success']);

  }  

  if(isset($_SESSION['status']) && $_SESSION['status'] !='')
  {
echo '<h2> '.$_SESSION['status'].' </h2>';
unset($_SESSION['status']);

  }         
            
?>
             
             
<div class="table-responsive">


 <?php
$connection = mysqli_connect("localhost","root","","adminpanel");

$query ="SELECT * FROM dblockdata";
$query_run=mysqli_query($connection, $query);
             
?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>ID</th>  
                      <th>Enrollment No.</th>
                      <th>Name</th>
                      <th>Faculty No.</th>
                      <th>Branch</th>
                      <th>Room No.</th>
                     
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                
                  <tbody>
<?php
  if(mysqli_num_rows($query_run) > 0 )
{
while($row = mysqli_fetch_assoc($query_run))
   {
       
?>
             <tr>
                      <td><?php echo $row['ID']; ?></td>
                      <td><?php echo $row['enroll'];?></td>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['faculty'];?></td>
                      <td><?php echo $row['branch'];?></td>
                      <td><?php echo $row['room'];?></td>
                     
                      <td>
                      <form action="dedit.php" method="POST">
                      <input type="hidden" name="edit_id" value="<?php echo $row['ID']; ?>">
                          <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                      </td>
                      <td>
                          <button type="submit" class="btn btn-danger"> DELETE </button>
                      </td>
                    </tr>
<?php
   }

}else {
    echo "NO RECORD AVAIABLE";

      }

?>
     

                    </tbody>
                </table>

              </div>
            </div>
          </div>
          

        





 <!--  Student Databse Ends -->
      </div>
      <!-- End of Main Content -->

 <?php
 include('includes/scripts.php');
 include('includes/footer.php');
 ?>
 
  

