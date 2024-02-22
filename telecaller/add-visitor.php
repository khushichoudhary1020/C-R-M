<?php
session_start();
//echo $_SESSION['id'];
//$_SESSION['msg'];
include("dbconnection.php");
include("checklogin.php");
check_login();
if(isset($_POST['send']))
{
$count_my_page = ("hitcounter.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
$tid=$hits[0];
$email_id=$_POST['email_id'];
$name=$_POST['name'];
$tenth=$_POST['tenth'];
$twelfth=$_POST['twelfth'];
$vt=$_POST['visa_type'];
$ct=$_POST['course_type'];
$mobile=$_POST['mobile'];
$feedback1=$_POST['feedback1'];
//$ticfile=$_FILES["tfile'"]["name"];
$st="Open";
$pdate=date('Y-m-d');
//move_uploaded_file($_FILES["tfile"]["tmp_name"],"leadfiles/".$_FILES["tfile"]["name"]);
$a=mysqli_query($con,"insert into leads(lead_id,email_id,name,mobile,tenth,twelfth,visa_type,course_type,feedback1,status,generation_date)  values('$tid','$email_id','$name','$mobile','$tenth','$twelfth','$vt','$ct','$feedback1','$st','$pdate')");
if($a)
{
echo "<script>alert('Lead Generated'); location.replace(document.referrer)</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Add Visitor</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="feedback1" />
<meta content="" name="author" />

<link href="../assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row-fluid">	
	<?php include("leftbar.php");?>
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
  </div>
  </div>
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title">	
			<h3>Create Lead</h3>
             <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" name="form1" method="post" action="" onSubmit="return valid();">
                            <div class="panel panel-default">
                             
                                <div class="panel-body bg-white">      
                                    <?php if(isset($_SESSION['msg1'])): ?>                                                                  
                                    <p align="center" style="color:#FF0000"><?=$_SESSION['msg1'];?><?=$_SESSION['msg1']="";?></p>
                                    <?php endif; ?>
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Name</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="name" id="name" value="" required class="form-control"/>
                                            </div>            
                                        
                                        </div>
                                    </div>
									
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Mobile</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="mobile" name="mobile" id="mobile" value="" required class="form-control"/>
                                            </div>            
                                        
                                        </div>
                                    </div>

                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="email" name="email_id" id="email_id" value="" required class="form-control"/>
                                            </div>            
                                        
                                        </div>
                                    </div>                                    

                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">10th Score</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="tenth" id="tenth" value="" required class="form-control"/>
                                            </div>            
                                        </div>
                                    </div>

                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">12th Score</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="twelfth" id="twelfth" value="" required class="form-control"/>
                                            </div>            
                                        </div>
                                    </div>
									
									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Course Type</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select  name="course_type" class="form-control select" required>
                                                <?php for($i = 1; $i <= 2; $i++): ?>
                                                <option>Course <?= $i ?></option>
                                                <?php endfor; ?>
                                            </select>
                                           </div>
                                    </div>
									
										 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Visa Type</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select name="visa_type" class="form-control select">
                                                <option value="">Visitors Visa</option>
                                                <option value="study visa">Study Visa</option>
                                                <option value="family visa">Family Visa</option>
                                                <option value="tourist visa">Tourist Visa</option>
                                                <option value="pr visa">PR Visa</option>
                                            </select>
                                           </div>
                                    </div>
									
									  
                                    
                                    
                                
                                    
                                
                                    
                               
                                    
                                    

                                </div>
								
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <input type="submit" value="Send" name="send" class="btn btn-primary pull-right">
                                </div>
                            </div>
                            </form>
                            
                        </div>
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