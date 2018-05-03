<div id="lefter">	
	<div id="top"></div>
	<div id="main_center">
		<div id="center">
			
			<?php
			if($user){				
			?>
			<div id="register" >
				<table style="width:660px;margin-bottom:20px;">
				<?php
				$i = 0;
				$j = 0;				
				while($i<count($user)){					
				?>				
					<tr>
					<?php
						for($j=0; $j<3; $j++){
							if($i == count($user)){
								$j = 3;
								$i = count($user);
							}		
							else{
								$row = $user[$i];
								$i++;															
					?>
						<td height="170px" width="220px" valign="top" align="center">
							<a href="<?=base_url().'avatar/'.$row->avatar?>" onclick="return hs.expand(this)"><img class="image" src="<?=base_url().'avatar/'.$row->avatar?>" width="120px" height="130px"/></a>
							</br><div style="margin-top:5px;"><b>Chat with <span style="color:#0000ff">"<?=$row->nickname?>"<span></b></div>						
							<a  href="ymsgr:sendim?<?=str_replace('@yahoo.com','',$row->email)?>">
							<img src="http://opi.yahoo.com/online?u=<?=str_replace('@yahoo.com','',$row->email)?>&m=g&t=9" border="0" alt="">
						</td>
					<?php
							}
						}
					?>
					</tr>	
				<?php
				}
				?>							
						
				</table>				
			</div>
			<?php
			}
			?>
			
			
		</div>
	</div>
	<div id="bottom"></div>
</div>
