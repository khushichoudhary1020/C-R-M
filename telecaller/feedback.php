<?php
session_start();
include("checklogin.php");
check_login();
include("dbconnection.php");
if(isset($_POST['update']))
{
$name=$_POST['name'];
$feedback1=$_POST['feedback1'];


$id=$_GET['id'];
	$ret=mysqli_query($con,"update leads set feedback1='$feedback1' where id='$id'");
	if($ret)
	{
	echo "<script>alert('Data Updated'); location.replace(document.referrer)</script>";	
	}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>TVE | Edit Profile </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="../assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row-fluid">	
    <?php include("leftbar.php");?>
    <div class="clearfix"></div> 
    </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
   <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>		
	</div>
	<div class="pull-right">
	</div>
  </div>
  <div class="page-content"> 
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title">
         <?php $rt=mysqli_query($con,"select * from leads where id='".$_GET['id']."'");
			  while($rw=mysqli_fetch_array($rt))
			  {?>	
			<h3>Update <?php echo $rw['name'];?>'s Profile</h3>	
             
                      <form name="muser" method="post" action="" enctype="multipart/form-data">
                      <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 col-xs-12 mx-auto">
                            <div class="form-group">
                              <label for="feedback1" class="control-label">Please add a Feedback</label>
                              <input type="text" class="form-control rounded-0" id="feedback1" name="feedback1" value="<?php echo $rw['feedback1'];?>" required="required">
                            </div>
                            <div class="form-group">
                              <label for="name" class="control-label">Name</label>
                              <input type="text" class="form-control rounded-0" id="name" name="name" value="<?php echo $rw['name'];?>" required="required">
                            </div>
        
                            <div class="form-group">
                              <div class="text-center">
                                <button type="submit" name="update" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                        </div>
                      </div>
              <?php } ?>
            </form>
</div>
  </div>
  </div>
</div>
 </div>
<script src="../assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="../assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="../assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="../assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="../assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="../assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="../assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="../assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="../assets/js/core.js" type="text/javascript"></script> 
<script src="../assets/js/chat.js" type="text/javascript"></script> 
<script src="../assets/js/demo.js" type="text/javascript"></script> 

</body>
</html>