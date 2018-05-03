<div class="center1">
	<div id="register_title"><?php echo(lang('aboutus'))?></div> 	
	<div id="announcement_table" style="background-color:#e0e9fc;">
		<?php 
			if($about){	
				$row = $about;		
		?>		
		<div class="aboutus">															
			<?php echo($row->description)?>								
		</div>				
		<?php		
			}		
		?>
	</div>		
</div>
