<div class="center1">
	<div id="register_title"><?php echo(lang('admin_news'))?></div> 
	<div id="announcement_table" style="background-color:#e0e9fc;">
		<?php 
			if($news){	
				$row = $news;		
		?>
		<div class="newstitle"><label><?php echo($row->title)?></label></div>						
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
			<p><?php echo($row->description)?></p>								
		</div>				
		<?php		
			}		
		?>
	</div>		
</div>
