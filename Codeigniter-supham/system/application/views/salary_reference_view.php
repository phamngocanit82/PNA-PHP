<div class="center1">
	<div id="register_title">Bảng lương PH tham khảo</div> 	
	<div id="announcement_table" style="background-color:#e0e9fc;">
		<?php 
			if($salary_reference){	
				$row = $salary_reference;		
		?>		
		<div class="aboutus">															
			<?php echo($row->description)?>								
		</div>				
		<?php		
			}		
		?>
	</div>		
</div>
