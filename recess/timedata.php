<?php

$sql1 = "SELECT * FROM subject
				WHERE `userid`='{$_SESSION["userid"]}'";
				
$sql2 = "SELECT * FROM todo
				WHERE `userid`='{$_SESSION["userid"]}'";

$types=array();
$ids=array();
$dates=array();
$mainstring=array();

$query_run1=$conn->query($sql1);
$query_run2=$conn->query($sql2);

while($query_row1=$query_run1->fetch_assoc())
{
	if($query_row1["date"]!="0000-00-00")
	{
		array_push($types,"a");
		array_push($ids,$query_row1["subjectid"]);
		array_push($dates,$query_row1["date"]);
	}
	
}

while($query_row2=$query_run2->fetch_assoc())
{
	array_push($types,"t");
	array_push($ids,$query_row2["todoid"]);
	array_push($dates,$query_row2["date"]);
}


array_multisort($dates,$ids,$types);

$tempass="";

?>

<div class="row">
	
	<div class="col-lg-12">
		<!--Timeline -->
		
		<div class="panel panel-primary">
			<div class="panel-heading">
				<i class="fa fa-clock-o fa-fw"></i>Timeline
			</div>
			<div class="panel-body">
				
				<ul class="timeline">
		
								<?php 
									if(count($types)==0)
									{ ?>
										
										<h2 class="timeline-title">No Events Yet</h2>

								<?php } ?>
						<?php 
							for($i=0;$i<count($types);$i++)
							{ 
								if($types[$i]=="a")
								{
									$sql = "SELECT assignments,date,subjects FROM subject
										WHERE `userid`='{$_SESSION["userid"]}' and `subjectid`='{$ids[$i]}'";
									$query_run=$conn->query($sql);
								
								while($query_row=$query_run->fetch_assoc())
								{
									$tempdate ="To be submitted before: ".$query_row['date'];
									if($query_row['assignments']==1)		
										$tempass = "You  have to complete ".$query_row['assignments']." ".$query_row['subjects']." assignment ";
									else if($query_row['assignments']>1)
										$tempass = "You  have to complete ".$query_row['assignments']." ".$query_row['subjects']." assignments ";
								}
								}
								else{
									$sql = "SELECT item,date FROM todo
												WHERE `userid`='{$_SESSION["userid"]}' and `todoid`='{$ids[$i]}'";
									$query_run=$conn->query($sql);
								
								while($query_row=$query_run->fetch_assoc())
								{	
									$tempdate = "To be done before ".$query_row['date'];
									$tempass = "You have to: ".$query_row['item'];
								}			
									
								}					
						
							?>
							

								
								
								
								<?php 
									if($i%2==0){
								?>
									<li>
										<div class="timeline-badge">
											<i class="fa fa-check"></i>
										</div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h4 class="timeline-title">Timeline Event</h4>
												<p>
													<small class="text-muted"><i class="fa fa-time"></i><?php echo $tempdate; ?> </small>
												</p>
											</div>
											<div class="timeline-body">
												<p><?php echo $tempass; ?></p>
											</div>
										</div>
									</li>
								<?php } ?>
								<?php
								if($i%2!=0) {
								?>
								<li class="timeline-inverted">
									<div class="timeline-badge warning">
										<i class="fa fa-credit-card"></i>
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Timeline Event</h4>
											<p>
													<small class="text-muted"><i class="fa fa-time"></i><?php echo $tempdate; ?> </small>
											</p>
										</div>
										<div class="timeline-body">
												<p><?php echo $tempass; ?></p>
											</div>
									</div>
								</li>
								<?php } ?>
								

								
								
						<?php }?>
				</ul>
			</div>
		</div>
	</div>
</div>


