<div id="lefter">	
	<div id="top"></div>
	<div id="main_center">
	
		<div id="center">
			<div id="register" align="left">								
				<?php 
				if($news){
					$row = $news;
				?>				
				<div id="hrefTitle">
					<a href="#"><?=$row->title?></a>
				</div>	
				<div id="datetime"><?=$row->createdate.' at '.$row->create_hour?></div>
				<div style="font-size:13px;"><?=$row->description?>&nbsp;</div>					
				<?php					
				}
				?>				
			</div>
		</div>
		
	</div>
	<div id="bottom"></div>
</div>
