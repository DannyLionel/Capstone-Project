<?php
session_start();
include'dbconnection.php';

// for deleting user
	if(isset($_GET['id']))
	{
	$userid=$_GET['id'];
	$caregiverdelete=mysqli_query($con,"delete from caregiver where patientid='$userid'");
	$mediadelete=mysqli_query($con,"delete from new_media where patientid='$userid'");
	$msg=mysqli_query($con,"delete from patient where id='$userid'");
		if($msg && $caregiverdelete && $mediadelete)
		{
		echo "<script>alert('Patient data, associated caregivers and media deleted');</script>";
		}
	}

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Manage Patients</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">



                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="#"><img src="assets/img/logo100.png" class="img-circle" width="125"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['login'];?></h5>

                  <li class="mt">
                      <a href="change-password.php">
                          <i class="fa fa-file"></i>
                          <span>Change Password</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="manage-patients.php" >
                          <i class="fa fa-users"></i>
                          <span>Manage Patients</span>
                      </a>

                  </li>
				  
				  <li class="sub-menu">
                      <a href="new-staff.php" >
                          <i class="fa fa-users"></i>
                          <span>Add Staff</span>
                      </a>

                  </li>
				  
				  <li class="sub-menu">
                      <a href="add-admin.php" >
                          <i class="fa fa-users"></i>
                          <span>Add Admin</span>
                      </a>

                  </li>


              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Manage Patients</h3>
				<div class="row">



                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All Patient Details </h4>
							  <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="new-patient.php" style="margin-top:-35px";>Add Patient</a></li>
            	</ul>
							  
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th></th>
                                  <th class="hidden-phone">First Name</th>
                                  <th> Last Name</th>


                                  <th>Reg. Date</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from patient");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['fname'];?></td>
                                 <td><?php echo $row['lname'];?></td>

                                  <td><?php echo $row['datejoined'];?></td>
                                  <td>
								  
									<a href="">
                                     <button class="btn btn-success btn-xs"><i class="fa fa-play"></i></button></a>
                                     <a href="https://ontario-shores.herokuapp.com/update-files.php?uid=<?php echo $row['id'];?>">
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-upload"></i></button></a>
									 <a href="update-profile.php?uid=<?php echo $row['id'];?>">
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
									 <a href="new-caregiver.php?uid=<?php echo $row['id'];?>">
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></button></a>
                                     <a href="manage-patients.php?id=<?php echo $row['id'];?>">
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
      </section
  ></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
