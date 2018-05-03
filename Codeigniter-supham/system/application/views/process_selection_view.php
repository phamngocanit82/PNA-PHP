<div class="center1">
	<div id="register_title"><?php echo(lang('process_selection'))?></div> 	
	<div id="announcement_table" style="background-color:#e0e9fc;">
		<?php 
			if($process_selection){	
				$row = $process_selection;		
		?>		
		<div class="aboutus">															
			<?php echo($row->description)?>								
		</div>				
		<?php		
			}		
		?>
	</div>		
</div>
