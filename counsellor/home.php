<?php 
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>TVE | Counsellor Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
    <link href="../assets/plugins/jquery-metrojs/MetroJs.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../assets/plugins/shape-hover/css/demo.css" />
<link rel="stylesheet" type="text/css" href="../assets/plugins/shape-hover/css/component.css" />
<link rel="stylesheet" type="text/css" href="../assets/plugins/owl-carousel/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="../assets/plugins/owl-carousel/owl.theme.css" />
<link href="../assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" href="../assets/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen" >
<link rel="stylesheet" href="../assets/plugins/Mapplic/mapplic/mapplic.css" type="text/css" media="screen" >
<link href="../assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/magic_space.css" rel="stylesheet" type="text/css"/>
       <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/plugins/morris.css" rel="stylesheet">

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>     
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row"> 
  
      <?php include("leftbar.php");?>
    
      <div class="clearfix"></div>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
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
    <div class="content sm-gutter">
      <div class="page-title">
      </div>
	   <!-- BEGIN DASHBOARD TILES -->
	   <!-- Container Begin-->
     <div class="container-fluid px-4">


     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                       
                        <h1 class="h2">
                           Your Leads
                        </h1>
                     </div>
                     
                     
                     
   
                        <div class="col-md-12">
                           <!--Table  Begin-->
                         
                              <div class="card-body">
                                 <div class="table-responsive dash_table">
                                 <table id="google_leads" class="table table-striped table-hover">
                                       <thead class="bg-blue">
                                          <tr>
                                             <th>Sr. No.</th>
                                             <th>Name</th>
                                             <th>Email</th>
                                             <th>Mobile</th>
                                             <th>Date</th>
                                             <th>Feedback</th>
                                             <th>Call</th>


                                          </tr>
                                       </thead>
                                       <tbody class="fs-14">
                                       <?php $ret=mysqli_query($con,"select * from leads");
												$cnt=1;
												while($row=mysqli_fetch_array($ret))
												{
													$_SESSION['ids']=$row['id'];
												?>
                                                    <tr>
                                                        <td><?php echo $cnt;?></td>
                                                        <td><?php echo $row['name'];?></td>
                                                        <td><?php echo $row['email_id'];?></td>
                                                         <td><?php echo $row['mobile'];?></td>
                                                          <td><?php echo $row['generation_date'];?></td>
                                                          <td><?php echo $row['feedback1'];?></td>
                                                          <td><?php echo $row['call1'];?></td>


                                                          <td>
                                                          <form name="abc" action="" method="post">
                                                         

                                                           </form>
                                                          </td>
                                                    </tr>
                                                    <?php $cnt=$cnt+1; } ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <!--Table  End-->
                        </div>
                     
                     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                       
                        <h1 class="h2">
                           Dashboard
                        </h1>
                     </div>
                     
                     
                     <div class="row">
                        <div class="col-md-6">
                           <!--Table  Begin-->
                           <div class="card border-0  shadow mb-4">
                              <div class="card-header bg-darkblue py-3">
                                 <h6 class="text-reset">Google Ad Leads</h6>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive dash_table">
                                    <table id="google_leads" class="table table-striped table-hover">
                                       <thead class="bg-blue">
                                          <tr>
                                             <th>S.no</th>
                                             <th>Name</th>
                                             <th>Mobile No.</th>
                                             <th>City </th>
                                             <th>Date</th>
                                          </tr>
                                       </thead>
                                       <tbody class="fs-14">
                                          <tr>
                                             <td>1</td>
                                             <td>Adarsh</td>
                                             <td>+91-45556677</td>
                                             <td>Indore</td>
                                             <td>03-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>2</td>
                                             <td>Harsh</td>
                                             <td>+91-45556447</td>
                                             <td>Indore</td>
                                             <td>03-JUN-2021</td>
                                          </tr>
                                          <tr>
                                             <td>3</td>
                                             <td>Mili</td>
                                             <td>+91-45556677</td>
                                             <td>Jabalpur</td>
                                             <td>08-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>4</td>
                                             <td>Honey</td>
                                             <td>+91-56556677</td>
                                             <td>Bhopal</td>
                                             <td>06-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>5</td>
                                             <td>Barsh</td>
                                             <td>+91-47856677</td>
                                             <td>Indore</td>
                                             <td>03-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>6</td>
                                             <td>Tarsh</td>
                                             <td>+91-87746447</td>
                                             <td>Indore</td>
                                             <td>03-JUN-2021</td>
                                          </tr>
                                          <tr>
                                             <td>7</td>
                                             <td>Varsh</td>
                                             <td>+91-7887447</td>
                                             <td>Indore</td>
                                             <td>03-JUN-2021</td>
                                          </tr>
                                          <tr>
                                             <td>8</td>
                                             <td>tili</td>
                                             <td>+91-444677</td>
                                             <td>Jabalpur</td>
                                             <td>08-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>9</td>
                                             <td>Boney</td>
                                             <td>+91-77756677</td>
                                             <td>Bhopal</td>
                                             <td>06-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>10</td>
                                             <td>arsh</td>
                                             <td>+91-45545477</td>
                                             <td>Indore</td>
                                             <td>03-Dec-2021</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
   
                              </div>
                           </div>
                           <!--Table  End-->
                        </div>
   
                        <div class="col-md-6">
                           <!--Table  Begin-->
                           <div class="card border-0  shadow mb-4">
                              <div class="card-header bg-darkblue py-3">
                                 <h6 class="text-reset">Facebook Ad Leads</h6>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive dash_table">
                                    <table id="facebook_leads" class="table table-striped table-hover">
                                       <thead class="bg-blue">
                                          <tr>
                                             <th>S.no</th>
                                             <th>Name</th>
                                             <th>Mobile No.</th>
                                             <th>City</th>
                                             <th>Date</th>
                                          </tr>
                                       </thead>
                                       <tbody class="fs-14">
                                          <tr>
                                             <td>1</td>
                                             <td>Adarsh</td>
                                             <td>+91-45556677</td>
                                             <td>Indore</td>
                                             <td>03-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>2</td>
                                             <td>Harsh</td>
                                             <td>+91-45556447</td>
                                             <td>Indore</td>
                                             <td>03-JUN-2021</td>
                                          </tr>
                                          <tr>
                                             <td>3</td>
                                             <td>Mili</td>
                                             <td>+91-45556677</td>
                                             <td>Jabalpur</td>
                                             <td>08-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>4</td>
                                             <td>Honey</td>
                                             <td>+91-56556677</td>
                                             <td>Bhopal</td>
                                             <td>06-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>5</td>
                                             <td>Barsh</td>
                                             <td>+91-47856677</td>
                                             <td>Indore</td>
                                             <td>03-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>6</td>
                                             <td>Tarsh</td>
                                             <td>+91-87746447</td>
                                             <td>Indore</td>
                                             <td>03-JUN-2021</td>
                                          </tr>
                                          <tr>
                                             <td>7</td>
                                             <td>Varsh</td>
                                             <td>+91-7887447</td>
                                             <td>Indore</td>
                                             <td>03-JUN-2021</td>
                                          </tr>
                                          <tr>
                                             <td>8</td>
                                             <td>tili</td>
                                             <td>+91-444677</td>
                                             <td>Jabalpur</td>
                                             <td>08-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>9</td>
                                             <td>Boney</td>
                                             <td>+91-77756677</td>
                                             <td>Bhopal</td>
                                             <td>06-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>10</td>
                                             <td>arsh</td>
                                             <td>+91-45545477</td>
                                             <td>Indore</td>
                                             <td>03-Dec-2021</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <!--Table  End-->
                        </div>
   
                        <div class="col-md-6">
                           <!--Table  Begin-->
                           <div class="card border-0  shadow mb-4">
                              <div class="card-header bg-darkblue py-3">
                                 <h6 class="text-reset">Quara Ad Leads</h6>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive dash_table">
                                    <table id="quara_leads" class="table table-striped table-hover">
                                       <thead class="bg-blue">
                                          <tr>
                                             <th>S.no</th>
                                             <th>Name</th>
                                             <th>Mobile No.</th>
                                             <th>City </th>
                                             <th>Date</th>
                                          </tr>
                                       </thead>
                                       <tbody class="fs-14">
                                          <tr>
                                             <td>1</td>
                                             <td>Adarsh</td>
                                             <td>+91-45556677</td>
                                             <td>Indore</td>
                                             <td>03-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>2</td>
                                             <td>Harsh</td>
                                             <td>+91-45556447</td>
                                             <td>Indore</td>
                                             <td>03-JUN-2021</td>
                                          </tr>
                                          <tr>
                                             <td>3</td>
                                             <td>Mili</td>
                                             <td>+91-45556677</td>
                                             <td>Jabalpur</td>
                                             <td>08-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>4</td>
                                             <td>Honey</td>
                                             <td>+91-56556677</td>
                                             <td>Bhopal</td>
                                             <td>06-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>5</td>
                                             <td>Barsh</td>
                                             <td>+91-47856677</td>
                                             <td>Indore</td>
                                             <td>03-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>6</td>
                                             <td>Tarsh</td>
                                             <td>+91-87746447</td>
                                             <td>Indore</td>
                                             <td>03-JUN-2021</td>
                                          </tr>
                                          <tr>
                                             <td>7</td>
                                             <td>Varsh</td>
                                             <td>+91-7887447</td>
                                             <td>Indore</td>
                                             <td>03-JUN-2021</td>
                                          </tr>
                                          <tr>
                                             <td>8</td>
                                             <td>tili</td>
                                             <td>+91-444677</td>
                                             <td>Jabalpur</td>
                                             <td>08-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>9</td>
                                             <td>Boney</td>
                                             <td>+91-77756677</td>
                                             <td>Bhopal</td>
                                             <td>06-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>10</td>
                                             <td>arsh</td>
                                             <td>+91-45545477</td>
                                             <td>Indore</td>
                                             <td>03-Dec-2021</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
   
                              </div>
                           </div>
                           <!--Table  End-->
                        </div>
   
                        <div class="col-md-6">
                           <!--Table  Begin-->
                           <div class="card border-0  shadow mb-4">
                              <div class="card-header bg-darkblue py-3">
                                 <h6 class="text-reset">LinkedIn Ad Leads</h6>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive dash_table">
                                    <table id="linkedin_leads" class="table table-striped table-hover">
                                       <thead class="bg-blue">
                                          <tr>
                                             <th>S.no</th>
                                             <th>Name</th>
                                             <th>Mobile No.</th>
                                             <th>City</th>
                                             <th>Date</th>
                                          </tr>
                                       </thead>
                                       <tbody class="fs-14">
                                          <tr>
                                             <td>1</td>
                                             <td>Adarsh</td>
                                             <td>+91-45556677</td>
                                             <td>Indore</td>
                                             <td>03-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>2</td>
                                             <td>Harsh</td>
                                             <td>+91-45556447</td>
                                             <td>Indore</td>
                                             <td>03-JUN-2021</td>
                                          </tr>
                                          <tr>
                                             <td>3</td>
                                             <td>Mili</td>
                                             <td>+91-45556677</td>
                                             <td>Jabalpur</td>
                                             <td>08-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>4</td>
                                             <td>Honey</td>
                                             <td>+91-56556677</td>
                                             <td>Bhopal</td>
                                             <td>06-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>5</td>
                                             <td>Barsh</td>
                                             <td>+91-47856677</td>
                                             <td>Indore</td>
                                             <td>03-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>6</td>
                                             <td>Tarsh</td>
                                             <td>+91-87746447</td>
                                             <td>Indore</td>
                                             <td>03-JUN-2021</td>
                                          </tr>
                                          <tr>
                                             <td>7</td>
                                             <td>Varsh</td>
                                             <td>+91-7887447</td>
                                             <td>Indore</td>
                                             <td>03-JUN-2021</td>
                                          </tr>
                                          <tr>
                                             <td>8</td>
                                             <td>tili</td>
                                             <td>+91-444677</td>
                                             <td>Jabalpur</td>
                                             <td>08-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>9</td>
                                             <td>Boney</td>
                                             <td>+91-77756677</td>
                                             <td>Bhopal</td>
                                             <td>06-Dec-2021</td>
                                          </tr>
                                          <tr>
                                             <td>10</td>
                                             <td>arsh</td>
                                             <td>+91-45545477</td>
                                             <td>Indore</td>
                                             <td>03-Dec-2021</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <!--Table  End-->
                        </div>
   
                        <div class="col-md-12">
                           <!--Table  Begin-->
                           <div class="card border-0  shadow mb-4">
                              <div class="card-header bg-darkblue py-3">
                                 <h6 class="text-reset">Website Enquiry Form Leads</h6>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive dash_table">
                                    <table id="website_enquiry_leads" class="table table-striped table-hover">
                                       <thead class="bg-blue">
                                          <tr>
                                             <th>S.no</th>
                                             <th>Name</th>
                                             <th>Country</th>
                                             <th>Mobile No.</th>
                                             <th>Email</th>
                                             <th>Date</th>
                                             <th>Source</th>
                                          </tr>
                                       </thead>
                                       <tbody class="fs-14">
                                          <tr>
                                             <td>1</td>
                                             <td>Visitor</td>
                                             <td>INDIA</td>
                                             <td>+91-45556677</td>
                                             <td>Visitor@gmail.com</td>
                                             <td>18-07-2022</td>
                                             <td>LinkedIn</td>
                                          </tr>
                                          <tr>
                                             <td>2</td>
                                             <td>Visitor</td>
                                             <td>INDIA</td>
                                             <td>+91-45556677</td>
                                             <td>Visitor@gmail.com</td>
                                             <td>18-07-2022</td>
                                             <td>LinkedIn</td>
                                          </tr>
                                          <tr>
                                             <td>3</td>
                                             <td>Visitor</td>
                                             <td>INDIA</td>
                                             <td>+91-45556677</td>
                                             <td>Visitor@gmail.com</td>
                                             <td>18-07-2022</td>
                                             <td>LinkedIn</td>
                                          </tr>
                                          <tr>
                                             <td>4</td>
                                             <td>Visitor</td>
                                             <td>INDIA</td>
                                             <td>+91-45556677</td>
                                             <td>Visitor@gmail.com</td>
                                             <td>18-07-2022</td>
                                             <td>Google</td>
                                          </tr>
                                          <tr>
                                             <td>5</td>
                                             <td>Visitor</td>
                                             <td>INDIA</td>
                                             <td>+91-45556677</td>
                                             <td>Visitor@gmail.com</td>
                                             <td>18-07-2022</td>
                                             <td>Facebook</td>
                                          </tr>
                                          <tr>
                                             <td>6</td>
                                             <td>Visitor</td>
                                             <td>INDIA</td>
                                             <td>+91-45556677</td>
                                             <td>Visitor@gmail.com</td>
                                             <td>18-07-2022</td>
                                             <td>Google</td>
                                          </tr>
                                          <tr>
                                             <td>7</td>
                                             <td>Visitor</td>
                                             <td>INDIA</td>
                                             <td>+91-45556677</td>
                                             <td>Visitor@gmail.com</td>
                                             <td>18-07-2022</td>
                                             <td>Facebook</td>
                                          </tr>
                                          <tr>
                                             <td>8</td>
                                             <td>Visitor</td>
                                             <td>INDIA</td>
                                             <td>+91-45556677</td>
                                             <td>Visitor@gmail.com</td>
                                             <td>18-07-2022</td>
                                             <td>Quara</td>
                                          </tr>
                                          <tr>
                                             <td>9</td>
                                             <td>Visitor</td>
                                             <td>INDIA</td>
                                             <td>+91-45556677</td>
                                             <td>Visitor@gmail.com</td>
                                             <td>18-07-2022</td>
                                             <td>Quara</td>
                                          </tr>
                                          <tr>
                                             <td>10</td>
                                             <td>Visitor</td>
                                             <td>INDIA</td>
                                             <td>+91-45556677</td>
                                             <td>Visitor@gmail.com</td>
                                             <td>18-07-2022</td>
                                             <td>Quara</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <!--Table  End-->
                        </div>
                     </div>
                  </div>

   
                  </div>
                  <!-- Container End-->
		
	  <!-- END DASHBOARD TILES -->
           
                    <!-- END DASHBOARD CHART --> 
		
	  <!-- END DASHBOARD TILES -->
           
                    <!-- END DASHBOARD CHART --> 
			
               
          
		  </div></div>
<!-- BEGIN CHAT --> 
	  
</div>
<script src="../assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="../assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="../assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script>
<script src="../assets/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
<script src="../assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
<script src="../assets/plugins/jquery-sparkline/jquery-sparkline.js"></script>
<script src="../assets/plugins/skycons/skycons.js"></script>
<script src="../assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script type="../text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="../assets/plugins/jquery-gmap/gmaps.js" type="text/javascript"></script>
<script src="assets/plugins/Mapplic/js/jquery.easing.js" type="text/javascript"></script>
<script src="../assets/plugins/Mapplic/js/jquery.mousewheel.js" type="text/javascript"></script>
<script src="../assets/plugins/Mapplic/js/hammer.js" type="text/javascript"></script>
<script src="../assets/plugins/Mapplic/mapplic/mapplic.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript" ></script>
<script src="../assets/js/core.js" type="text/javascript"></script>
<script src="../assets/js/chat.js" type="text/javascript"></script>
<script src="../assets/js/demo.js" type="text/javascript"></script>
<script src="../assets/js/dashboard_v2.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/highcharts.js"></script>
	<script type="text/javascript" src="js/exporting.js"></script>	
<script type="text/javascript">
        $(document).ready(function () {
            $(".live-tile,.flip-list").liveTile();
        });
</script>
</body>
</html>
