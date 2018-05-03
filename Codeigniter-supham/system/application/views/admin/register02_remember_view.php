<div class="right">
	<div id="title"><label><?php echo(lang('admin_register_member'))?></label></div>
	<?php 
	if($register02){
		$row = $register02;
	?>
    <table>    		
	   	<tr>
			<td colspan="2" class="title_find_teacher"><?php echo(lang('contact_information'))?></td>				
		</tr>	
		<tr>
			<td align="left"></td>
			<td id="title_blue" align="left">
			<?php echo(lang('member_name'))?>&nbsp:&nbsp
			<?php echo($row->name)?>
			(<?php
			if($row->gender == 0) echo(lang('male'));
			if($row->gender == 1) echo(lang('female'));					
			?>)
			[<?php echo(lang('code'))?>&nbsp:&nbsp
					<?php echo($row->id)?>]
			</td>
		</tr>
		<tr>
			<td align="left"></td>
			<td id="title_blue" align="left">
			<?php echo(lang('email'))?>&nbsp:&nbsp
			<?php echo($row->email)?>		
			</td>	
		</tr>
		<tr>
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('born'))?>&nbsp:&nbsp
			<?php echo($row->birthday)?>
			</td>	
		</tr>
		<tr>
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('placeofbirth'))?>&nbsp:&nbsp
			<?php echo($row->placeofbirthName)?>		
			</td>	
		</tr>
		<tr>
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('address'))?>&nbsp:&nbsp
			<?php echo($row->address)?>		
			</td>	
		</tr>
		<tr>
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('telephone'))?>&nbsp:&nbsp
			<?php echo($row->telephone)?>		
			</td>	
		</tr>
				<tr>
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('mobilephone'))?>&nbsp:&nbsp
			<?php echo($row->mobilephone)?>		
			</td>	
		</tr>
		<tr>
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('current'))?>&nbsp:&nbsp
			<?php
			if($row->type == 0) echo(lang('student'));
			if($row->type == 1) echo(lang('graduated'));
			if($row->type == 2) echo(lang('teacher'));
			?>		
			</td>			
		</tr>
		<tr>
			<td colspan="2" class="title_find_teacher"><?php echo(lang('process_of_learning'))?></td>				
		</tr>			
	   	<tr>
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('title_school'))?>&nbsp:&nbsp
			<?php echo($row->schoolName)?>
			</td>	
		</tr>
		<tr>
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('specialized'))?>&nbsp:&nbsp
			<?php echo($row->specialized)?>
			</td>	
		</tr>
		<tr>
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('graduate'))?>&nbsp:&nbsp
			<?php echo($row->graduate)?>
			</td>		
		</tr>
		<tr>
			<td colspan="2" class="title_find_teacher"><?php echo(lang('receive_trainning'))?></td>				
		</tr>			
	   	<tr>
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('receive_class'))?>&nbsp:&nbsp
			<?php 
			if($row->id_level_from !=0)
				echo(strtolower($row->level_from_name))
			?>
			<?php 
			if($row->id_level_to !=0)
				echo(' '.lang('to').' '.strtolower($row->level_to_name))
			?>
			</td>		
		</tr>
		<tr>
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('find_subjects'))?>&nbsp:&nbsp
			<?php echo($row->subjects)?>		
			</td>					
		</tr>
		<tr>			
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('area_teach'))?>&nbsp:&nbsp
			<?php echo($row->area_teach)?>
			</td>		
		</tr>
		<tr>	
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('time_teach'))?>&nbsp:&nbsp
			<?php echo($row->time_teach)?>
			</td>			
		</tr>
		<tr>	
			<td align="left"></td>
			<td align="left">
			<?php echo(lang('salary'))?>&nbsp:&nbsp
			<?php echo($row->salary)?>
			</td>		
		</tr>
		<tr>
			<td colspan="2" class="title_find_teacher"><?php echo(lang('instroduction'))?></td>				
		</tr>			
	   	<tr>
			<td align="left"></td>
			<td align="left"><?php echo($row->description)?></td>			
		</tr>				
	</table>
    <?php 
	}
    ?> 
</div>