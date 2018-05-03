<div class="center1">
	<div id="register_title"><?php echo(lang('secret_find_teacher'))?></div> 	
	<div id="announcement_table" style="background-color:#e0e9fc;">
		<?php 
			if($secret_find_teacher){	
				$row = $secret_find_teacher;		
		?>		
		<div class="aboutus">															
			<?php echo($row->description)?>								
		</div>				
		<?php		
			}		
		?>
	</div>		
</div>
