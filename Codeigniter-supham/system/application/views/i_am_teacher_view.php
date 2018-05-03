<div class="center1">
	<div id="register_title"><?php echo(lang('i_am_teacher'))?></div> 	
	<div id="announcement_table" style="background-color:#e0e9fc;">
		<?php 
			if($i_am_teacher){	
				$row = $i_am_teacher;		
		?>		
		<div class="aboutus">															
			<?php echo($row->description)?>								
		</div>				
		<?php		
			}		
		?>
	</div>		
</div>
