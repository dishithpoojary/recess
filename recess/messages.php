
<?php


	$sqlmess = "SELECT * FROM chat
				WHERE `communityid` = '{$_COOKIE["communityid"]}'";

	$query_runmess = $conn->query($sqlmess);
	
	while($query_rowmess = $query_runmess->fetch_assoc())
	{?>
		
		<?php
			if($query_rowmess['userid']==$_SESSION["userid"])
			{
		?>
				<li class="right clearfix">
					<span class="chat-img pull-right">
						<img src="<?php echo"images/".$_SESSION["img"];?>" alt="User Avatar" class="img-circle" style="width:50px;height:50px;" />
					</span>
					<div class="chat-body clearfix">
						<div class="header">
							<small class=" text-muted">
								<i class="fa fa-clock-o fa-fw"></i><?php echo $query_rowmess['time']; ?></small>
							<strong class="pull-right primary-font"><?php echo $_SESSION["username"] ?></strong>
						</div>
						<p>
							<?php echo $query_rowmess['message']; ?>
						</p>
					</div>
				</li>
				
		<?php }  ?>
		
		
						<?php
							if($query_rowmess['userid']!=$_SESSION["userid"])
							{
								
							
							$sqloname = "SELECT username,img from users
											WHERE `userid` = '{$query_rowmess['userid']}'";
					
							$query_runoname = $conn->query($sqloname);
				
							while($query_rowoname = $query_runoname->fetch_assoc())
							{
								$ousername = $query_rowoname['username'];
								$oimg = $query_rowoname['img'];
							}
												
						?>
						
		
						<li class="left clearfix">
							<span class="chat-img pull-left">
								<img src="<?php echo"images/".$oimg?>" alt="User Avatar" class="img-circle" style="width:50px;height:50px;"/>
							</span>
							<div class="chat-body clearfix">
								<div class="header">
									<strong class="primary-font"><?php echo $ousername; ?></strong>
									<small class="pull-right text-muted">
										<i class="fa fa-clock-o fa-fw"></i><?php echo $query_rowmess['time']; ?>
									</small>
								</div>
								<p>
									<?php echo $query_rowmess['message']; ?>
							</div>
						</li>
		
				<?php } ?>
		
	<?php } ?>

