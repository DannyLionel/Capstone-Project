<?php
session_start();
include'dbconnection.php';
//Checking session is valid or not


// for updating user info
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$question1=$_POST['question1'];
	$question2=$_POST['question2'];
	$question3=$_POST['question3'];
	$question4=$_POST['question4'];
	$question5=$_POST['question5'];
	$question6=$_POST['question6'];
	$question7=$_POST['question7'];
	$question8=$_POST['question8'];
	$question9=$_POST['question9'];
	$question10=$_POST['question10'];
	$question11=$_POST['question11'];
	$question12=$_POST['question12'];
	$question13=$_POST['question13'];
	$question14=$_POST['question14'];
	$question15=$_POST['question15'];
	$answer1=$_POST['answer1'];
	$answer2=$_POST['answer2'];
	$answer3=$_POST['answer3'];
	$answer4=$_POST['answer4'];
	$answer5=$_POST['answer5'];
	$answer6=$_POST['answer6'];
	$answer7=$_POST['answer7'];
	$answer8=$_POST['answer8'];
	$answer9=$_POST['answer9'];
	$answer10=$_POST['answer10'];
	$answer11=$_POST['answer11'];
	$answer12=$_POST['answer12'];
	$answer13=$_POST['answer13'];
	$answer14=$_POST['answer14'];
	$answer15=$_POST['answer15'];
	//$id=$_SESSION['id'];
  	$uid=intval($_GET['uid']);
	$query=mysqli_query($con,"UPDATE patient set fname='$fname' ,lname='$lname', question1='$question1', question2='$question2', question3='$question3', question4='$question4', question5='$question5', question6='$question6', question7='$question7', question8='$question8', question9='$question9', question10='$question10', question11='$question11', question12='$question12', question13='$question13', question14='$question14', question15='$question15', answer1='$answer1', answer2='$answer2', answer3='$answer3', answer4='$answer4', answer5='$answer5', answer6='$answer6', answer7='$answer7', answer8='$answer8', answer9='$answer9', answer10='$answer10', answer11='$answer11', answer12='$answer12', answer13='$answer13', answer14='$answer14', answer15='$answer15' where id='$uid'");

	if($query)
		{
		echo "<script>alert('Data updated');</script>";
		}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Update Patient</title>
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

              	  <p class="centered"><a href="#"><img src="assets/img/logo100.png" class="img-circle" width="100"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['login'];?></h5>

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
      <?php $ret=mysqli_query($con,"select * from patient where id='".$_GET['uid']."'");
	  while($row=mysqli_fetch_array($ret))

	  {?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $row['fname'];?> <?php echo $row['lname'];?>'s Information</h3>

				<div class="row">



                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></p>
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">First Name </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>" >
                              </div>
                          </div>

                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Last Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="lname" value="<?php echo $row['lname'];?>" >
                              </div>
                          </div>

                               
                <div class="form-group">
                              <div class="col-sm-2 col-sm-2 control-label">
    <select class="form-control" name="qp_type" id="p_type" style="margin-left:10px" required>
        <option  value="Question 1">Question 1</option>
        <option  value="Question 2">Question 2</option>
		<option  value="Question 3">Question 3</option>
		<option  value="Question 4">Question 4</option>
		<option  value="Question 5">Question 5</option>
		<option  value="Question 6">Question 6</option>
		<option  value="Question 7">Question 7</option>
		<option  value="Question 8">Question 8</option>
		<option  value="Question 9">Question 9</option>
		<option  value="Question 10">Question 10</option>
		<option  value="Question 11">Question 11</option>
		<option  value="Question 12">Question 12</option>
		<option  value="Question 13">Question 13</option>
		<option  value="Question 14">Question 14</option>
		<option  value="Question 15">Question 15</option>
    </select>
    </div>

			<div class="form-group" id="q1Type">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question1" type="text" class="form-control" name="question1" value="<?php echo $row['question1'];?>">
				<input id="answer1" type="text" class="form-control" name="answer1" value="<?php echo $row['answer1'];?>">
				</div>
			</div>

			<div class="form-group" id="q2Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question2" type="text" class="form-control" name="question2" value="<?php echo $row['question2'];?>">
				<input id="answer2" type="text" class="form-control" name="answer2" value="<?php echo $row['answer2'];?>">
			</div>
			</div>

			<div class="form-group" id="q3Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question3" type="text" class="form-control" name="question3" value="<?php echo $row['question3'];?>">
				<input id="answer3" type="text" class="form-control" name="answer3" value="<?php echo $row['answer3'];?>">
			</div>
			</div>
			
			<div class="form-group" id="q4Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question4" type="text" class="form-control" name="question4" value="<?php echo $row['question4'];?>">
				<input id="answer4" type="text" class="form-control" name="answer4" value="<?php echo $row['answer4'];?>">
			</div>
			</div>
			
			<div class="form-group" id="q5Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question5" type="text" class="form-control" name="question5" value="<?php echo $row['question5'];?>">
				<input id="answer5" type="text" class="form-control" name="answer5" value="<?php echo $row['answer5'];?>">
			</div>
			</div>
			
			<div class="form-group" id="q6Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question6" type="text" class="form-control" name="question6" value="<?php echo $row['question6'];?>">
				<input id="answer6" type="text" class="form-control" name="answer6" value="<?php echo $row['answer6'];?>">
			</div>
			</div>
			
			<div class="form-group" id="q7Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question7" type="text" class="form-control" name="question7" value="<?php echo $row['question7'];?>">
				<input id="answer7" type="text" class="form-control" name="answer7" value="<?php echo $row['answer7'];?>">
			</div>
			</div>
			
			<div class="form-group" id="q8Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question8" type="text" class="form-control" name="question8" value="<?php echo $row['question8'];?>">
				<input id="answer8" type="text" class="form-control" name="answer8" value="<?php echo $row['answer8'];?>">
			</div>
			</div>
			
			<div class="form-group" id="q9Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question9" type="text" class="form-control" name="question9" value="<?php echo $row['question9'];?>">
				<input id="answer9" type="text" class="form-control" name="answer9" value="<?php echo $row['answer9'];?>">
			</div>
			</div>
			
			<div class="form-group" id="q10Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question10" type="text" class="form-control" name="question10" value="<?php echo $row['question10'];?>">
				<input id="answer10" type="text" class="form-control" name="answer10" value="<?php echo $row['answer10'];?>">
			</div>
			</div>
			
			<div class="form-group" id="q11Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question11" type="text" class="form-control" name="question11" value="<?php echo $row['question11'];?>">
				<input id="answer11" type="text" class="form-control" name="answer11" value="<?php echo $row['answer11'];?>">
			</div>
			</div>
			
			<div class="form-group" id="q12Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question12" type="text" class="form-control" name="question12" value="<?php echo $row['question12'];?>">
				<input id="answer12" type="text" class="form-control" name="answer12" value="<?php echo $row['answer12'];?>">
			</div>
			</div>
			
			<div class="form-group" id="q13Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question13" type="text" class="form-control" name="question13" value="<?php echo $row['question13'];?>">
				<input id="answer13" type="text" class="form-control" name="answer13" value="<?php echo $row['answer13'];?>">
			</div>
			</div>
			
			<div class="form-group" id="q14Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question14" type="text" class="form-control" name="question14" value="<?php echo $row['question14'];?>">
				<input id="answer14" type="text" class="form-control" name="answer14" value="<?php echo $row['answer14'];?>">
			</div>
			</div>
			
			<div class="form-group" id="q15Type" style="display:none;">
			<div class="col-sm-10" style=" padding: 20px 250px 10px;">
				<input id="question15" type="text" class="form-control" name="question15" value="<?php echo $row['question15'];?>">
				<input id="answer15" type="text" class="form-control" name="answer15" value="<?php echo $row['answer15'];?>">
			</div>
			</div>

                          </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Registration Date </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="regdate" value="<?php echo $row['datejoined'];?>" readonly >
                              </div>
                          </div>
                          <div style="margin-left:50px;">
                          <input type="submit" name="submit" value="Update" class="btn btn-theme">
						 </div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
        <?php } ?>
      </section></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>  
     $(document).ready(function(){
    $('select[name=qp_type]').change(function(){
        if($(this).val() == 'Question 1') {
            $('#q1Type').show();

        }
        else {
            $('#q1Type').hide();

        }

		if($(this).val() == 'Question 2') {
            $('#q2Type').show();

        }
        else {
            $('#q2Type').hide();

        }

		if($(this).val() == 'Question 3') {
            $('#q3Type').show();

        }
        else {
            $('#q3Type').hide();

        }
		
		if($(this).val() == 'Question 4') {
            $('#q4Type').show();
            
        }
        else {
            $('#q4Type').hide();
            
        }
		
		if($(this).val() == 'Question 5') {
            $('#q5Type').show();
            
        }
        else {
            $('#q5Type').hide();
            
        }
		
		if($(this).val() == 'Question 6') {
            $('#q6Type').show();

        }
        else {
            $('#q6Type').hide();

        }

		if($(this).val() == 'Question 7') {
            $('#q7Type').show();

        }
        else {
            $('#q7Type').hide();

        }

		if($(this).val() == 'Question 8') {
            $('#q8Type').show();

        }
        else {
            $('#q8Type').hide();

        }
		
		if($(this).val() == 'Question 9') {
            $('#q9Type').show();
            
        }
        else {
            $('#q9Type').hide();
            
        }
		
		if($(this).val() == 'Question 10') {
            $('#q10Type').show();
            
        }
        else {
            $('#q10Type').hide();
            
        }
		
		if($(this).val() == 'Question 11') {
            $('#q11Type').show();

        }
        else {
            $('#q11Type').hide();

        }

		if($(this).val() == 'Question 12') {
            $('#q12Type').show();

        }
        else {
            $('#q12Type').hide();

        }

		if($(this).val() == 'Question 13') {
            $('#q13Type').show();

        }
        else {
            $('#q13Type').hide();

        }
		
		if($(this).val() == 'Question 14') {
            $('#q14Type').show();
            
        }
        else {
            $('#q14Type').hide();
            
        }
		
		if($(this).val() == 'Question 15') {
            $('#q15Type').show();
            
        }
        else {
            $('#q15Type').hide();
            
        }
    });
});
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
