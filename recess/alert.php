<?php



$sqla1 = "SELECT * FROM subject
				WHERE `userid`='{$_SESSION["userid"]}'";
				
$sqla2 = "SELECT * FROM todo
				WHERE `userid`='{$_SESSION["userid"]}'";

$types=array();
$ids=array();
$dates=array();
$mainstring=array();
$temp="";

$query_runa1=$conn->query($sqla1);
$query_runa2=$conn->query($sqla2);

while($query_rowa1=$query_runa1->fetch_assoc())
{
	if($query_rowa1["date"]!="0000-00-00")
	{
		array_push($types,"a");
		array_push($ids,$query_rowa1["subjectid"]);
		array_push($dates,$query_rowa1["date"]);
	}
}

while($query_rowa2=$query_runa2->fetch_assoc())
{
	array_push($types,"t");
	array_push($ids,$query_rowa2["todoid"]);
	array_push($dates,$query_rowa2["date"]);
}


array_multisort($dates,$ids,$types);


?>

            
            
<?php 

	if(count($types)<=3)
	{	
			$countvar = count($types);
	}
	else
	{
			$countvar = 4;
	}
		for($i=0;$i<$countvar;$i++)
		{ 
			if($types[$i]=="a")
			{
				$sqla = "SELECT assignments,date,subjects FROM subject
					WHERE `userid`='{$_SESSION["userid"]}' and `subjectid`='{$ids[$i]}'";
				$query_runa=$conn->query($sqla);
			
				while($query_rowa=$query_runa->fetch_assoc())
				{
					if($query_rowa['assignments']==1)
					{
						$temp = "You have ".$query_rowa['assignments']." ".$query_rowa["subjects"]." assignment pending, to be submitted before ".$query_rowa['date'];
					}
					else if($query_rowa['assignments']>1)
					{
						$temp = "You have ".$query_rowa['assignments']." ".$query_rowa['subjects']." assignments pending, to be submitted before ".$query_rowa['date'];
					}
					
					
				
				}
			}
			else{
				$sqla = "SELECT item,date FROM todo
							WHERE `userid`='{$_SESSION["userid"]}' and `todoid`='{$ids[$i]}'";
				$query_runa=$conn->query($sqla);
			
				while($query_rowa=$query_runa->fetch_assoc())
				{	
					$temp = "You have to: ".$query_rowa['item']." before ".$query_rowa['date'];
					
				}			
				
			}
			

		?>
		<div class="col-md-3">
			<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<?php 
							if($types[$i]=="a")
							{
								echo $temp;
								
							}
							else{
								
								echo $temp;
							}
						?> 
			</div>
		</div>	
<?php } ?>

    