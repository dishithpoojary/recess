
<?php
include "connection.php";
include "session.php";

if(!isset($_SESSION["username"]))
{
	header('Location: index.php');
}


$uid = $_SESSION["userid"];

$query="SELECT * FROM subject WHERE `userid`='$uid'";
$query2="SELECT * FROM todo WHERE `userid`='$uid'";


$query_run = $conn->query($query);
$query_run1 = $conn->query($query);
$query_run2 = $conn->query($query);
$query_run3 = $conn->query($query);
$query_run4 = $conn->query($query);
$query_run5 = $conn->query($query);
$query_run6 = $conn->query($query2);
$subcount = $query_run->num_rows;

?>

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HI! <?php echo $_SESSION["name"]; ?></title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
	

	
<style>

</style>
	
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dash.php">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Andrew Smith</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-success">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
				
                <ul class="nav" id="side-menu">
                    <li>
					
                        <!-- user image section-->
                        <div class="user-section">
                       
					   <div class="user-section-inner">
                                <a href="#modalimg" data-toggle="modal" ><img src="<?php echo "images/".$_SESSION["img"]?>" alt="" ></a> 
                         </div>
							

							
							
							
							
							
                            <div class="user-info">
                                <div style="color:white;"><?php echo ucfirst($_SESSION["username"]);?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
					
					 
							
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
					
                    <li class="selected">
                        <a href="dash.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="community.php"><i class="fa fa-bar-chart-o fa-fw"></i> Communities</a>
                    
                        <!-- second-level-items -->
                    </li>
                     <li>
                        <a href="timeline.php"><i class="fa fa-flask fa-fw"></i>Timeline</a>
                    </li>
                    
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
		
		
		<!--img modal-->
		<div class="modal fade" id="modalimg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Upload Your Profile Photo</h4>
					</div>
					<div class="modal-body">
					 
						<div class="panel panel-default">

							<div class="panel-body">
								
								<form action="upload.php" method="post" enctype="multipart/form-data">
								
								<input type="file" class="btn btn-info" name="myimage" id="myimage"> </input>
								</br></br>
								<div><input type="submit" name="upload" value="Upload" class="btn btn-primary"</input></div>
								
								</form>
								
								
							</div>
						</div>								 

						
													
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

					</div>
				</div>
			</div>
	</div> 

		
		
		
		
		
            <div class="row">
                <!-- Page Header -->
                <div class="col-md-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome back <b> <?php echo ucfirst($_SESSION["name"]);?></b>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
			
			<div class="row">
				<?php
					include 'alert.php';
				?>
			</div>
			
            <div class="row">
				<div class="col-md-6">
					<div class="panel panel-primary text-center no-boder">
						
                        <div class="panel-body yellow">
                            <i class="fa fa-bar-chart-o fa-3x"></i>
                            <h3>Attendance </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title"><a href="#myModal1" class="btn btn-default btn-block" data-toggle="modal">View </a>
                            </span>
                        </div>
						<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">YOUR ATTENDANCE THIS MONTH</h4>
                                        </div>
                                        <div class="modal-body">
                                         
											<div class="panel panel-default">

												<div class="panel-body">
													<div class="table-responsive">
														<table class="table table-hover">
															<thead>
																<tr>
																	<th align=center >#</th>
																	<th align=center >SUBJECTS</th>
																	<th align=center >YOUR ATTENDANCE THIS MONTH</th>
																</tr>
															</thead>
															<tbody>
																<?php 
																$count = 0;
																while($query_row = $query_run->fetch_assoc())
																	{ $count++;?>	
																	<tr>  
																	
																		<td align=center>
																			<div >
																			
																				<span ><?php echo strtoupper($count);?></span>
																			
																			</div>
																		</td>  
																		
																		<td align=center>
																			<div >
																			
																				<span ><?php echo strtoupper($query_row['subjects']);?></span>
																			
																			</div>
																		</td>  
																		
																		<td align=center>
																			<div >
																			
																				<span ><?php echo strtoupper($query_row['attendance']);?></span>
																			
																			</div>
																		</td>
																	</tr>
																<?php }?> 
															</tbody>
														</table>
													</div>
												</div>
											</div>								 

											
																		
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <span ><a href="#myModal11" class="btn btn-primary " data-toggle="modal">Update </a>
											</span>
                                        </div>
                                    </div>
                                </div>
						</div> 
						
						<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">LECTURES YOU ATTENDED</h4>
                                        </div>
										<form name="add_attendance" id="add_attendance" action="attendance.php"  method="post" > 
											<div class="modal-body">
											<div class="form-group">  
												
													<div class="table-responsive"> 
														<div class="form-group">
															<table class="table table-bordered" id="dynamic_field">  
																<?php 
																while($query_row1 = $query_run1->fetch_assoc())
																	{?>	
																	<tr>  
																		<td>
																			<div class="text-centers">
																			<label class="btn btn-default btn-block">
																				<input type="checkbox" name="att[]" autocomplete="off" value="<?php echo $query_row1['subjects'];?>">
																				<span class="label label-warning"><?php echo strtoupper($query_row1['subjects']);?></span>
																			</label>
																			</div>
																		</td>  
																	</tr>
																<?php }?> 
															</table>  

														</div>
													</div>
												
											</div>
											</div>
											<div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<input type="submit" name="update" id="update" class="btn btn-info" value="Submit" />  
											</div>
										</form>
                                    </div>
                                </div>
						</div> 
						
                    </div>
				</div>
                    
				<div class="col-md-6">
					<div class="panel panel-primary text-center no-boder">
						
                        <div class="panel-body blue">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <h3>Scorecard</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title"><a href="#myModal2" class="btn btn-default btn-block" data-toggle="modal">View</a>
                            </span>
                        </div>
						<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Scorecard</h4>
                                        </div>
                                        <div class="modal-body">
											
											<div class="panel panel-default">
							
												<div class="panel-body">
													<div class="table-responsive">
														<table class="table table-hover">
															<thead>
																<tr>
									
																	<th align=center >#</th>
																	<th align=center >SUBJECTS</th>
																	<th align=center >YOUR SCORES</th>
																
																</tr>
															</thead>
															<tbody>
																<?php 
																$count = 0;
																while($query_row2 = $query_run2->fetch_assoc())
																	{ $count++;?>	
																	<tr>  
																	
																		<td  >

																			
																				<label><?php echo strtoupper($count);?></Label>
																			

																		</td>  
																		
																		<td >
																			
																			
																				<label><?php echo strtoupper($query_row2['subjects']);?></label>
																			
																			
																		</td>  
																		
																		<td  >
																			
																				<label><?php echo strtoupper($query_row2['marks']);?></label>
																			
																		</td>
																	</tr>
																<?php }?> 
															</tbody>
														</table>
													</div>
												</div>
											</div>                                            
											
											
											
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <span ><a href="#myModal21" class="btn btn-primary " data-toggle="modal">Update </a>
											</span>
                                        </div>
                                    </div>
                                </div>
						</div> 

						<div class="modal fade" id="myModal21" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">ENTER YOUR LATEST SCORES!</h4>
                                        </div>
										<form name="add_marks" id="add_marks" action="marks.php"  method="post" > 
											<div class="modal-body">
											<div class="form-group">  
												
													<div class="table-responsive"> 
														<div class="form-group">
															<table class="table table-bordered" id="dynamic_field">  
																<?php 
																while($query_row3 = $query_run3->fetch_assoc())
																	{?>	
																	<tr>  
																		<td>
																			<div class="text-centers">
																			<label class="btn btn-default btn-block">
																				<input type="text" name="marks[]" autocomplete="off" placeholder="Enter the Scores" class="form-control name_list">
																				<span class="label label-warning"><?php echo strtoupper($query_row3['subjects']);?></span>
																			</label>
																			</div>
																		</td>  
																	</tr>
																<?php }?> 
															</table>  

														</div>
													</div>
												
											</div>
											</div>
											<div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<input type="submit" name="updatemarks" id="updatemarks" class="btn btn-info" value="Submit" />  
											</div>
										</form>
                                    </div>
                                </div>
						</div>						
						
						
						
					</div>					
				</div>	
				
            </div>
                 
			<div class="row">	
				<div class="col-md-6">
					<div class="panel panel-primary text-center no-boder">
						<div class="panel-body green">
                            <i class="fa fa fa-floppy-o fa-3x"></i>
                            <h3>Assignments</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title"><a href="#myModal3" class="btn btn-default btn-block" data-toggle="modal">View</a>
                            </span>
                        </div>
						<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Assignments!!!</h4>
                                        </div>
                                        <div class="modal-body">

											<div class="panel panel-default">
							
												<div class="panel-body">
													<div class="table-responsive">
														<table class="table table-hover">
															<thead>
																<tr>
									
																	<th align=center >#</th>
																	<th align=center >SUBJECTS</th>
																	<th align=center >ASSIGNMENTS  ....PENDING</th>
																	<th align=center >FINAL DATE OF SUBMISSION</th>
																
																</tr>
															</thead>
															<tbody>
																<?php 
																$count = 0;
																while($query_row4 = $query_run4->fetch_assoc())
																	{ $count++;?>	
																	<tr>  
																	
																		<td align=center   >

																			
																				<label><?php echo strtoupper($count);?></Label>
																			

																		</td>  
																		
																		<td  align=center >
																			
																			
																				<label><?php echo strtoupper($query_row4['subjects']);?></label>
																			
																			
																		</td>  
																		
																		<td align=center  >
																			
																				<label><?php echo strtoupper($query_row4['assignments']);?></label>
																			
																		</td>
																		
																		<td align=center  >
																			
																				<label><?php echo strtoupper($query_row4['date']);?></label>
																			
																		</td>
																	</tr>
																<?php }?> 
															</tbody>
														</table>
													</div>
												</div>
											</div>										
										   
										   
										   
										   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <span ><a href="#myModal31" class="btn btn-primary " data-toggle="modal">Update </a>
											</span>
                                        </div>
                                    </div>
                                </div>
						</div> 
						<div class="modal fade" id="myModal31" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">ENTER THE NUMBER OF ASSIGNMNENTS AND DATE OF SUBMISSION</h4>
                                        </div>
										<form name="add_ass" id="add_ass" action="assignment.php"  method="post" > 
											<div class="modal-body">
											<div class="form-group">  
												
													<div class="table-responsive"> 
														<div class="form-group">
															<table class="table table-bordered" id="dynamic_field">  
																<?php 
																while($query_row5 = $query_run5->fetch_assoc())
																	{?>	
																	<tr>  
																		<td>
																			<div class="text-centers">
																			<label class="btn btn-default btn-block">
																				<input type="text" name="ass[]" autocomplete="off" placeholder="Enter the number of Assignments" class="form-control name_list">
																				<input type="date" name="dateass[]" class="form-control input-lg">
																				<span class="label label-warning"><?php echo strtoupper($query_row5['subjects']);?></span>
																			</label>
																			</div>
																		</td>  
																	</tr>
																<?php }?> 
															</table>  

														</div>
													</div>
												
											</div>
											</div>
											<div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<input type="submit" name="updatemass" id="updatemass" class="btn btn-info" value="Submit" />  
											</div>
										</form>
                                    </div>
                                </div>
						</div>							
						
						
						
					</div>
                </div>
                 
                <div class="col-md-6">  				 
					<div class="panel panel-primary text-center no-boder">
 
						<div class="panel-body red">
						<i class="fa fa-thumbs-up fa-3x"></i>
                            <h3>The TO-DO List</h3>
                            
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title"><a href="#myModal4" class="btn btn-default btn-block" data-toggle="modal">View</a>
                            </span>
                        </div>
						<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">THE TO DO LIST!!</h4>
                                        </div>
                                        <div class="modal-body">

											<div class="panel panel-default">
							
												<div class="panel-body">
													<div class="table-responsive">
														<table class="table table-hover">
															<thead>
																<tr>
									
																	<th align=center >#</th>
																	<th align=center >LIST</th>
																	<th align=center >DO IT BEFORE!!</th>
																</tr>
															</thead>
															<tbody>
																<?php 
																$count = 0;
																while($query_row6 = $query_run6->fetch_assoc())
																	{ $count++;?>	
																
																	<tr> 
																		<td align=center   >

																			
																				<label><?php echo strtoupper($count);?></Label>
																			

																		</td>  
																		
																		<td  align=center >
																			
																			
																				<label><?php echo strtoupper($query_row6['item']);?></label>
																			
																			
																		</td>  
																		
																		<td align=center  >
																			
																				<label><?php echo strtoupper($query_row6['date']);?></label>
																			
																		</td>
																		
																	
																	</div>
																<?php }?> 
															</tbody>
														</table>
													</div>
												</div>
											</div>											
											
											
											
											
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <span ><a href="#myModal41" class="btn btn-primary " data-toggle="modal">Update </a>
											</span>
											
											<form name="clear_todo" id="clear_todo" action="cleartodo.php"  method="post" > 
												<input type="submit" name="cleartodo" id="cleartodo" class="btn btn-danger" value="CLEAR LIST" />  
											</form>
											
                                        </div>
                                    </div>
                                </div>
						</div> 
						<div class="modal fade" id="myModal41" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">ENTER THE THINGS TO DO!!</h4>
                                        </div>
										<form name="add_todo" id="add_todo" action="todo.php"  method="post" > 
											<div class="modal-body">
											<div class="form-group">  
												
													<div class="table-responsive"> 
														<div class="form-group">
															<table class="table table-bordered" id="dynamic_field1">  
																<tr>  
																	 <td><input type="text" name="item[]" placeholder="Enter the thing" class="form-control name_list" /></td>  
																	 <td><input type="date" name="dateitem[]" class="form-control input-lg"></td>  
																</tr> 
															</table>  

														</div>
													</div>
												
											</div>
											</div>
											<div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<input type="submit" name="updatetodo" id="updatetodo" class="btn btn-info" value="Submit" />  
											</div>
										</form>
                                    </div>
                                </div>
						</div>								
					
			
						
						
						
		
					</div>
                </div>
			</div>

			

			
        <!-- end page-wrapper -->


	
    </div>
    <!-- end wrapper -->
	


	
	
	
	<!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
	
	<script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.pie.js"></script>
    <script src="assets/scripts/flot-demo.js"></script>

  

</body>



</html>
