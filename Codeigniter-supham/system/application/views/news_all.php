<div class="center1">	
 	<div id="register_title"><?php echo(lang('admin_news'))?></div> 
	<div id="announcement_table">
	<?php 
		if($news){
			for($i=0; $i<count($news); $i++){
				$row = $news[$i];
	?>
		<div style="float:left">
			<div class="newstitle">
				<a href="<?=base_url()?>news/view/<?php echo($row->id)?>"><?php echo($row->title)?></a>				
			</div>
			<div class="contents">									
				<?php 
				if($row->image){
				?>
				<a id="image" href="#" onclick="return hs.expand(this)">
					<img src="<?=base_url().'uploads/'.$row->image?>" alt="" width="120" height="120" title="" border="0"/>
				</a>
				<?php
				}
				?>			
				<small><?php echo($row->createdate.' '.lang('admin_at').' '.$row->create_hour)?></small>	
				<p><?php echo(checkLength($row->description,400))?></p>								
			</div>				
		</div>		
		<div class="break_news"></div>
	<?php		
			}
		}
	?>
	<?php
		if($news)
			echo $this->pagination->create_links(); 
		else 
			echo(lang('no_news'));
	?>		
	</br>	
	</div>
</div>
