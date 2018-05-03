<div class="center1">
	<div id="register_title"><?php echo(lang('admin_secret_studing'))?></div> 
	<div id="announcement_table">
		<?php 
			if($secret_studing){	
				$row = $secret_studing;		
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
