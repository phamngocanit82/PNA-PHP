<div id="lefter">	
	<div id="top"></div>
	<div id="main_center">
		<div id="center">
			<div id="register" align="left">
				<?php 
				if($news){
					for($i=0; $i<count($news); $i++){
						$row = $news[$i];
				?>				
				<div id="hrefTitle">
					<a href="<?=base_url()?>news/detail/<?=$row->id?>"><?=$row->title?></a>					
					
				</div>	
				<div id="datetime"><?=$row->createdate.' at '.$row->create_hour?></div>
				<div style="margin-top:5px;font-size:13px;"><?php echo(checkLength($row->description,800))?></div>	
				<?php
						if($i<count($news)-1){
				?>
				<div id="break"></div>
				<?php
						}
					}					
					echo $this->pagination->create_links(); 
				}				
				?>				
			</div>
			
		</div>
	</div>
	<div id="bottom"></div>
</div>
