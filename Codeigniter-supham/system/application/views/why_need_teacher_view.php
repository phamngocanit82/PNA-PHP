<div class="center1">
	<div id="register_title"><?php echo(lang('why_need_teacher'))?></div> 	
	<div id="announcement_table" style="background-color:#e0e9fc;">
		<?php 
			if($why_need_teacher){	
				$row = $why_need_teacher;		
		?>		
		<div class="aboutus">															
			<?php echo($row->description)?>								
		</div>				
		<?php		
			}		
		?>
	</div>		
</div>
