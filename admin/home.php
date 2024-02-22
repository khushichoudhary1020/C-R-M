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
<title>TVE | Admin Dashboard</title>
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
	  <div class="row">	 
		<div class="col-md-3 col-vlg-3 col-sm-6">
			<div class="tiles green m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title ">Visitors </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
                      <?php $ov=mysqli_query($con,"select * from usercheck");
					  $num=mysqli_num_rows($ov);
					  ?>
						<span class="item-title">Overall</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $num;?>" data-animation-duration="700">0</span>
					  </div>
                    </div>
                  
                    
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
                        <?php
					   $tdate=date("Y/m/d");
					  
					    $tv1=mysqli_query($con,"select * from usercheck where logindate='$tdate'");
					  $num11=mysqli_num_rows($tv1);
					  ?>
									
									
						
						<span class="item-title">Today</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $num11;?>" data-animation-duration="700">0</span> <?php									
									
									?>
					 </div>
                    </div>
                   
                   
			  </div>			
			</div>	
	

		</div>
		<div class="col-md-3 col-vlg-3 col-sm-6">
			<div class="tiles blue m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title ">Registered Users  </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent">
                      <?php $rt=mysqli_query($con,"select * from user");
					  $rw=mysqli_num_rows($rt);?> 
						<span class="item-title">All</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $rw;?>" data-     animation-duration="700">0</span>
					  </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
                      <?php 
					  $utd=date('Y-m-d');
					  $rt1=mysqli_query($con,"select * from user where posting_date='$utd'");
					  $rw1=mysqli_num_rows($rt1);?>
						<span class="item-title">Today</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $rw1;?>" data-animation-duration="700">0</span> 
					 </div>
                    </div>
			  </div>			
			</div>	
		</div>
		<div class="col-md-3 col-vlg-3 col-sm-6">
			<div class="tiles purple m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title ">Quote Requests </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
                      <?php
                      $qr=mysqli_query($con,"select * from prequest");
					  $oq=mysqli_num_rows($qr);
					  ?>
						<span class="item-title">Overall</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $oq?>" data-animation-duration="700">0</span>
					  </div>
                    </div>
                    <div class="widget-stats">
                      <div class="wrapper transparent">
                       <?php
                      $qr1=mysqli_query($con,"select * from prequest where status='0'");
					  $oq1=mysqli_num_rows($qr1);
					  ?>
						<span class="item-title">New</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $oq1;?>" data-animation-duration="700">0</span> 
					  </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
                       <?php
                      $qr2=mysqli_query($con,"select * from prequest where status='1'");
					  $oq2=mysqli_num_rows($qr2);
					  ?>
						<span class="item-title">In Progress</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $oq2;?>" data-animation-duration="700">0</span> 
					 </div>
                    </div>
                  
                    
			  </div>			
			</div>	
		</div>	
        
		<div class="col-md-3 col-vlg-3 col-sm-6">
			<div class="tiles red m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title ">Leads </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
                      <?php $vt=mysqli_query($con,"select * from leads");
					  $ovt=mysqli_num_rows($vt);
					  ?>
						<span class="item-title">All</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $ovt;?>" data-animation-duration="700">0</span>
					  </div>
                    </div>
                  
                    
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
                        <?php
					   $tdate=date("Y/m/d");
					  
					    $otv=mysqli_query($con,"select * from leads where status='Open'");
					  $otv1=mysqli_num_rows($otv);
					  ?>
									
									
						
						<span class="item-title">Pending</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $otv1;?>" data-animation-duration="700">0</span> <?php									
									
									?>
					 </div>
                    </div>
                   
                   
			  </div>			
			</div>	
	

		</div>
	
        </div>     
		
	 </div>
	  <!-- END DASHBOARD TILES -->
           <!-- START DASHBOARD CHART -->



                    <div class="col-lg-12" style="min-height:280px;">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> All Visits </h3>
								
								<script type="text/javascript">
								var visitorsCount = [];
								var myCat =[];
								</script>
								<?php
								$totaldays = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y")); 
								
								$month_array=array();
								for($i=1; $i<=$totaldays; $i++)
								{
									if(!array_key_exists($i,$month_array))
									{
										$key = '';
										if($i<10)
										{
											$key = '0'.$i;
											$month_array[$key] = 0;
										}
										else
										{
											$month_array[$i] = 0;
										}
										?>
										<script type="text/javascript">
										var myKey = "Day " + '<?php echo $i; ?>';
										
										myCat.push(myKey);
										</script>
										<?php
										
									}
									
									
								}
								//print_r($month_array);
								$results = mysqli_query($con,"SELECT logindate FROM usercheck");
					                //$f2=mysql_num_rows($a2);
									
									if(mysqli_num_rows($results) >0)
									{
										while($row = mysqli_fetch_row($results))
										{
											$user_date = $row[0];
											$dateArray = explode('/',$user_date);
											$year = $dateArray[0];
											 $monthName = date("M", mktime(0, 0, 0, $dateArray[1], 10));
											 $currentMonth = date('m',mktime(0, 0, 0, $dateArray[1], 10));
											// echo $monthName; 
											//$month = date("M", strtotime($user_date));
											//echo $month;
											
											
											//echo $month.'<br/>';
											
											//$day = date('d',$dateArray));
											
											if($year == date("Y") && $currentMonth == date("m"))
											{
												
												if(array_key_exists($dateArray[2],$month_array))
												{
													$month_array[$dateArray[2]] = $month_array[$dateArray[2]] + 1;
												}
											}											
										}
									}
									//print_r($month_array);
									foreach($month_array as $key=>$value)
									{
									?>
									<script type="text/javascript">
									visitorsCount.push(<?php echo $value;?>);
									</script>
									<?php									
									}
									?>
									
								
										
							
								<script type="text/javascript">
								var d = new Date();
								var month = new Array();
								month[0] = "January";
								month[1] = "February";
								month[2] = "March";
								month[3] = "April";
								month[4] = "May";
								month[5] = "June";
								month[6] = "July";
								month[7] = "August";
								month[8] = "September";
								month[9] = "October";
								month[10] = "November";
								month[11] = "December";
								var n = month[d.getMonth()];
								$(function () {
								$('#container').highcharts({
									title: {
										text: 'Daily Visitors Chart of ' + n,
										x: -20 //center
									},
									subtitle: {
										text: '',
										x: -20
									},
									xAxis: {
										categories: myCat
									},
									yAxis: {
										min:0,
										title: {
											text: 'Visitors Count'
										},
										plotLines: [{
											value: 0,
											width: 1,
											color: '#808080'
										}]
									},
									tooltip: {
										valueSuffix: ' Users'
									},
									legend: {
										layout: 'vertical',
										align: 'right',
										verticalAlign: 'middle',
										borderWidth: 0
									},
									series: [{
										name: 'visitorsCount',
										data: visitorsCount
									}]
								});
							});
								</script>
								<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
								
                            </div>
                            <div class="panel-body">
                                <div id="morris-line-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    	   <!-- Container Begin-->
                        
     <div class="container-fluid px-4">


     
                     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                       
                        <h1 class="h2">
                           
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
                                             <th>Country</th>
                                             <th>Date</th>
											 <th>Visa</th>
											 <th>Course</th>
                                          </tr>
                                       </thead>
                                       <tbody class="fs-14">
                                          <tr>
                                             <td>1</td>
                                             <td>Adarsh</td>
                                             <td>+91-45556677</td>
                                             <td>Canada</td>
                                             <td>03-Feb-2024</td>
											 <td>Study</td>
                                             <td>IELTS</td>
                                          </tr>
                                          <tr>
                                             <td>2</td>
                                             <td>Harsh</td>
                                             <td>+91-45556447</td>
                                             <td>Canada</td>
                                             <td>03-Feb-2024</td>
											 <td>Study</td>
                                             <td>IELTS</td>
                                          </tr>
                                          <tr>
                                             <td>3</td>
                                             <td>Mili</td>
                                             <td>+91-45556677</td>
                                             <td>Canada</td>
                                             <td>04-Feb-2024</td>
											 <td>Spouse</td>
                                             <td>PTE</td>
                                          </tr>
                                          <tr>
                                             <td>4</td>
                                             <td>Honey</td>
                                             <td>+91-56556677</td>
                                             <td>Australia</td>
                                             <td>04-Feb-2024</td>
											 <td>Tourist</td>
                                             <td>PTE</td>
                                          </tr>
                                          <tr>
                                             <td>5</td>
                                             <td>Barsh</td>
                                             <td>+91-47856677</td>
                                             <td>Canada</td>
                                             <td>04-Feb-2024</td>
											 <td>Study</td>
                                             <td>PTE</td>
                                          </tr>
                                          <tr>
                                             <td>6</td>
                                             <td>Tarsh</td>
                                             <td>+91-87746447</td>
                                             <td>US</td>
                                             <td>04-Feb-2024</td>
											 <td>Family</td>
                                             <td>PTE</td>
                                          </tr>
                                          <tr>
                                             <td>7</td>
                                             <td>Varsh</td>
                                             <td>+91-7887447</td>
                                             <td>Canada</td>
                                             <td>04-Feb-2024</td>
											 <td>Visitor</td>
                                             <td>PTE</td>
                                          </tr>
                                          <tr>
                                             <td>8</td>
                                             <td>tili</td>
                                             <td>+91-444677</td>
                                             <td>Canada</td>
                                             <td>04-Feb-2024</td>
											 <td>Tourist</td>
                                             <td>IELTS</td>
                                          </tr>
                                          <tr>
                                             <td>9</td>
                                             <td>Boney</td>
                                             <td>+91-77756677</td>
                                             <td>Canada</td>
                                             <td>04-Feb-2024</td>
											 <td>Family</td>
                                             <td>PTE</td>
                                          </tr>
                                          <tr>
                                             <td>10</td>
                                             <td>arsh</td>
                                             <td>+91-45545477</td>
                                             <td>Canada</td>
                                             <td>04-Feb-2024</td>
											 <td>PR</td>
                                             <td>IELTS</td>
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
                                             <th>Country</th>
                                             <th>Date</th>
											 <th>Visa</th>
											 <th>Course</th>
                                          </tr>
                                       </thead>
                                       <tbody class="fs-14">
                                          <tr>
                                             <td>1</td>
                                             <td>Adarsh</td>
                                             <td>+91-45556677</td>
                                             <td>Canada</td>
                                             <td>04-Feb-2024</td>
											 <td>PR</td>
                                             <td>IELTS</td>
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
                           
                        </div>
                     </div>
                     <!--container for telecaller's table starts-->
                     <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="grid simple ">
                                    <div class="grid-title no-border">
                                        	<h4>Telecaller's Feedback</h4>
                                        <div class="tools">	<a href="javascript:;" class="collapse"></a>
                                        </div>
                                    </div>
                                    <div class="grid-body no-border">
                              
                                            <table class="table table-bordered table-hover no-more-tables">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Full Name</th>
                                                        <th>Email ID </th>
                                                        <th>Contact No</th>
                                                        <th>T Feedback</th>
                                                        <th>Registration Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $ret=mysqli_query($con,"select * from leads order by logintime desc");
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
                                                         <td><?php echo $row['feedback1'];?></td>
                                                          <td><?php echo $row['logintime'];?></td>
                                                          <td>
                                                          <form name="abc" action="" method="post">
                                                           <a href="edit-user.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-xs btn-mini rounded-0">Edit</a> 
                                                           <button type="button" class="btn btn-danger btn-xs btn-mini rounded-0">Delete </button>
                                                           </form>
                                                          </td>
                                                    </tr>
                                                    <?php $cnt=$cnt+1; } ?>
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					</div>
               <!--container for telecaller's table ends-->
<!--container for filer's table starts here-->

            <div>
            <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="grid simple ">
                                    <div class="grid-title no-border">
                                        	<h4>Counsellor's Feedback</h4>
                                        <div class="tools">	<a href="javascript:;" class="collapse"></a>
                                        </div>
                                    </div>
                                    <div class="grid-body no-border">
                              
                                            <table class="table table-bordered table-hover no-more-tables">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Full Name</th>
                                                        <th>Email ID </th>
                                                        <th>Contact No</th>
                                                        <th>Registration Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
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
                                                          <td>
                                                          <form name="abc" action="" method="post">
                                                           <a href="edit-user.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-xs btn-mini rounded-0">Edit</a> 
                                                           <button type="button" class="btn btn-danger btn-xs btn-mini rounded-0">Delete </button>
                                                           </form>
                                                          </td>
                                                    </tr>
                                                    <?php $cnt=$cnt+1; } ?>
                                                </tbody>
                                            </table>
                         
                                    </div>
                                </div>
                            </div>
                        </div>
<!--container for filer's table starts here-->

                        <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="grid simple ">
                                    <div class="grid-title no-border">
                                        	<h4>Filer's Feedback</h4>
                                        <div class="tools">	<a href="javascript:;" class="collapse"></a>
                                        </div>
                                    </div>
                                    <div class="grid-body no-border">
                              
                                            <table class="table table-bordered table-hover no-more-tables">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Full Name</th>
                                                        <th>Email ID </th>
                                                        <th>Contact No</th>
                                                        <th>Registration Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
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
                                                          <td>
                                                          <form name="abc" action="" method="post">
                                                           <a href="edit-user.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-xs btn-mini rounded-0">Edit</a> 
                                                           <button type="button" class="btn btn-danger btn-xs btn-mini rounded-0">Delete </button>
                                                           </form>
                                                          </td>
                                                    </tr>
                                                    <?php $cnt=$cnt+1; } ?>
                                                </tbody>
                                            </table>
                         
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--container for manager's table starts here-->

                        <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="grid simple ">
                                    <div class="grid-title no-border">
                                        	<h4>Manager's Feedback</h4>
                                        <div class="tools">	<a href="javascript:;" class="collapse"></a>
                                        </div>
                                    </div>
                                    <div class="grid-body no-border">
                              
                                            <table class="table table-bordered table-hover no-more-tables">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Full Name</th>
                                                        <th>Email ID </th>
                                                        <th>Contact No</th>
                                                        <th>Registration Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
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
                                                          <td>
                                                          <form name="abc" action="" method="post">
                                                           <a href="edit-user.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-xs btn-mini rounded-0">Edit</a> 
                                                           <button type="button" class="btn btn-danger btn-xs btn-mini rounded-0">Delete </button>
                                                           </form>
                                                          </td>
                                                    </tr>
                                                    <?php $cnt=$cnt+1; } ?>
                                                </tbody>
                                            </table>
                         
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--container for others's table starts here-->

                        <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="grid simple ">
                                    <div class="grid-title no-border">
                                        	<h4>Other's Feedback</h4>
                                        <div class="tools">	<a href="javascript:;" class="collapse"></a>
                                        </div>
                                    </div>
                                    <div class="grid-body no-border">
                              
                                            <table class="table table-bordered table-hover no-more-tables">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Full Name</th>
                                                        <th>Email ID </th>
                                                        <th>Contact No</th>
                                                        <th>Registration Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
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
                                                          <td>
                                                          <form name="abc" action="" method="post">
                                                           <a href="edit-user.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-xs btn-mini rounded-0">Edit</a> 
                                                           <button type="button" class="btn btn-danger btn-xs btn-mini rounded-0">Delete </button>
                                                           </form>
                                                          </td>
                                                    </tr>
                                                    <?php $cnt=$cnt+1; } ?>
                                                </tbody>
                                            </table>
                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

					</div>
            </div>
         </div>
         <!--container for others table ends here-->
                    </div>                 
					</div>
            </div>
         </div>
         <!--container for managers table ends here-->
                        
                    </div>         
					</div>
            </div>
         </div>
<!--container for filer's table ends here-->
                    </div>
					</div>
            </div>
         </div>

            <!--container for Counsellor's table ends-->
                </div>
                
            </div>

            <!--container for telecaller's table ends-->
                  </div>
                  <!-- Container End-->
                </div>
             
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
